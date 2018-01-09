<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use Auth;

class AdminLoginController extends Controller
{
    protected $redirectAfterLogout = 'admin.login';

    public function __construct()
    {
        $this->middleware('guest:admin',  ['except' => 'logout']);
    }

    public function showLoginForm()
    {
        return view('admin.layouts.login');
    }

    public function login(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
           'email'  =>  'required|email',
           'password'  =>  'required|min:6'
        ]);

        // Attempt to log the user in
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
            // If successful, then redirect to their intended location
            return redirect()->intended(route('admin.dashboard'));
        }
        
        return $this->sendFailedLoginResponse($request);

        // If unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout(Request $request){

        Auth::guard()->logout();
        $request->session()->flush();
        $request->session()->regenerate();

        return redirect()->route($this->redirectAfterLogout);
    }
    
    /**
     * Get the failed login response instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws ValidationException
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            'field' => [trans('auth.failed')],
        ]);
    }
}
