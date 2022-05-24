<?php

namespace App\Http\Controllers\UserSetting;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        try {
            $data = Role::all();
            return view('pages.setting.role-index', compact('data'));
        } catch (\Exception $err) {
            abort(404, $err);
        }
    }
}
