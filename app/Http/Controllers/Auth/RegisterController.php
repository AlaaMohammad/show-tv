<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Role;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
     * overriding the default redirect
     * @return string
     */
    protected function redirectTo()
    {
        if (auth()->user()->role->role == 'admin') {
            return '/dashboard/admin-panel/home';
        }
        return '/user/home';
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'user_image' => ['required']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user_role = Role::where('role','user')->first()->id;
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $user_role
        ]);

        if(request()->hasFile('user_image')){
            $file = request()->file('user_image');
            $filenamewithextension = $file->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $extension_accept = array("jpg", "JPG", "JPEG", "jpeg" ,"png" ,"PNG");

            if(!in_array($extension, $extension_accept))
            {
                return back()->withError("Error uploading image");
            }
            $fileNameStore = $filename.'_'.uniqid().'.'.$extension;

            Storage::disk('uploads')->put('storage/user_image/'.$fileNameStore, fopen($file, 'r+'));
            $path = public_path('storage/user_image/'.$fileNameStore);
            $img = Image::make($path)->resize(300, 300, function($constraint) {
            $constraint->aspectRatio();
            });
            $img->save($path);
            if($fileNameStore != null)
            {
                $user->user_image = $fileNameStore;
            }
        }

        return $user;
    }
}
