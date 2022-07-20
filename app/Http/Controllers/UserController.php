<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function editInformation(Request $request)
    {
        $user_id = Auth::user()->id;
        if (isset($request->avatar_url)) {
            DB::update("update users set  avatar = '{$request->avatar_url}' where users.id = {$user_id}");
        }
        DB::update("update users set description = '{$request->user_description}' where users.id = {$user_id}");
        DB::update("update users set country = '{$request->country}' where id = {$user_id}");
        return redirect()->back()->with('update-success', 'Update successfully!');
    }
}
