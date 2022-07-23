<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Project extends Model
{
    use HasFactory;
    public static function _select($project_id)
    {
        // $getData = DB::select("select * from projects where id = {$project_id}");
        $getData = DB::table('projects')->find($project_id);
        return $getData;
    }
    public static function _save($form, $empty_project)
    {
        $empty_project->project_name = $form->project_name;
        $empty_project->price = $form->price;
        $empty_project->source = $form->source;
        $empty_project->creator = Auth::user()->id;
        $empty_project->project_description = "{$form->project_description}";
        $empty_project->save();
    }
    public static function _update($request_from_controller, $project_id_from_controller)
    {
        try {
            Project::where('id', '=', $project_id_from_controller)->update([
                'project_name' => $request_from_controller->name,
                'price' => $request_from_controller->price,
                'source' => $request_from_controller->source,
                'project_description' => $request_from_controller->description,
            ]);
        } catch (\Throwable $error) {
            return "Update fail → Error: {$error}";
        }
        return "Update successfully!";
    }
    public static function _delete($form)
    {
        DB::delete("delete from projects where id = {$form->id}");
    }
}
