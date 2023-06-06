<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Group;
class IndexController extends Controller
{
    //
    public function Index(){
        return Member::with('group')->get();
    }
    public function group(){
        return Group::get('member')->get();
    }
}
