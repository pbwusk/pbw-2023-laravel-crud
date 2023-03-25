<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class registerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.register', [
            'title' => 'Register Page'
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // store data registration to table user which is name,npm,password
        $request->validate([
            'name' => 'required',
            'npm' => 'required',
            'password' => 'required'
        ]);

        # increment id
        $id = DB::table('users')->max('id');

        // store data to table user
        DB::table('users')->insert([
            'id' => $id + 1,
            'name' => $request->name,
            'npm' => $request->npm,
            'password' => $request->password
            
        ]);

        return redirect('/loginPage');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
