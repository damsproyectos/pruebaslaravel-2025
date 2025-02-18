<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Role\PutRequest;
use App\Http\Requests\Role\StoreRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::paginate(5);
        return view('dashboard.role.index', ['roles' => $roles]);
        // return view('dashboard.role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Lo primero que creo en un controlador es la vista de create
        $role = new Role();
        // return view('dashboard.role.create', compact('role'));
        return view('dashboard.role.create', ['role' => $role]); //*****Llave es 'role' ****Valor es $role*/*** */
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
         Role::create($request->validated());
         return to_route('role.index')->with('status', 'Role created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        // return view('dashboard.role.show', compact('role'));
        return view('dashboard.role.show', ['role' => $role]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        // return view('dashboard.role.edit', compact('role'));
        return view('dashboard.role.edit', ['role' => $role]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Role $role)
    {
        $role->update( $request->validated() );
        return to_route('role.index')->with('status', 'Role updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return to_route('role.index')->with('status', 'Role delete');
    }
}
