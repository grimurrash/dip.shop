<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    /** Get a validator for an incoming login request.
     *
     * @param $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator($data)
    {
        return Validator::make($data, [
            'email' => 'required|string',
            'password' => 'required|string',
        ], [
            'email.required' => 'Введите логин',
            'password.required' => 'Введите пароль',
        ]);
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request)
    {
        $valid = $this->validator($request->all());
        if ($valid->fails()) {
            return response()->json([
                'errors' => $valid->errors()
            ])->setStatusCode('400', 'Invalid data');
        }
        if (!$this->attemptLogin($request)) {
            return response()->json([
                'errors' => [
                    'email' => [
                        'Неправильный логин или пароль'
                    ]
                ]
            ])->setStatusCode('400', 'Invalid data');
        }

        $this->guard()->user();
        return response()->json([
            'url'=>route('main'),
        ])->setStatusCode(200, 'Successful authorized');
    }
}
