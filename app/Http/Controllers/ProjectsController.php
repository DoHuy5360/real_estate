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
        $all_projects = DB::select("
            SELECT p.id, project_name, price, source, creator, project_description, name, phone, email, avatar, country, description
            FROM public.projects p, public.users u
            WHERE p.creator::integer = u.id::integer
        ");
        return view('projects.projects', [
            'all_projects' => $all_projects,
        ]);
    }
    public function showProject($project_id)
    {
        $user_id = Auth::user()->id;
        $project = DB::select("
            select p.id, u.id as user_id, project_name, role, description, avatar, country, email, phone, name, project_description, creator, source, price
            from public.projects p, public.users u
            where p.id = {$project_id} and p.creator::integer = u.id::integer
        ")[0];
        // dd($project);
        $in_cart = DB::select(
            "select * 
            from public.carts 
            where reference = '{$project_id}' and orderer = '{$user_id}'"
        );
        // dd($in_cart);
        $all_project_id_in_cart = DB::select("
            select reference
            from carts
            where orderer = '{$user_id}'
        ");
        $array_project_id_in_cart = [];
        foreach ($all_project_id_in_cart as $reference => $value) {
            array_push($array_project_id_in_cart, $value->reference);
        }
        // dd($array_project_id_in_cart);
        $all_creator_project = DB::select("
            select * 
            from public.projects p
            where p.creator = '{$project->user_id}'
        ");
        // dd($all_creator_project);
        return view('projects.view', [
            'project' => $project,
            'in_cart' => $in_cart,
            'all_creator_project' => $all_creator_project,
            'array_project_id_in_cart' => $array_project_id_in_cart,
        ]);
    }
    public function addProject()
    {
        return view('projects.add');
    }
    public function saveProject(Request $form)
    {
        $empty_project = new Project;
        Project::_save($form, $empty_project);
        return redirect()->back()->with('add-success', 'Add successfully!');
    }
    public function editProject($project_id)
    {
        $project = Project::_select($project_id);
        return view('projects.edit', [
            'project' => $project,
        ]);
    }
    public function updateProject(Request $request, $project_id)
    {
        try {
            Project::_update($request, $project_id);
        } catch (\Throwable $th) {
            return redirect()->back()->with('edit-fail', 'Edit fail!');
        }
        return redirect()->back()->with('edit-success', 'Edit success!');
    }
    public function deleteProject(Request $form)
    {
        Project::_delete($form);
        return redirect('projects')->with('delete-success', 'Delete successfully!');
    }
    public function addToCart(Request $form)
    {
        // return redirect()->back()->with('add-fail', "Project was picked up by user {$respective_user[0]->name}");
        $empty_cart = new Cart;
        Cart::_add($form, $empty_cart);
        return redirect()->back()->with('add-success', 'Add successfully!');
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
