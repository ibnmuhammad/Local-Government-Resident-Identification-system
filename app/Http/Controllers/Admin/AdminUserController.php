<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth() -> user() -> id;
        // $users = DB::table('users')->where('AddedBy', [$user_id]);
        // $users = DB::select('select * from users where AddedBy = ?', [$user_id]);
        $users = User::where('AddedBy', '=', [$user_id])->get();
        // return $users;
        return view('admin.viewusers') -> with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = auth()->user()->id;
        $checkExist = DB::select('select * from districtsadmins where user_id = ?', [$user_id]);
        $regions = DB::table('regions')->get();
        // return $checkExist;
        if($checkExist){
            return view('admin.addnewuser');
        }else{
            return view('admin.profile.createprofile')->with('regions', $regions);
        }
        // return view('admin.addnewuser');
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
            'username' => 'required',
            // 'email' => 'required',
            'password' => 'required',
            'password2' => 'required'
        ]);

        $password = $request->input('password');
        $password2 = $request->input('password2');
        // return $password .' '. $password2;
        if($password == $password2)
        {
            //Create User
            $staff = new User;
            $staff->username = $request->input('username');
            $staff->email = $request->input('email');
            $staff->role = $request->input('role');
            $staff->password = Hash::make($request->input('password'));
            $staff -> AddedBy = Auth() -> user() -> id;
            $staff->save();
            $staff->attachRole($request->input('role'));

            // return 123;  
            $pass = toast('Local Government account created Successfully','success')->autoClose(5000);
            return redirect('/admin/admin')->with('pass', $pass);
        }else{
            $pass = toast('Password does not match','warning')->autoClose(5000);
            return redirect('admin/admin/create')->with('pass', $pass);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        $pass = toast('Local Goverment account deleted successfully','success')->autoClose(5000);
        return redirect('/admin/admin')->with('pass', $pass);
    }
}
