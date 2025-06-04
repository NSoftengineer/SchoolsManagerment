<?php

namespace App\Livewire\RolePermissions;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermission extends Component
{
    public $permissionData = [];
    public $permission = [];
    public $roleuser;
    public $user = [];
    public $title_role;
    public $role_of_type = [];
    public function render()
    {
        $this->permissionData = Permission::all();
        $this->title_role = Role::with('permissions')->get();

        return view('livewire.role-permissions.role-permission');
    }

    public function changeEvent()
    {

        // $this->js("alert('ssss)");
        if ($this->roleuser) {
            $isRole = Role::with('permissions')->find($this->roleuser);
            if ($isRole != null) {
                unset($this->permission);
                $this->permission = [];
                foreach ($isRole->permissions as $key => $value) {
                    $this->permission[] = $value->name;
                }
            } else {
                unset($this->permission);
                $this->permission = [];
            }
        }
    }

    public function createRoleForUser()
    {
        // $role = Role::create([
        //     "name" => "supperusers"
        // ]);

        $role = Role::find($this->roleuser);
        $role->syncPermissions([]);
        foreach ($this->permission as $key_permission => $value_permission) {
            $role->givePermissionTo($value_permission);
        }
        $this->js("alert('success')");
        // foreach ($this->permission as $key => $value) {
        //     $role->givePermissionTo($value);
        // }

        // $user = User::find(Auth::id());
        // $user->assignRole('supperusers');
        // $this->js("alert('success')");
        // $user->roles()->attach($role->name, ['team_id' => $role->team_id]);
    }


    public function removeRole()
    {
        // expenses
        // report
        // setting
        // $role = Role::where('name', 'supperusers')->first();
        // $role->revokePermissionTo('expenses');
        // $permission->removeRole($role);
    }
}
