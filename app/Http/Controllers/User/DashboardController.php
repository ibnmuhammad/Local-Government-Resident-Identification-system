<?php

namespace App\Http\Controllers\User;

use Dotunj\LaraTwilio\Facades\LaraTwilio;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
// use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\LGoffice;
use App\Models\Resident;
use App\Models\User;
use App\Models\TenCellLeader;
use App\Models\House;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    public function __construct(){
        $this -> middleware('auth');
    }

    public function index(){
        $user_id = auth()->user()->id;
        $GovtID = DB::table('lgdetails')->where('user_id', $user_id)->value('id');
        $residents = DB::table('residents')->where('LocalGovtID', $GovtID)->get();
        $wakazi = $residents->count();
        $LocalGovtID = DB::table('lgdetails')->where('user_id', $user_id)->value('LocalGovtID');
        $houses = DB::table('houses')->where('LocalGovtID', $LocalGovtID)->get();
        $nyumba = $houses->count();
        $tencellleader = DB::table('tencellleaders')->where('LocalGovtID', $LocalGovtID)->get();
        $balozi = $tencellleader->count();
        $checkExist = DB::select('select * from lgdetails where user_id = ?', [$user_id]);
        // return $checkExist;
        if($checkExist){
            // return $houses;
            return view('user.dashboard')->with('wakazi', $wakazi)->with('nyumba', $nyumba)->with('balozi', $balozi);
        }else{
            return redirect('user/createprofile');
        }
        // return view('user.dashboard');
    }

    public function create(){
        return view('user.createprofile');
    }

    public function store(Request $request){
        $this->validate($request, [
            'LocalGovtID' => 'required',
            'leader' => 'required',
            'mtendaji' => 'required',
            'ward' => 'required',
            'street' => 'required',
            'slp' => 'required',
            'phonenumber' => 'required'
        ]);
        //catch added by column value from table user
        $user_id = auth()->user()->id;
        $manage = DB::table('users')->where('id', $user_id)->value('AddedBy');         //return only a single value
        
        $addedBy = DB::table('users')->where('id', $user_id)->value('AddedBy');
        $district = DB::table('districtsadmins')->where('user_id', $addedBy)->value('name');
        $region = DB::table('districtsadmins')->where('user_id', $addedBy)->value('region');

        //Create profile
        $lgoffice = new LGoffice;
        $lgoffice->LocalGovtID = $request->input('LocalGovtID');
        $lgoffice->leader = $request->input('leader');
        $lgoffice->AfisaMtendaji = $request->input('mtendaji');
        $lgoffice->region = $region;
        $lgoffice->district = $district;
        $lgoffice->ward = $request->input('ward');
        $lgoffice->street = $request->input('street');
        $lgoffice->slp = $request->input('slp');
        $lgoffice->phonenumber = $request->input('phonenumber');
        $lgoffice ->user_id = $user_id;
        $lgoffice ->ManagedBy = $manage;
        $lgoffice->save();

        $pass = toast('Taarifa zimehifadhiwa kikamilifu','success')->autoClose(5000);
        return redirect('/user/profile')->with('pass', $pass);
    }

    public function profile(){
        $user_id = auth()->user()->id;
        $users = DB::select('select * from lgdetails where user_id = ?', [$user_id]);
        
        return view('user.profile')->with('users', $users);
    }

    public function editprofile($id){
        $lgoffice = LGoffice::find($id);
        return view('user.editprofile')->with('lgoffice', $lgoffice);
    }

    public function editlogin($id){
        $user = User::find($id);
        // return $user;
        return view('user.editlogin')->with('user', $user);
    }

    public function updatelogin(Request $request){

        $email = $request->input('email');
        $username = $request->input('username');
        $password = $request->input('password');
        $newpassword = $request->input('newpassword');

        $thenewpassword = bcrypt($newpassword);

        //retrieve old password of a user
        $user_id = auth()->user()->id;
        $oldpassword = User::find($user_id)->password;

        if (Hash::check($password, $oldpassword)) {
            // If the passwords match then
            $update = DB::update('update users set username = ?, password = ? where id = ?',
            [$username, $thenewpassword, $user_id]);
        }else{
            $pass = toast('Password Mismacth','error')->autoClose(5000);
            return redirect('user/profile')->with('pass', $pass);
        }
        $pass = toast('Login details updated successfully','success')->autoClose(5000);
        return redirect('user/profile')->with('pass', $pass);
    }

    public function updateprofile(Request $request){
        $user_id = auth()->user()->id;
        $this->validate($request, [
            'leader' => 'required',
            'phonenumber' => 'required'
        ]);
            $leader = $request->input('leader');
            $phonenumber = $request->input('phonenumber');
        //update the details
        $users = DB::update('update lgdetails set leader = ?, phonenumber = ? where user_id = ?', [$leader, $phonenumber, $user_id]);

        $pass = toast('Taarifa za mtaa zimefanikiwa kubadilishwa','success')->autoClose(5000);
        return redirect('/user/profile')->with('pass', $pass);

    }

    public function verifypage(){
        return view('user.Resident.verify');
    }

    public function shifting(Request $request){
        $resid = $request->input('resid');
        $status = $request->input('status');
        $phonenumber = $request->input('phonenumber');
        $date = Carbon::now()->format('Y-m-d');
        $update = DB::update('update residents set phonenumber = ?, status = ?, Datekuhama = ? where resid = ?', [$phonenumber, $status, $date, $resid]);

        $firstname = $request->input('firstname');
        $middlename = $request->input('middlename');
        $lastname = $request->input('lastname');


        //for sending sms Twilio
        $sendSms = LaraTwilio::notify($phonenumber, 'Habari, Ndugu '.$firstname.' '.$middlename.' '.$lastname.', Unatakiwa kuripoti na kujisajili katika mtaa unaohamia ndani ya siku kumi na nne(14) za kazi.');
        return redirect('user/user/resident')->with('sendSms', $sendSms);

        $pass = toast('Taarifa za mkazi zimebadilishwa','info')->autoClose(5000);
        return redirect('user/user/resident')->with('pass', $pass);
    }

    public function updateresident(){
        return view('user.Resident.update');
    }

    public function retrieveresident(Request $request){
        $this->validate($request, [
            'resid' => 'required',
        ]);
        $resid = $request->input('resid');
        $resident = Resident::where([
                ['resid', '=', $resid],
                ['status', '!=', null],
            ])->get();
        
        //calculating penalty amount
        $kuhamadate = DB::table('residents')->where('resid', $resid)->value('Datekuhama');
        $todaydate = Carbon::now();
        $days = $todaydate->diffInDays($kuhamadate);
        if($days>=14){
            $excdays = $days - 14;
            $penalty = $excdays * 1000;
        }else{
            $penalty = 0;
        }

        //retrieving LocalGovtID
        $user_id = Auth()->user()->id;
        $LocalGovtID = DB::table('lgdetails')->where('user_id', $user_id)->value('LocalGovtID');
        //retrieve houses on a specific local government
        $houses = House::where('LocalGovtID', '=', [$LocalGovtID])->get();

        //retrieve ten cell leaders for a specific local government office
        $balozi = TenCellLeader::where('LocalGovtID', '=', [$LocalGovtID])->get();
        
        if(count($resident)>0)
        {
            return view('user.Resident.update1')->with('resident', $resident)->with('penalty', $penalty)->with('houses', $houses)->with('balozi', $balozi);
        }
        else{
            $pass = toast('Namba ya mkazi uliyoingiza haipo au mkazi hajaripoti taarifa za kuhama anakotokea','warning')->autoClose(5000);
            return redirect('user/user/resident/update')->with('pass', $pass);
        }
    }
}
