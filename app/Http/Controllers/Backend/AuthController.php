<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackendController;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends BackendController
{

    public function login(Request $request)
    {
        $user = Auth::guard('backend')->user();
        if ( $user ) {
            return redirect(Route('backend.dashboard.index'));
        }
        if ( $request->getMethod() == 'POST' ) {


            $credentials = [
                'email' => $request->email,
                'password' => $request->password,
                'account_type' => User::Type_Admin,
                'status' => 1];

            if ( Auth::guard('backend')->attempt($credentials, true) ) {
                $request->session()->regenerate();
                return redirect(Route('backend.dashboard.index'));

            }
            return back()->withErrors([
                'error' => 'Please check your password and email.',
            ]);
        }

        return View('components.backend.users.login');
    }


}
