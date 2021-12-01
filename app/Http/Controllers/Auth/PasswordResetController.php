<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Models\User;


class PasswordResetController extends Controller
{
    /**
     * Display the password reset link request view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'phone' => 'required|regex:/09[0-9]{9}/',
        ]);

        $user = User::where('phone', $request->phone)->firstOrFail();
        $user->setSMSToken();
        sendSMSToken($user->phone, $user->sms_token);
        $request->session()->put('phone', $request->phone);
        return redirect(route('verify_sms_token'));
    }
}
