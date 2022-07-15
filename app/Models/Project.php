<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Project extends Model
{
    use HasFactory;
    public static function getDataProject($project_id_from_controller)
    {
        // $getData = DB::select("select * from projects where id = {$project_id_from_controller}");
        $getData = DB::table('projects')->find($project_id_from_controller);
        return $getData;
    }
    public static function updateProject($request_from_controller, $project_id_from_controller)
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
}
