<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
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
        // $empty_project->project_description = "{$form->project_description}";
        $empty_project->project_description = $form->project_description;
        $empty_project->project_address = $form->project_address;
        $empty_project->project_acreage = $form->project_acreage;
        $empty_project->project_name = $form->project_name;
        $empty_project->project_type = $form->project_type;
        $empty_project->project_tip = $form->project_tip;
        $empty_project->creator = Auth::user()->id;
        $empty_project->source = $form->source;
        $empty_project->price = $form->price;
        $empty_project->save();
    }
    public static function _update($form)
    {
        try {
            Project::where('id', '=', $form->id)->update([
                'project_description' => $form->project_description,
                'project_address' => $form->project_address,
                'project_acreage' => $form->project_acreage,
                'project_type' => $form->project_type,
                'project_name' => $form->project_name,
                'project_tip' => $form->project_tip,
                'source' => $form->source,
                'price' => $form->price,
            ]);
        } catch (\Throwable $error) {
            return $error;
        }
        return true;
    }
    public static function _delete($form)
    {
        DB::delete("delete from projects where id = {$form->id}");
    }
}
