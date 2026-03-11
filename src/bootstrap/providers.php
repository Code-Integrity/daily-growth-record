<?php

/**
* サービスプロバイダーの登録
* Aegis-Zero 認証基盤のコアとなる Fortify を統合
*/
return [
    App\Providers\AppServiceProvider::class,
    App\Providers\FortifyServiceProvider::class, // Laravel Fortify による認証エンジンの有効化
];

