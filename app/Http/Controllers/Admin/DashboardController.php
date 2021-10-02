<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\LGoffice;
use App\Models\Resident;
use App\Models\House;
use App\Models\Shina;
use App\Models\TenCellLeader;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    public function __construct(){
        $this -> middleware('auth');
    }

    public function index(){
        $user_id = auth()->user()->id;
        $localgovt = DB::table('lgdetails')->where('ManagedBy', $user_id)->get();
        $local = $localgovt->count();
        $residents = DB::table('residents')
                    ->join('lgdetails', 'residents.LocalGovtID', '=', 'lgdetails.id')
                    ->select('residents.*', 'lgdetails.ManagedBy')->where('lgdetails.ManagedBy', '=', $user_id)
                    ->get();
        $wakazi = $residents->count();
        $houses = DB::table('houses')->where('adminID', $user_id)->get();
        $nyumba = $houses->count();
        $tencellleaders = DB::table('tencellleaders')
                    ->join('lgdetails', 'tencellleaders.LocalGovtID', '=', 'lgdetails.LocalGovtID')
                    ->select('tencellleaders.*', 'lgdetails.ManagedBy')->where('lgdetails.ManagedBy', '=', $user_id)
                    ->get();
        $balozi = $tencellleaders->count();
        $checkExist = DB::select('select * from districtsadmins where user_id = ?', [$user_id]);
        $regions = DB::table('regions')->get();
        // return $checkExist;
        if($checkExist){
            return view('admin.dashboard')->with('local', $local)->with('wakazi', $wakazi)
            ->with('nyumba', $nyumba)->with('balozi', $balozi);
            // return $houses;
        }else{
            return view('admin.profile.createprofile')->with('regions', $regions);
        }
        // return view('admin.dashboard');
    }

    public function showlg(){
        $user_id = Auth()->user()->id;
        // $lg = LGoffice::where('ManagedBy', '=', [$user_id]);  //accepts paginate. why?
        $lg = DB::select('select * from lgdetails where ManagedBy = ?', [$user_id]); //does not accept paginate. what's wrong?
        // return $lg;
        // return $user_id;
        return view('admin.showlg')->with('lg', $lg);
    }

    function showDistrict(Request $request){
        $id=$request->input('regionId');

        $district=DB::table('district')->where('regionID',$id)->get();

        return $district;
    }

    public function editlogin($id){
        $user = User::find($id);
        // return $user;
        return view('admin.editlogin')->with('user', $user);
    }

    public function updatelogin(Request $request){
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
            'newpassword' => 'required',
            // 'newpassword2' => 'required'
        ]);

        $username = $request->input('username');
        $password = $request->input('password');
        $newpassword = $request->input('newpassword');
        // $newpassword2 = $request->input('newpassword2');

        $thenewpassword = bcrypt($newpassword);

        //retrieve old password of a user
        $user_id = auth()->user()->id;
        // $oldpassword = DB::table('users')->where('id', $user_id)->value('password');

        $oldpassword = User::find($user_id)->password;
        
        if (Hash::check($password, $oldpassword)) {
            // If the passwords match then
            $update = DB::update('update users set username = ?, password = ? where id = ?',
            [$username, $thenewpassword, $user_id]);
        }else{
            // $pass = toast('Password Mismacth','error')->autoClose(5000);
            $pass = alert()->error('error','Password Mismacth');
            return redirect('admin')->with('pass', $pass);
        }
        // $pass = toast('Login details updated successfully','success')->autoClose(5000);
        $pass = alert()->success('success','Login details updated successfully');
        return redirect('admin')->with('pass', $pass);
    }

    public function mkazi($id){
        // $LocalGovtID = DB::table('lgdetails')->where('id', $id)->value('LocalGovtID');
        $residents = Resident::where('LocalGovtID', '=', [$id])->get();
        $mtaa = LGoffice::find($id);
        return view('admin.LocalGovt.resident')->with('residents', $residents)->with('mtaa', $mtaa);
    }

    public function nyumba($id){
        $LocalGovtID = DB::table('lgdetails')->where('id', $id)->value('LocalGovtID');
        $houses = House::where('LocalGovtID', '=', [$LocalGovtID])->get();
        $mtaa = LGoffice::find($id);
        return view('admin.LocalGovt.house')->with('houses', $houses)->with('mtaa', $mtaa);
    }

    public function balozi($id){
        $LocalGovtID = DB::table('lgdetails')->where('id', $id)->value('LocalGovtID');
        $balozi = TenCellLeader::where('LocalGovtID', '=', [$LocalGovtID])->get();
        $mtaa = LGoffice::find($id);
        return view('admin.LocalGovt.balozi')->with('balozi', $balozi)->with('mtaa', $mtaa);
    }
}
