<?php

namespace App\Http\Controllers;

class SuperAdminController extends Controller{

    function showDashboard(){
        return view('super-admin.menu.dashboard');
    }

    function showAkses(){
        return view('super-admin.menu.akses');
    }

    function showInbox(){
        return view('super-admin.menu.inbox');
    }

}
