<?php

namespace App\Http\Controllers;

use App\crudOperations;
use Illuminate\Http\Request;

class CrudOperationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //store database table in varible
       $crud = new crudOperations;
       $username = $request->input('username');
       $email = $request->input('email');
       $role = $request->input('role');
       $pass = $request->input('pass');
        $crud->username = $username;
        $crud->email = $email;
        $crud->role = $role;
        $crud->password = $pass;

        echo $crud->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\crudOperations  $crudOperations
     * @return \Illuminate\Http\Response
     */
    public function show(crudOperations $crudOperations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\crudOperations  $crudOperations
     * @return \Illuminate\Http\Response
     */
    public function edit(crudOperations $crudOperations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\crudOperations  $crudOperations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, crudOperations $crudOperations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\crudOperations  $crudOperations
     * @return \Illuminate\Http\Response
     */
    public function destroy(crudOperations $crudOperations)
    {
        //
    }
}
