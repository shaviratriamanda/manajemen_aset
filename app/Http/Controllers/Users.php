<?php

namespace App\Http\Controllers;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\ModelUsers;

class Users extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view("users_read");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("users_add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $data['api_token'] = Hash::make($data['name']."-".$data['email']."-".date("Y-m-d H:i:s"));
        unset($data['_token']);
        ModelUsers::create($data);
        return redirect("users");
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
        $data['detail'] = ModelUsers::find($id);
        return view("users_edit", $data);
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
        $user = $request->all();
        unset($user['_token']);
        if(!empty($user['password']))
        {
            $user['password'] = Hash::make($user['password']);
        }
        else
        {
            unset($user['password']);
        }
        ModelUsers::where("id", $id)->update($user);
        return redirect("users");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ModelUsers::find($id)->delete();
        return redirect("users");
    }
    
    public function datatable(Request $request)
    {
      return datatables()->of(ModelUsers::all(
        "id",
        "name",	
        "email",
        "api_token",
        "jenis_kelamin",
        "nohp"))->toJson();
    }
}
