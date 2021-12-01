<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\Models\User;


class SMSTokenVerificationController extends Controller
{
    public function create(Request $request) {
        // dd($request->session()->get('phone'));
        return view('auth.vertif-sms-token');
    }

    /**
     * Send a new email verification notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $phone = $request->session()->get('phone');
        $user = User::where('phone', $phone)->firstOrFail();

        if ($user->sms_token === $request->sms_token) {
            if (! $user->token_expired()) {
                return redirect(route('password.reset'));
            }

            $validator = \Validator::make($request->all(), []);
            $messages = $validator->errors();
            $messages->add('sms_token.expired', 'کد وارد شده منقضی شده است.'); // Add the message
            return back()->withErrors($messages)->withInput();
        } else {
            $validator = \Validator::make($request->all(), []);
            $messages = $validator->errors();
            $messages->add('sms_token', 'کد وارد شده صحیح نیست.'); // Add the message
            return back()->withErrors($messages)->withInput();
        }
    }
}
