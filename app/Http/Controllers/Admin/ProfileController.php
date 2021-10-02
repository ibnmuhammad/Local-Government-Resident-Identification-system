<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Districtadmin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth()->user()->id;
        $profile = DB::select('select * from districtsadmins where user_id = ?', [$user_id]);
        // return $profile;
        return view('admin.profile.profile')->with('profile', $profile);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions = DB::table('regions')->get();
        // return $regions;
       
        return view('admin.profile.createprofile')->with('regions', $regions);
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
            'district' => 'required',
            'region' => 'required',
            'phonenumber' => 'required'
        ]);

        $user_id = Auth()->user()->id;

        $districtID = $request->input('district');
        $regionID = $request->input('region');
        // return $districtID. " and " .$regionID;
        $district = DB::table('district')->where('id', $districtID)->value('name');
        $region = DB::table('regions')->where('regionID', $regionID)->value('name');
        // return $district. " and " .$region;

        //create district profile
        $profile = new Districtadmin;
        $profile->name = $district;
        $profile->region = $region;
        $profile->phonenumber = $request->input('phonenumber');
        $profile->user_id = $user_id;
        $profile->save();

        $pass = toast('Profile Created Successfully','success')->autoClose(5000);
        return redirect('admin/admin/profile')->with('pass', $pass);
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
        $profile = DB::select('select * from districtsadmins where user_id = ?', [$user_id]);
        return view('admin.profile.editprofile')->with('profile', $profile);
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
            // 'name' => 'required',
            // 'region' => 'required',
            'phonenumber' => 'required'
        ]);
            // $name = $request->input('name');
            // $region = $request->input('region');
            $phonenumber = $request->input('phonenumber');
        //update the details
        $users = DB::update('update districtsadmins set phonenumber = ? where id = ?', [$phonenumber, $id]);

        // return view('user.profile')->with('success', 'Details updated successfully');
        $pass = toast('Details updated successfully','success')->autoClose(5000);
        return redirect('admin/admin/profile')->with('pass', $pass);
        // return $id;
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
