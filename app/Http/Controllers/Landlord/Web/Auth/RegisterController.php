<?php

namespace App\Http\Controllers\Landlord\Web\Auth;

use App\Models\User;
use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index(){
        
        return view("landlord.auth.register");
    }
    public function store(Request $request){
         $tenant = new Tenant();
        $tenant->name = $request->business;
        $tenant->save();
        $tenant->makeCurrent();
        $user = new User();
        $user->name = $request->business;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        Auth::attempt(['email' => $user->email, "password" => $request->password]);
        $_user = Auth::user();
        $token = $_user->createToken('_token')->plainTextToken;
        
        return redirect("{$_SERVER['REQUEST_SCHEME']}://$tenant->domain?token=$token");
    }
}