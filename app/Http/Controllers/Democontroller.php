<?php

namespace App\Http\Controllers;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Democontroller extends Controller
{
    function Demoactive(){
    

        
        $users = DB::table('products')->get();
      

      

        return $users;

    }
}
