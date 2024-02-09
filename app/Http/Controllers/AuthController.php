<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Illuminate\Validation\ValidationException;
class AuthController extends Controller
{
    public function login(Request $request)
    {
        try{
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);
    
            $user = User::where('email', $request->email)->first();
    
            if (! $user || ! Hash::check($request->password, $user->password)) {
                throw ValidationException::withMessages([
                    'email' => ['The provided credentials are incorrect.'],
                ]);
            }
            $result = [
                'message' => 'Berhasil login',
                'user' => $user,
                'token' => $user->createToken('login_api')->plainTextToken
            ];
            return response()->json($result, 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Gagal login',
                'error' => $e->getMessage()
            ], 500);
        }
      
    }
}
