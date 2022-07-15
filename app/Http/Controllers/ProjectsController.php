<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{
    public function index()
    {
        $all_projects = DB::select("select p.id, project_name, price, source, creator, project_description, name, phone, email, avatar, description from projects p, users u where p.creator = u.id");
        return view('projects.projects', [
            'all_projects' => $all_projects,
        ]);
    }
    public function showProject($project_id)
    {
        $project = Project::getDataProject($project_id);
        $in_cart = DB::select("select * from carts where reference = {$project_id}");
        return view('projects.view', [
            'project' => $project,
            'in_cart' => $in_cart,
        ]);
    }
    public function addProject()
    {
        return view('projects.add');
    }
    public function saveProject(Request $request)
    {
        $project = new Project;
        $project->project_name = $request->project_name;
        $project->price = $request->price;
        $project->source = $request->source;
        $project->creator = Auth::user()->id;
        $project->project_description = "{$request->project_description}";
        $project->save();
        return redirect()->back()->with('add-success', 'Add successfully!');
    }
    public function editProject($project_id)
    {
        $project = Project::getDataProject($project_id);
        return view('projects.edit', [
            'project' => $project,
        ]);
    }
    public function updateProjectController(Request $request, $project_id)
    {
        try {
            Project::updateProject($request, $project_id);
        } catch (\Throwable $th) {
            return redirect()->back()->with('edit-fail', 'Edit fail!');
        }
        return redirect()->back()->with('edit-success', 'Edit success!');
    }
    public function addToCart(Request $request)
    {
        $check = DB::select("select orderer from carts where reference = {$request->id}");
        if ($check) {
            $respective_user = DB::select("select name from users where id = {$check[0]->orderer}");
            // dd($check);
            return redirect()->back()->with('add-fail', "Project was picked up by user {$respective_user[0]->name}");
        } else {
            $project = DB::select("select * from projects where id = {$request->id}")[0];
            $cart = new Cart;
            $cart->name = $project->project_name;
            $cart->price = $project->price;
            $cart->reference = $project->id;
            $cart->orderer = Auth::user()->id;
            $cart->source = $project->source;
            $cart->save();
            return redirect()->back()->with('add-success', 'Add successfully!');
        }
        $this->duplicate_handle = $request->id;
    }
    public function saveImage(Request $request)
    {
        // Not in used
        // if ($request->hasFile('image_file')) {
        //     $the_image = $request->file('image_file');
        //     $new_name = time() . '.' . $the_image->getClientOriginalExtension();
        //     $dest = public_path('assets/img/cart/');
        //     $the_image->move($dest, $new_name);

        //     $the_image = new Image;
        //     $the_image->creator = Auth::user()->id;
        //     $the_image->name = $request->name;
        //     $the_image->source = $new_name;
        //     $the_image->save();
        //     return redirect()->back()->with("message", "Success!");
        // }
        // return redirect()->back()->with('message','Add successfully!');
    }
}
