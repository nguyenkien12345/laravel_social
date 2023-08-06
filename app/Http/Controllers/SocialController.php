<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirectGoogle(){
        try {
            return Socialite::driver('google')->redirect();  // Chuyển hướng đến trang đăng nhập google
        }
        catch(\Throwable $th) {
            throw $th;
        }
    }

    public function loginGoogle(){
        try {
            $user = Socialite::driver('google')->user();    // Lấy ra thông tin người dùng google

            $checkEmail = User::where('email', $user->getEmail())->first();

            $data = null;

            if(!$checkEmail) {
                $data = User::updateOrCreate(
                    ['google_id' => $user->getId()],
                    [
                        'name' => $user->getName(),
                        'email' => $user->getEmail(),
                        'image' => $user->getAvatar(),
                        'password' => Hash::make('1234567890'),
                    ]
                );
            }
            else {
                $data = $checkEmail->update(['google_id' => $user->getId()]);
                $data = User::where('email', $user->getEmail())->first();
            }

            //  loginUsingId: Phương thức này cho phép bạn đăng nhập người dùng mà không cần thông qua quá trình xác thực thông thường,
            //  như nhập email và mật khẩu.
            Auth::loginUsingId($data->id);
            return response()->json([
                'message' => 'Success',
                'status' => true,
            ]);

        }
        catch(\Throwable $th) {
            throw $th;
        }
    }

    public function redirectFacebook(){
        try {
            return Socialite::driver('facebook')->redirect();  // Chuyển hướng đến trang đăng nhập Facebook
        }
        catch(\Throwable $th) {
            throw $th;
        }
    }

    public function loginFacebook(){
        try {
            $user = Socialite::driver('facebook')->user();    // Lấy ra thông tin người dùng Facebook

            $checkEmail = User::where('email', $user->getEmail())->first();

            $data = null;

            if(!$checkEmail) {
                $data = User::updateOrCreate(
                    ['google_id' => $user->getId()],
                    [
                        'name' => $user->getName(),
                        'email' => $user->getEmail(),
                        'image' => $user->getAvatar(),
                        'password' => Hash::make('1234567890'),
                    ]
                );
            }
            else {
                $data = $checkEmail->update(['google_id' => $user->getId()]);
                $data = User::where('email', $user->getEmail())->first();
            }

            //  loginUsingId: Phương thức này cho phép bạn đăng nhập người dùng mà không cần thông qua quá trình xác thực thông thường,
            //  như nhập email và mật khẩu.
            Auth::loginUsingId($data->id);
            return response()->json([
                'message' => 'Success',
                'status' => true,
            ]);

        }
        catch(\Throwable $th) {
            throw $th;
        }
    }
}
