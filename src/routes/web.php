<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TwoFactorController;

/**
* 公開ルート
* サービス紹介ページ（将来的にランディングページとして運用）
*/
Route::get('/', function () {
    return view('welcome');
});

/**
* 認証・高機密操作ルート
* パスワード確認と標準認証を必須化し、2要素認証設定を保護
*/
Route::middleware(['auth', 'password.confirm'])->group(function () {
    Route::get('/user/two-factor-authentication', [TwoFactorController::class, 'index'])
        ->name('two-factor.index');
});

