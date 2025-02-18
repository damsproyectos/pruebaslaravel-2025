<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PemissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::paginate(5);
        // return view('dashboard.permission.index', compact('permissions'));
        return view('dashboard.permission.index', ['permissions' => $permissions]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permission = new Permission();
        return view('dashboard.permission.create', ['permission' => $permission]);
        // return view('dashboard.permission.create', compact('permission'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Permission::create($request->validated());
        return to_route('permission.index')->with('status', 'Permission created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $permission)
    {
        return view('dashboard.permission.show', ['permission' => $permission]);
        // return view('dashboard.permission.show', compact('permission'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission)
    {
        return view('dashboard.permission.edit', ['permission' => $permission]);
        // return view('dashboard.permission.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Permission $permission)
    {
        $permission->update($request->validated());
        return to_route('permission.index')->with('status', 'Permission updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return to_route('permission.index')->with('status', 'Permission delete');
    }
}
