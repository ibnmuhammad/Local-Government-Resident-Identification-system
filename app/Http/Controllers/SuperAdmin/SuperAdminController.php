<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class SuperAdminController extends Controller
{
    public function __construct()
    {
        $this -> middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth() -> user() -> id;       
        $users = User::where('AddedBy', '=', [$user_id])->get();
        return view('superadmin.viewusers') -> with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.addnewuser');
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
            'email' => 'required',
            'role' => 'required',
            'password' => 'required',
            'password2' => 'required'
        ]);

        $password = $request->input('password');
        $password2 = $request->input('password2');
        
        $email = $request->input('email');
        $check = DB::table('users')->where('email', $email)->get();
        if(count($check)>0){
            $pass = alert()->error('Warning','The email is already taken');
            return redirect('superadministrator/superadmin/create')->with('pass', $pass);
        }
        else
        {
            if($password == $password2)
            {
                //Create User
                $staff = new User;
                $staff->username = $request->input('username');
                $staff->email = $request->input('email');
                $staff->role = $request->input('role');
                $staff->password = Hash::make($request->input('password'));
                $staff->AddedBy = Auth::user() ->id;
                $staff->save();
                $staff->attachRole($request->input('role'));
            
                // return 123;
                // $pass = toast('District Admin Added Successfully', 'success')->autoClose(5000);
                $pass = alert()->success('Success','District Admin Added Successfully');
                return redirect('/superadministrator/superadmin')->with('pass', $pass);
            }
            else{
                // $pass = toast('Password does not match', 'error')->autoClose(5000);
                $pass = alert()->error('Warning','Password does not match');
                return redirect('superadministrator/superadmin/create')->with('pass', $pass);
            }
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
        // $pass = toast('District Admin deleted successfully','success')->autoClose(5000);
        $pass = alert()->success('Success','District Admin deleted successfully');
        return redirect('superadministrator/superadmin')->with('pass', $pass);
    }
}
