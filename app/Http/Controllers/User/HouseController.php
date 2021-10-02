<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\House;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HouseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth()->user()->id;
        $LocalGovtID = DB::table('lgdetails')->where('user_id', $user_id)->value('LocalGovtID');
        $houses = House::where('LocalGovtID', '=', [$LocalGovtID])->get();

        $checkExist = DB::select('select * from lgdetails where user_id = ?', [$user_id]);
        // return $checkExist;
        if($checkExist){
            return view('user.house.index')->with('houses', $houses);
        }else{
            return redirect('user/createprofile');
        }
        // return view('user.house.index')->with('houses', $houses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = auth()->user()->id;
        $LocalGovtID = DB::table('lgdetails')->where('user_id', $user_id)->value('LocalGovtID');
        $balozi = DB::table('tencellleaders')->where('LocalGovtID', $LocalGovtID)->get();
        $checkExist = DB::select('select * from lgdetails where user_id = ?', [$user_id]);
        // return $checkExist;
        if($checkExist){
            return view('user.house.createhouse')->with('balozi', $balozi);
        }else{
            return view('user.createprofile');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'HouseNumber' => 'required',
            'owner' =>'required',
            'phonenumber' => 'required',
            // 'baloziID' => 'required',
            'status' => 'required'
        ]);

        //retrieving LocalGovtID
        $user_id = Auth()->user()->id;
        $LocalGovtID = DB::table('lgdetails')->where('user_id', $user_id)->value('LocalGovtID');

        //retrieving adminID
        $adminID = DB::table('lgdetails')->where('user_id', $user_id)->value('ManagedBy');

        $nyumbanamba = $request->input('HouseNumber');
        $checkinDB = DB::table('houses')->where('HouseNumber', $nyumbanamba)->get();
        // return $checkinDB;
        if(count($checkinDB)>0){
            $pass = toast('Nyumba namba ipo','error')->autoClose(5000);
            return redirect('/user/user/house/create')->with('pass', $pass);
        }else{
            //create new house for a local government
            $house = new House;
            $house->HouseNumber = $request->input('HouseNumber');
            $house->owner = $request->input('owner');
            $house->phonenumber = $request->input('phonenumber');
            $house->LocalGovtID = $LocalGovtID;
            $house->status = $request->input('status');
            $house->baloziID = $request->input('baloziID');
            $house->adminID = $adminID;
            $house->save();

            $pass = toast('Nyumba imesajiliwa kikamilifu','success')->autoClose(5000);
            return redirect('/user/user/house')->with('pass', $pass);    
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
        $user_id = Auth()->user()->id;
        $LocalGovtID = DB::table('lgdetails')->where('user_id', $user_id)->value('LocalGovtID');
        $balozi = DB::table('tencellleaders')->where('LocalGovtID', $LocalGovtID)->get();
        $house = House::find($id);
        return view('user.house.edithouse')->with('house', $house)->with('balozi', $balozi);
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
            'HouseNumber' => 'required',
            'owner' =>'required',
            'phonenumber' => 'required',
            // 'baloziID' => 'required',
            'status' => 'required'
        ]);

        $HouseNumber = $request->input('HouseNumber');
        $owner = $request->input('owner');
        $phonenumber = $request->input('phonenumber');
        $status = $request->input('status');
        $baloziID = $request->input('baloziID');

        //update the details
        $users = DB::update('update houses set HouseNumber = ?, owner = ?, phonenumber = ?, baloziID = ?,
                status = ? where id = ?', [$HouseNumber, $owner, $phonenumber, $baloziID, $status, $id]);
        
        $pass = toast('Taarifa za nyumba zimebadilishwa','success')->autoClose(5000);
        return redirect('/user/user/house')->with('pass', $pass);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $house = House::find($id);
        $house->delete();
        $pass = toast('Taarifa za nyumba zimeondolewa','success')->autoClose(5000);
        return redirect('/user/user/house')->with('pass', $pass);
    }
}
