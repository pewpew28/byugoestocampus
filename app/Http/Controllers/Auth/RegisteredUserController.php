<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('welcome');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'nim' => ['nullable', 'string', 'max:255', 'unique:users'],
            'npsn' => ['nullable', 'string', 'max:255'],
            'telp' => ['nullable', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        if($request->telp == $request->confirm){
            $user = User::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'nim' => $request->nim,
                'npsn' => $request->npsn,
                'telp' => $request->telp,
                'password' => Hash::make($request->password),
            ]);
        }
            event(new Registered($user));
    
            Auth::login($user);
    
            return redirect(route('dashboard', absolute: false));
        

    }
}
