<?php

namespace App\Http\Controllers\UserSetting;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserSettingController extends Controller
{
    public function index()
    {
        try {
            $data = User::all();
            return view('pages.setting.user-index', compact('data'));
        } catch (\Exception $err) {
            abort(404, $err);
        }
    }
}
