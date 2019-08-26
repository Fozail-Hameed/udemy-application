<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Auth;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
{
   $this->middleware('auth');
}
    public function LogIn(Request $request){

        $email =$request->email;
        $password =$request->password;



        if (Auth::attempt(['email'=>$email, 'password'=>$password])) {
            return view('admin.master');
        }
        else{
            $request->session()->flash('error','Invalid Email/Password');
            return redirect()->back()->with('error','Invalid Email OR  Password');
        }
    }
    public function LogOut(){
        Auth::logout();
        return redirect('admin/login');
    }
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->get();
        // $role_id = $users[0]['role_id'];
        $roles =Role::all();
        $user_roles = $roles[0];
        // echo "<pre>"; print_r($user_roles); echo "</pre>";
        // exit();
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $pass = $request->password;
        $role_name = $request->role;
        $status = $request->status;
        $password = bcrypt($pass);
        $roles = Role::where('name',$role_name)->get();
        $role_i = $roles[0]['id'];
        $user_data = array('name' => $name,'email' =>$email,'is_active' =>$status,'role_id'=>$role_i,'password'=>$password);
        // echo "<pre>"; print_r($user_data); echo "</pre>";
        // exit();
        User::insert($user_data);
        Session::flash('message', "User Added Sucessfully");
        return Redirect::back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.users.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.users.edit');
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
        //
    }
}
