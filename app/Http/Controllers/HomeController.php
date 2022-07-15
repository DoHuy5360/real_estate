<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $all_projects = DB::select("select * from projects limit 5 offset 0");
        return view('home', [
            'all_projects' => $all_projects,
        ]);
    }
}
