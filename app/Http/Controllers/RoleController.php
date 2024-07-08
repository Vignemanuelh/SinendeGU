<?php
namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Exception;

class RoleController extends Controller
{
    public function index()
    {
        try {
            $roles = Role::paginate();
            return view('role.index', ['roles' => $roles]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function create()
    {
        try {
            return view('role.create');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|unique:roles,nom',
        ]);

        $role = new Role();
        $role->nom = $request->nom;
        $role->save();

        return redirect()->route('role.index')->with('status', 'Le rôle a été ajouté');
    }

    public function show(Role $role)
    {
        try {
            return view('role.show', ['role' => $role]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function edit(Role $role)
    {
        try {
            return view('role.edit', ['role' => $role]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(Request $request, Role $role)
    {
        $request->validate([
            'nom' => 'required|string|unique:roles,nom,' . $role->id,
        ]);

        $role->nom = $request->nom;
        $role->save();

        return redirect()->route('role.index')->with('status', 'Le rôle a été modifié');
    }

    public function destroy(Role $role)
    {
        try {
            $role->delete();
            return redirect()->route('role.index')->with('status', 'Le rôle a été supprimé');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
