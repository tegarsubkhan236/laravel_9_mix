<?php

namespace App\Http\Controllers\UserSetting;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        try {
            $data = Permission::all();
            return view('pages.setting.permission-index', compact('data'));
        } catch (\Exception $err) {
            abort(404, $err);
        }
    }
}
