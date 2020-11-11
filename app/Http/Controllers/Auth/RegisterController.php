<?php

namespace App\Http\Controllers\Auth;

use App\Models\Oap\OapFurnitureBrand;
use App\Settings;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Library\Notify\Notify;
use App\Library\Notify\Notifiers\EmailNotifier;
use Illuminate\Auth\Events\Registered;

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
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'lname'                => 'required|max:255',
            'fname'                => 'required|max:255',
            'email'                => 'required|email|max:255|unique:users',
            'password'             => 'required|max:255|min:6|confirmed',
            'time_zone'            => 'required|max:255',
            'phone'                => 'required|max:255',
            'g-recaptcha-response' => 'required|captcha'
        ], [
            'g-recaptcha-response.required' => 'Поставьте галочку "Я не робот"'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([

            'fname'         => $data['fname'],
            'lname'         => $data['lname'],
            'email'         => trim($data['email']),
            'phone'         => $data['phone'],
            'time_zone'     => $data['time_zone'],
            'password'      => bcrypt(trim($data['password'])),
            'state'         => 'idling',
            'settings'      => [Settings::GLOBAL_SCOPE_SETTING_NAME => OapFurnitureBrand::BRAND_SCOPE_DEFAULT]
        ]);
    }


    /**
     * Далее переопределяемые методы из трейта ResetsPasswords
     */


    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {

        $this->validator($request->all())->validate();


        event(new Registered($user = $this->create($request->all())));

        //$this->guard()->login($user);

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        Notify::send(new EmailNotifier(
            'emails.registration_notification',
            [
                'user' => $user
            ],
            'Подтверждение регистрации',
            [$user->email]
        ));

        return redirect('/login')
            ->with('alert-info', 'Ваш аккаунт успешно создан. Доступ в базу будет открыт после подтверждения вашего аккаунта командой L\'Oreal.');
    }


}
