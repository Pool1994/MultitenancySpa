<?php

namespace App\Http\Controllers\Landlord\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("landlord.home");
    }
}