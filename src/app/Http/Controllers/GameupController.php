<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameupController extends Controller
{
    /**
     * ゲームアップコントローラ
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        return view('gameup');
    }
}
