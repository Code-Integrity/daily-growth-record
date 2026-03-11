<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TwoFactorController extends Controller
{
    /**
     * 2要素認証の設定画面を表示
     */
    public function index()
    {
        // ビューが存在するか、プログラム的に判定させる
        if (view()->exists('auth.two-factor')) {
            return view('auth.two-factor', [
                'user' => auth()->user(),
                'enabled' => ! is_null(auth()->user()->two_factor_secret),
            ]);
        }

        return "❌ エラー：Laravelは 'resources/views/auth/two-factor.blade.php' を見つけられませんでした。パスを再確認してください。";
    }
}
