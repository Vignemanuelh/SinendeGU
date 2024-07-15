<?php
namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Exception;

class UserController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('guest');
//    }
    public function index()
    {
        try {
            $users = User::paginate();
            return view('user.index', ['users' => $users]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function create()
    {
        try {
            $roles = Role::all();
            return view('user.create', ['user'=>null,'roles' => $roles]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'titre' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed',
            'telephone' => 'required|string',
            'npi' => 'required|string|unique:users,npi',
            'roles' => 'required|array',
        ]);

        $user = new User();
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->titre = $request->titre;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->telephone = $request->telephone;
        $user->npi = $request->npi;
        $user->save();
        $user->roles()->attach($request->roless);

        return redirect()->route('user.index')->with('status', 'L\'utilisateur a été ajouté');
    }

    public function show(User $user)
    {
        try {
            $roles = $user->roles()->get();
            return view('user.show', ['user' => $user, 'roles' => $roles]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function edit(User $user)
    {
        try {
            $user = User::with('roles')->find($user->id);
            $roles = Role::all();
            return view('user.edit', ['user' => $user, 'roles' => $roles]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'titre' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $user->id,
//            'password' => 'nullable|string|confirmed',
            'telephone' => 'required|string',
            'npi' => 'required|string|unique:users,npi,' . $user->id,
            'roles' => 'required|array',
        ]);

        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->titre = $request->titre;
        $user->email = $request->email;
//        if ($request->filled('password')) {
//            $user->password = bcrypt($request->password);
//        }
        $user->telephone = $request->telephone;
        $user->npi = $request->npi;
        $user->save();
        $user->roles()->syncWithoutDetaching($request->roles);

        return redirect()->route('user.index')->with('status', 'L\'utilisateur a été modifié');
    }

    public function destroy(User $user)
    {
        try {
            $user->delete();
            return redirect()->route('user.index')->with('status', 'L\'utilisateur a été supprimé');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
