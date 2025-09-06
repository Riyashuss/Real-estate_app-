<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
 public function welcome()
    {
        return view("welcome");
    }
    

 public function pipeline(){
    return view("Pipeline");
 }

 public function deal_process_all_tabs()
    {
        if (view()->exists("deal_process_all_tabs")) {
            return view("deal_process_all_tabs");
        }

        return abort(404);
    }

}
