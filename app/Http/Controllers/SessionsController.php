<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Aluno;

class SessionsController extends Controller
{
    public function __construct() {
        $this->middleware('guest')->except(['destroy']);
    }

    public function create() {
        return view('primeiros_passos');
    }

    public function store() {
        if (!auth()->attempt(request(['matricula']))) {
            // Se não existe, cria novo aluno
            $aluno = Aluno::create([
                'nome' => request('nome'),
                'matricula' => request('matricula')
            ]);
        }
        auth()->login($aluno);
        return redirect('/planejador');
    }

    public function destroy() {
        auth()->logout();
        return redirect('/');
    }
}
