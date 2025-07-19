<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('index'); // ログインフォームを表示
    }

    public function login(LoginRequest $request)
    {
        // ここで既にバリデーション済み
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // ログイン成功時のリダイレクト
            return redirect()->intended('/mypage');
        }

        // ログイン失敗時のエラー返却
        return back()->withErrors([
            'email' => 'ログイン情報が正しくありません。',
        ])->withInput();
    }
}
