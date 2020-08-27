<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelUsers;

class Users extends Controller
{
    public function index(Request $request)
    {
			return response()->json(ModelUsers::all());
    }
	
	public function show(Request $request, $id = null)
    {
			return response()->json(ModelUsers::find($id));	
    }

    public function store(Request $request)
    {
        ModelUsers::create($request->all());
        return response()->json("oke");
    }

    public function edit(Request $request, $id)
    {
        $edit = ModelUsers::find($id);
		$edit->name = $request->input("name");
		$edit->email = $request->input("email");
		$edit->password = $request->input("password");
		$edit->api_token = $request->input("api_token");
		$edit->created_at = $request->input("created_at");
		$edit->update_at = $request->input("update_at");
		$edit->save();
		return response()->json("oke");
    }

    public function destroy(Request $request, $id)
    {
        ModelUsers::find($id)->delete();
        return response()->json("oke");
    }
    
}
