<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Cart extends Model
{
    use HasFactory;
    public static function _add($form, $empty_cart)
    {
        $the_project = DB::select("select * from projects where id = {$form->id}")[0];
        $empty_cart->name = $the_project->project_name;
        $empty_cart->price = $the_project->price;
        $empty_cart->reference = $the_project->id;
        $empty_cart->orderer = Auth::user()->id;
        $empty_cart->source = $the_project->source;
        $empty_cart->save();
    }
}
