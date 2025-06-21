<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionsController extends Controller
{

    public function createPermissions()
    {
        // $permission = [
        //     'dashboard',
        //     'user',
        //     'user create',
        //     'user update',
        //     'user delete',

        //     'personalprofile',
        //     'personalprofile create',
        //     'personalprofile update',
        //     'personalprofile delete',

        //     'employees',
        //     'employees create',
        //     'employees update',
        //     'employees delete',

        //     'students',
        //     'students create',
        //     'students update',
        //     'students delete',

        //     'income',
        //     'income create',
        //     'income update',
        //     'income delete',

        //     'expenses',
        //     'expenses create',
        //     'expenses update',
        //     'expenses delete',

        //     'report',
        //     'report export',

        //     'setting',
        //     'setting create',
        //     'setting update',
        //     'setting delete',

        //     'setting study level',
        //     'setting study level create',
        //     'setting study level update',
        //     'setting study level delete',

        //     'setting study room',
        //     'setting study room create',
        //     'setting study room update',
        //     'setting study room delete',

        //     'setting type income',
        //     'setting type income create',
        //     'setting type income update',
        //     'setting type income delete',

        //     'setting type expenses',
        //     'setting type expenses create',
        //     'setting type expenses update',
        //     'setting type expenses delete',

        //     'setting study items',
        //     'setting study items create',
        //     'setting study items update',
        //     'setting study items delete',

        //     'setting type teacher',
        //     'setting type teacher create',
        //     'setting type teacher update',
        //     'setting type teacher delete',

        //     'setting study year',
        //     'setting study year create',
        //     'setting study year update',
        //     'setting study year delete',

        //     'setting study cost',
        //     'setting study cost create',
        //     'setting study cost update',
        //     'setting study cost delete',

        //     'roleandpermission',
        //     'roleandpermission create',
        //     'roleandpermission update',
        //     'roleandpermission delete'
        // ];
        $permission = [
            'setting study level',
            'setting study level create',
            'setting study level update',
            'setting study level delete',

            'setting study room',
            'setting study room create',
            'setting study room update',
            'setting study room delete',

            'setting type income',
            'setting type income create',
            'setting type income update',
            'setting type income delete',

            'setting type expenses',
            'setting type expenses create',
            'setting type expenses update',
            'setting type expenses delete',

            'setting study items',
            'setting study items create',
            'setting study items update',
            'setting study items delete',

            'setting type teacher',
            'setting type teacher create',
            'setting type teacher update',
            'setting type teacher delete',

            'setting study year',
            'setting study year create',
            'setting study year update',
            'setting study year delete',

            'setting study cost',
            'setting study cost create',
            'setting study cost update',
            'setting study cost delete',
        ];
        foreach ($permission as $key => $value) {
            Permission::create(['name' => $value]);
        }
        // Permission::create(['name' => "setting study level"]);
    }

    public function createRoleForUser(Request $request)
    {
        $role = Role::create([
            "name" => "supperadmin",
        ]);

        $permission = Permission::all();
        // $role = Role::find(1);

        // $role->givePermissionTo('dashboard');


        foreach ($permission as $key => $value) {
            $role->givePermissionTo($value);
        }
        // foreach ($request->permission as $key => $value) {
        //     $role->givePermissionTo($value);
        // }

        $user = User::find(1);
        $user->assignRole('supperadmin');
        // $user->roles()->attach($role->name, ['team_id' => $role->team_id]);
    }
}
