<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use App\Models\User;


class NewPasswordController extends Controller
{
    /**
     * Display the password reset view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $token_is_ok = $request->session()->get('token_is_ok');
        if ($token_is_ok) {
            return view('auth.reset-password', ['request' => $request]);
        }

        return redirect(route('password.request'));
    }

    /**
     * Handle an incoming new password request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'password' => ['required', 'min:5', 'confirmed'],
        ]);

        $phone = $request->session()->get('phone');
        $token_is_ok = $request->session()->get('token_is_ok');

        if ($token_is_ok) {
            $user = User::where('phone', $phone)->firstOrFail();
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect(route('login'))->with('success', 'رمز عبور با موفقیت تغییر کرد.');
        } else {
            return redirect(route('password.forgot'));
        }
    }
}
