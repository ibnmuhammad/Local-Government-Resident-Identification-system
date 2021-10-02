<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\TenCellLeader;
use Facade\Ignition\Tabs\Tab;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TenCellController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth()->user()->id;
        $LocalGovtID = DB::table('lgdetails')->where('user_id', $user_id)->value('LocalGovtID');
        $balozi = TenCellLeader::where('LocalGovtID', '=', [$LocalGovtID])->get();
        // $balozi = DB::select('select * from tencellleaders where LocalGovtID = ?', [$LocalGovtID]);

        $checkExist = DB::select('select * from lgdetails where user_id = ?', [$user_id]);
        // return $checkExist;
        if($checkExist){
            return view('user.tencellleader.index')->with('balozi', $balozi);
        }else{
            return redirect('user/createprofile');
        }
        // return view('user.tencellleader.index')->with('balozi', $balozi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = auth()->user()->id;
        $checkExist = DB::select('select * from lgdetails where user_id = ?', [$user_id]);
        $LocalGovtID = DB::table('lgdetails')->where('user_id', $user_id)->value('LocalGovtID');
        // return $checkExist;
        if($checkExist){
            return view('user.tencellleader.createbalozi')->with('LocalGovtID', $LocalGovtID);
        }else{
            return view('user.createprofile');
        }
        // $user_id = Auth()->user()->id;
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
            // 'LocalGovtID' => 'required',
            'name' => 'required',
            'phonenumber' => 'required'
        ]);
        
        //retrieving LocalGovtID
        $user_id = Auth()->user()->id;
        $LocalGovtID = DB::table('lgdetails')->where('user_id', $user_id)->value('LocalGovtID');

        //create new balozi for a local government
        $balozi = new TenCellLeader;
        $balozi->LocalGovtID = $LocalGovtID;
        $balozi->name = $request->input('name');
        $balozi->phonenumber = $request->input('phonenumber');
        $balozi->save();


        $pass = toast('Usajili wa balozi umefanikiwa','success')->autoClose(5000);
        return redirect('/user/user/tencellleader')->with('pass', $pass);
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
        $balozi = TenCellLeader::find($id);
        return view('user.tencellleader.editbalozi')->with('balozi', $balozi);
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
            'name' => 'required',
            'phonenumber' => 'required'
        ]);
            $name = $request->input('name');
            $phonenumber = $request->input('phonenumber');
        //update the details
        $users = DB::update('update tencellleaders set name = ?, phonenumber = ? where id = ?', [$name, $phonenumber, $id]);

        $pass = toast('Taarifa mpya zimehifadhiwa','success')->autoClose(5000);
        return redirect('/user/user/tencellleader')->with('pass', $pass);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shina = TenCellLeader::find($id);
        $shina->delete();
        // alert()->question('Are you sure?','You won\'t be able to revert this!')->showCancelButton('Cancel', '#aaa');
        $pass = toast('Balozi ameondolewa','info')->autoClose(5000);
        return redirect('/user/user/tencellleader')->with('pass', $pass);
    }
}
