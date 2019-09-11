<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Post;
use Auth;
use Session;
use Illuminate\Support\Facades\Input;
use App\file;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdminPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->get();
        // echo "<pre>"; print_r($users[0]['id']); echo "</pre>"; exit();
        $user_id =$users[0]['id'];
        $roles = Role::all();
        $user_roles = $roles[0];
        $posts = Post::all();

        // $user_name = User::where('id',$user_id)->get();
        // $user_n =$user_name[0]['name'];
        // echo "<pre>"; print_r($user_name[0]['name']); echo "</pre>"; exit();
        return view('admin.posts.index',compact('users','posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::orderBy('id', 'DESC')->get();
        return view('admin.posts.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request->title;
        $body = $request->body;
       if (Input::hasFile('cimage')) {
           $file = Input::file('cimage');
            $file->move('uploads/Posts', $file->getClientOriginalName());
            $image = $file->getClientOriginalName();
       }
       $post_data = array('title' => $title,'body' =>$body,'photo'=>$image);
       // echo "<pre>"; print_r($post_data); echo "</pre>"; exit();
        Post::insert($post_data);
        Session::flash('message', "Post Added Sucessfully");
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
        $post= Post::where('id',$id)->get();
        $users = User::orderBy('id', 'DESC')->get();
        return view('admin.posts.edit',compact('post','users'));
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
        $title = $request->title;
        $body = $request->body;
       if (Input::hasFile('cimage')) {
           $file = Input::file('cimage');
            $file->move('uploads/Posts', $file->getClientOriginalName());
            $image = $file->getClientOriginalName();
       }
       $post_data = array('title' => $title,'body' =>$body,'photo'=>$image);
       // echo "<pre>"; print_r($post_data); echo "</pre>"; exit();
        Post::where('id',$id)
        ->Update($post_data);
        Session::flash('message', "Post Upadted Sucessfully");
        return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Post::where('id',$id)
        ->delete();
        Session::flash('message', "Post Deleted Sucessfully");
        return Redirect::back();
    }
}
