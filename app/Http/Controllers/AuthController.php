<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AuthController extends Controller
{

    public function show()
    {
        return view('login');
    }
    public function dashboard()
    {
        return view('dashboard');
    }

    public function login(Request $request)
    {
        $login_type = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
        $user = array_merge(
            [
                $login_type => $request->username,
                'password' => $request->password
            ]
        );
        if (Auth::attempt($user)) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }

    public function createuser()
    {
        $user = User::create([
            "name" => "ndev",
            "email" => "ndev@gmail.com",
            "password" => "123456789",
        ]);

        $permissionController = new RoleAndPermissionsController();
        $permissionController->createRole();


        $supperadmin = "supperadmin";
        $role = Role::create([
            "name" => $supperadmin,
        ]);

        $permissions = Permission::all();
        foreach ($permissions as $key => $value) {
            $role->givePermissionTo($value);
        }

        $userRole = User::find($user->id);
        $userRole->assignRole($supperadmin);
    }

    public function createrole()
    {
        $roles = [
            'admin',
            'user'
        ];
        foreach ($roles as $key => $value) {
            $role = Role::create([
                "name" => $value
            ]);
        }
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
