<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('front.register');
    }

    public function store(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'name' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:20|unique:users',
            'password' => 'required|string|min:6',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:8000'
        ]);

        try {
            // Yeni istifadəçi yaratma
            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'username' => $validated['username'],
                'password' => Hash::make($validated['password']),
                'role' => 'user',
            ]);

            // Avatar yükləmə
            if ($request->hasFile('avatar')) {
                $avatar = $request->file('avatar');
                $avatarName = time() . '_' . $avatar->getClientOriginalName();
                $avatarPath = $avatar->storeAs('avatars', $avatarName, 'public');
                $user->avatar = $avatarPath;
            } else {
                $user->avatar = 'avatars/default-avatar.png';
            }

            $user->save();

            // İstifadəçi girişini həyata keçir
            Auth::login($user);

            return redirect()->route('login.create')->with('success', 'Qeydiyyat Uğurlu!');
        } catch (\Exception $e) {
            // Səhv varsa geriyə qayıtmaq və səhv mesajını göstərmək
            return redirect()->back()->withErrors(['error' => 'Qeydiyyat xətası oldu.'])->withInput();
        }
    }
}
