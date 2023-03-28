<?php

use Illuminate\Support\Facades\Route;
use EasyWeChat\Factory as WeChat;
use Illuminate\Http\Request;
use EasyWeChat\Factory;
use App\Http\Controllers;

Route::get('/wechat/callback', function () {
    $user = WeChat::officialAccount(config('wechat.official_account.default'))->oauth->user();
});

Route::get('/wechat/login', function () {
    $url = WeChat::officialAccount(config('wechat.official_account.default'))->oauth->redirect();
    return redirect()->to($url);
})->name('wechat.oauth');

Route::get('/', function () {


});

Route::any('/', [Controllers\Index::class, 'index']);



