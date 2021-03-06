<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\UserRequest;
use App\Events\UserRegistered;

class UsersController extends Controller {

    public function index()
    {
        return view('users.index', [
            'users' => User::all()
        ]);
    }

    public function create(User $user)
    {
        return view('users.create', [
            'user' => $user
        ]);
    }

    public function store(UserRequest $request)
    {

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect('/user')->with('message', 'Usuário criado com sucesso');
    }

    public function edit($id)
    {
        return view('users.edit', [
            'user' => User::find($id)
        ]);
    }

    public function update(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);

        $user->name  = $request->name;
        $user->email = $request->email;

        $user->save();

        return redirect('/user')->with('message', 'Usuário alterado com sucesso');
    }

    public function destroy($id)
    {
        User::destroy($id);

        return redirect('/user')->with('message', 'Usuário excluído com successo');
    }
}
