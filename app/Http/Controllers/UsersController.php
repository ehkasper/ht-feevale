<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\UserRequest;

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

    public function edit($id)
    {
        return view('users.edit', [
            'user' => User::find($id)
        ]);
    }

    public function store(UserRequest $request, User $user)
    {

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect('/user')->with('message', 'Usuário criado com sucesso');
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

        return redirect('/user')->with('message', 'Usuário excluído com success');
    }
}
