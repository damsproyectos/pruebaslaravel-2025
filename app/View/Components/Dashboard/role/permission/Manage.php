<?php

namespace App\View\Components\Dashboard\role\permission;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Manage extends Component
{
    /**
     * Create a new component instance.
     */
    // public $role;
    // public function __construct(Role $role)
    // {
    //     $this->role =$role;
    // }

    public function __construct(public Role $role)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.role.permission.manage', ['permissionsRole' => $this->role->permissions, 'permissions' => Permission::get()]);
    }

    //******Método para asignar los permisos al role */
    function handle(Role $role) {
        $permission = Permission::findOrFail(request('permission'));
        $role->givePermissionTo($permission);
        return redirect()->back();
    }
}
