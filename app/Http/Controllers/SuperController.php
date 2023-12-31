<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperController extends Controller
{
    public function SuperDashboard(){
        return view("super.super_dashboard");
    }
}
