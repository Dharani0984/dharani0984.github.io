<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class LogoutController extends Controller
{
    /**
     * Handle the user logout request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        // Invalidate the JWT token
        //auth()->logout();
        Auth::logout();
        $user = User::find(Auth::id()); 
        return response()->json(['user'=> Auth::id(),'message' => 'Logged out successfully']);
    }
}
