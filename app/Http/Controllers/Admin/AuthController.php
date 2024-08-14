<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function CreateAdminUser() {
        $user = new User();
        $user->name = 'rajesh';
        $user->email = 'rajesh@gmail.com';
        $user->password = Hash::make('rajesh');
        $user->save();

        $admin = Role::where('slug', 'admin')->first();
        $user->roles()->attach($admin);

        $user->save();
    }
}
