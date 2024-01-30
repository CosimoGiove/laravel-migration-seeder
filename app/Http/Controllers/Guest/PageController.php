<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;
use PhpParser\Node\VarLikeIdentifier;

class PageController extends Controller
{
    public function index(){
        $trains = Train::where("data_di_partenza","like","2024-01-30")->get();

        return view('welcome',compact("trains"));
    }
}
