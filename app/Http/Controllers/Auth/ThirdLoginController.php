<?php 

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class ThirdLoginController extends Controller
{

    /**
     * 跳转至第三方登陆
     *
     * @return mixed
     */
    public function facebookRedirect()
    {
        return Socialite::with('facebook')->redirect();
        return $this->socialite->driver('facebook')->fields([
            'first_name', 'last_name', 'email', 'gender','location'
        ])->scopes([
            'user_location'
        ])->redirect();
    }

    /**
     * 第三方登陆回跳
     */
    public function facebookCallback()
    {
        $oauthUser = Socialite::with('facebook')->user();

        var_dump($oauthUser->getId());
        var_dump($oauthUser->getNickname());
        var_dump($oauthUser->getName());
        var_dump($oauthUser->getEmail());
        var_dump($oauthUser->getAvatar());
    }
}