<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255', 'regex:/[А-Яа-я]+ [А-Яа-я]+ [А-Яа-я]+/u'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6'],
            'personalData' => ['accepted']
        ], [
            'name.required' => 'Укажите ФИО',
            'name.regex' => 'Неверный формат ФИО',
            'email.required' => 'Укажите E-mail',
            'email.email' => 'Укажите правильный E-mail',
            'max' => 'Кол-во символо не должно привышать 255',
            'email.unique' => 'Пользователь с таким e-mail уже зарегистрирован',
            'password.required' => 'Укажите Пароль',
            'password.min' => 'Минимальная длина пароля 6 символов',
            'personalData.accepted' => 'Вы должно согласится с соглашением'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $valid = $this->validator($request->all());
        if ($valid->fails()) {
            return response()->json([
                'errors' => $valid->errors()
            ])->setStatusCode('400', 'Create Error');
        }
        $user = $this->create($request->all());
        $this->guard()->login($user);
        return response()->json([
            'url' => route('main')
        ])->setStatusCode('200', 'Successful create');
    }
}
