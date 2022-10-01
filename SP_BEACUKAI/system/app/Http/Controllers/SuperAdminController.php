<?php

namespace App\Http\Controllers;

class SuperAdminController extends Controller{

    function showDashboard(){
        return view('super-admin.section.dashboard');
    }

    function showInbox(){
        return view('super-admin.section.inbox');
    }

}
