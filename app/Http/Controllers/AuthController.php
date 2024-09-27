<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;


class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.index');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // Important for session security
            
            // Get the authenticated user's role
            $role = Auth::user()->role;

            switch ($role) {
                case 'homeowner':
                    return redirect()->route('homeowner.dashboard');
                case 'engineer':
                    return redirect()->route('engineer.dashboard');
                case 'company':
                    return redirect()->route('company.dashboard');
                    case 'admin':
                        return redirect()->route('admin.dashboard');
                default:
                    Auth::logout(); // Logout if the role is somehow invalid
                    return redirect()->route('auth.index')->withErrors([
                        'email' => 'Unauthorized access.',
                    ]);
            }
        }
        return redirect()->back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();


    }

    public function register(Request $request)
    {
        Log::info('Register request data:', $request->all());
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'regex:/^[a-zA-Z\s]+$/'],
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|in:homeowner,engineer,company', // Add validation for role
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Log::info('Validated role:', ['role' => $request->role]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role, // Assign the selected role
        ]);

        ///Auth::login($user); // Automatically log the user in after registration
            //return redirect()->route('dashboard');

         return redirect()->back()->with('success', 'Thank you for registering! Please log in with your credentials.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.index'); // Redirect to auth form after logout
    }

    public function showAuthForm()
    {
        return view('auth.index');
    }
    //
}
