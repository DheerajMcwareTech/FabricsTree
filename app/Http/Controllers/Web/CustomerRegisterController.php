<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Helper\Reply;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;


class CustomerRegisterController extends Controller
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

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
          'name' => 'required|min:2|max:50|string|max:255',
          //'email' => 'required|email|string|max:255|regex:/^([a-z0-9+-]+)(.[a-z0-9+-]+)*@([a-z0-9-]+.)+[a-z]{2,6}$/ix|unique:customers',
          'email' => 'required|email|string|max:255|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/ix|unique:customers',
          'phone' => 'required|min:10|max:10|unique:customers',
          'address' => 'required',
          'password' => 'required|min:8',
          'password_confirmation'=>'required|min:8|same:password',
        ],
        [
            'email.required' =>'The email field is required.',
            'email.unique' => 'The email has already exist.',
            'phone.required' => 'The mobile no. field is required.',
            'phone.unique' => 'The mobile no. has already exist.',
            'phone.min' => 'The mobile no. must be at least 8 digits.',

            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 8 characters.',
            'password_confirmation.required' => 'The confirm password field is required.',
            'password_confirmation.same' => 'The confirm password does not match.',
            'password_confirmation.min' => 'The confirm password must be at least 8 characters.',
        ]);
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
        //
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        
        event(new Registered($user = $request->all()));

        if ($response = $this->registered($request, $user)) {
            return $response;
        }
        
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->password = $request->password;
        $customer->status = 0;
        $customer->save();

        Mail::to($customer->email)->send(new WelcomeMail($customer));
        
        return redirect('/')->withSuccess('You have registered successfully');
    }
}
