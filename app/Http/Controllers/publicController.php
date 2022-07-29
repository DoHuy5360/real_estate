<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class publicController extends Controller
{
    public function index()
    {
        $all_projects = DB::select('
            select *
            from projects
            order by id desc
            limit 4 offset 0
        ');
        return view('public', [
            'all_projects' => $all_projects,
        ]);
    }
}
