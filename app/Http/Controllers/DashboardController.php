<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function dashboard(Request $request){
        return view("admin.pages.dashboard");
    }
}