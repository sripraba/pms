<?php

namespace App\Http\Controllers;

use App\Password;
use Illuminate\Http\Request;

class PasswordController extends Controller
{

    protected $fillable = ['host', 'user_name', 'password'];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passwords = new Password();
        $data['pageHeader'] = 'Passwords';
        $data['route_path'] = 'passwords.create';
        $data['listHeader'] = ['Host'=>'host', 'User Name'=> 'user_name', 'Password' => 'password', 'Description' => 'description'];
        $data['listBody'] = $passwords->getList();
        return view('listView', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['route_path'] = 'passwords.create';
        return view('forms.create_record', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request...
        $flight = new Password;
        $flight->host = $request->host;
        $flight->user_name= $request->user_name;
        $flight->password = $request->password;
        $flight->description = $request->description;
        $flight->save();
        return redirect('/passwords');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Password  $password
     * @return \Illuminate\Http\Response
     */
    public function show(Password $password)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Password  $password
     * @return \Illuminate\Http\Response
     */
    public function edit(Password $password)
    {
        $data['record'] = $password;
        $data['action'] = '/passwords';
        return view('forms.edit_record', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Password  $password
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Password $password)
    {
        foreach($request->except('_method','_token') as $column=>$value){
            $password->$column = $value;
        }
        $password->save();
        return redirect('/passwords');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Password  $password
     * @return \Illuminate\Http\Response
     */
    public function destroy(Password $password)
    {
        $password->delete();
        return redirect('/passwords');
    }
}
