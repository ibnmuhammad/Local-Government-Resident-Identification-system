<?php

namespace App\Http\Controllers\User;

use Dotunj\LaraTwilio\Facades\LaraTwilio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Verify;
use App\Models\House;
use App\Models\Resident;
use App\Models\TenCellLeader;
use RealRashid\SweetAlert\Facades\Alert;

class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth()->user()->id;
        $LocalGovtID = DB::table('lgdetails')->where('user_id', $user_id)->value('id');
        // $residents = Resident::where('LocalGovtID', '=', [$LocalGovtID])->get();
        $residents = Resident::where([
            ['LocalGovtID', '=', $LocalGovtID],
            ['status', '=', null],
        ])->get();

        // $user_id = auth()->user()->id;
        $checkExist = DB::select('select * from lgdetails where user_id = ?', [$user_id]);
        // return $checkExist;
        if($checkExist){
            return view('user.Resident.index')->with('residents', $residents);
            // return $residents;
        }else{
            $pass = toast('Unatakiwa kujaza taarifa zako kwanza','info')->autoClose(10000);
            return redirect('user/createprofile')->with('pass', $pass);
        }
        // return view('user.Resident.index')->with('residents', $residents);
        // return $residents;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'resid' => 'required',
        ]);
        $resid = $request->input('resid');
        $resident = Verify::where('resid', $resid)->get();
        
        //retrieving LocalGovtID
        $user_id = Auth()->user()->id;
        $LocalGovtID = DB::table('lgdetails')->where('user_id', $user_id)->value('LocalGovtID');

        //retrieve houses on a specific local government
        $houses = House::where('LocalGovtID', '=', [$LocalGovtID])->get();

        if(count($resident) > 0)
        {
            return view('user.Resident.create')->with('resident', $resident)->with('houses', $houses);
        }else{
            $pass = toast('Namba uliyoingiza haipo','error')->autoClose(5000);
            return back()->with('pass', $pass);
        }
        // return view('user.Resident.create')->with('resident', $resident)->with('houses', $houses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate
        $this->validate($request, [
            'pic' => 'required',
            'resid' =>'required',
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'phonenumber' =>'required',
            'gender' => 'required',
            'dob' => 'required',
            'marital' => 'required',
            'work' => 'required',
            'house' => 'required'
        ]);

        //retrieving LocalGovtID
        $user_id = Auth()->user()->id;
        $LocalGovtID = DB::table('lgdetails')->where('user_id', $user_id)->value('id');

        //retrieving balozi
        $house = $request->input('house');
        $baloziID = DB::table('houses')->where('id', $house)->value('baloziID');
        $balozi = DB::table('tencellleaders')->where('id', $baloziID)->value('name');

        $resid = $request->input('resid');

        $check = DB::table('residents')->where('resid', $resid)->get();
        // $checkExist = DB::select('select * from lgdetails where user_id = ?', [$user_id]);
        if(count($check)>0){
            $pass = toast('Mkazi ameshasajiliwa','error')->autoClose(5000);
            return redirect('user/user/resident')->with('pass', $pass);
        }
        else 
        {
            //create new resident for a local government
        $resident = new Resident();
        $resident->pic = $request->input('pic');
        $resident->resid = $request->input('resid');
        $resident->firstname = $request->input('firstname');
        $resident->middlename = $request->input('middlename');
        $resident->lastname = $request->input('lastname');
        $resident->phonenumber = $request->input('phonenumber');
        $resident->gender = $request->input('gender');
        $resident->dob = $request->input('dob');
        $resident->marital = $request->input('marital');
        $resident->work = $request->input('work');
        $resident->HouseID = $request->input('house');
        $resident->balozi = $balozi;
        $resident->LocalGovtID = $LocalGovtID;
        $resident->save();


        $firstname = $request->input('firstname');
        $middlename = $request->input('middlename');
        $lastname = $request->input('lastname');
        $phonenumber = $request->input('phonenumber');
        $mtaa = DB::table('lgdetails')->where('id', $LocalGovtID)->value('street');

        // return $mtaa;

        // for sending sms Twilio
        $sendSms = LaraTwilio::notify($phonenumber, 'Habari, Ndugu '.$firstname.' '.$middlename.' '.$lastname.', Umefanikiwa kujisajili katika mtaa wa '.$mtaa.'.');
        return redirect('user/user/resident')->with('sendSms', $sendSms)->with('success', 'Usajili umefanikiwa');

        $pass = toast('Usajili umefanikiwa','success')->autoClose(5000);
        return redirect('user/user/resident')->with('pass', $pass);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resident = Resident::find($id);
        // $resident = DB::select('select * from residents where resid = ?', [$id]);
        // return $resident;
        return view('user.Resident.shifting1')->with('resident', $resident);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'phonenumber' => 'required',
            'marital' =>'required',
            'work' => 'required',
            // 'balozi' => 'required',
            'house' => 'required',
            // 'penalty' => 'required'
        ]);

        $marital = $request->input('marital');
        $work = $request->input('work');
        $phonenumber = $request->input('phonenumber');
        $house = $request->input('house');
        // $penalty = $request->input('penalty');

        $firstname = $request->input('firstname');
        $middlename = $request->input('middlename');
        $lastname = $request->input('lastname');
        $phonenumber = $request->input('phonenumber');

        //retrieving balozi
        $baloziID = DB::table('houses')->where('id', $house)->value('baloziID');
        $balozi = DB::table('tencellleaders')->where('id', $baloziID)->value('name');
            
        $user_id = Auth()->user()->id;
        $LocalGovtID = DB::table('lgdetails')->where('user_id', $user_id)->value('id');
        $mtaa = DB::table('lgdetails')->where('id', $LocalGovtID)->value('street');

        // return $mtaa;
        $status = NULL;
        $date = NULL;

        // if($penalty > 0){
        //     $pass = toast('Mkazi anatakiwa kulipa faini kwa serikali ya mtaa kwanza','info')->autoClose(5000);
        //     return redirect('user/user/resident')->with('pass', $pass);
        // }
        // else{
        //     //update the details
        //     $users = DB::update('update residents set marital = ?, work = ?, phonenumber = ?, balozi = ?,
        //     HouseID = ?, LocalGovtID = ?, status = ?, Datekuhama = ? where id = ?', 
        //     [$marital, $work, $phonenumber, $balozi, $house, $LocalGovtID, $status, $date, $id]);

        //     //for sending sms Twilio
        //     // $sendSms = LaraTwilio::notify($phonenumber, 'Habari, Ndugu '.$firstname.' '.$middlename.' '.$lastname.', Umefanikiwa kujisajili katika mtaa wako mpya wa'.$mtaa.'.');
        //     // return redirect('user/user/resident')->with('sendSms', $sendSms)->with('success', 'Usajili umefanikiwa');

        //     $pass = toast('Usajili umefanikiwa','success')->autoClose(5000);
        //     return redirect('user/user/resident')->with('pass', $pass);
        // }
        
        //update the details
        $users = DB::update('update residents set marital = ?, work = ?, phonenumber = ?, balozi = ?,
        HouseID = ?, LocalGovtID = ?, status = ?, Datekuhama = ? where id = ?', 
        [$marital, $work, $phonenumber, $balozi, $house, $LocalGovtID, $status, $date, $id]);

        //for sending sms Twilio
        $sendSms = LaraTwilio::notify($phonenumber, 'Habari, Ndugu '.$firstname.' '.$middlename.' '.$lastname.', Umefanikiwa kujisajili katika mtaa wako mpya wa '.$mtaa.'.');
        $pass = toast('Usajili umefanikiwa','success')->autoClose(5000);
        return redirect('user/user/resident')->with('sendSms', $sendSms)->with('pass', $pass)->with('success', 'Usajili umefanikiwa');

        // $pass = toast('Usajili umefanikiwa','success')->autoClose(5000);
        // return redirect('user/user/resident')->with('pass', $pass);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
