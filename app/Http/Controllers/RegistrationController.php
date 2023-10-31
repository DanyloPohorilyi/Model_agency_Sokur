<?php

namespace App\Http\Controllers;

use App\Models\MyUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.registration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        session_start();
        session_unset();
        return redirect('/admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = MyUser::all();
        $user = null;
        foreach ($users as $u) {
            if($request->login == $u->Login)
            {
                $user = $u;
            }
        }
        if($user != null)
        {
            if($user->Password == $request->password)
            {
                session_start();
                $_SESSION['Id'] = $user->Id;
                $_SESSION['Login'] = $request->login;
                $_SESSION['Password'] = $request->password;
                $_SESSION['isAdmin'] = $user->RoleId == 1 ? true : false;
                return redirect('/admin'); 
            }
            else
            {
                return view("admin.404", array('message' =>"your password isn't correct!"));
            }
        }
        else{
            return view("admin.404", array('message' =>$request->login." doesn't exist!"));
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
        //
    }
}
