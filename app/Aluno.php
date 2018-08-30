<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Aluno extends Authenticatable
{
    use Notifiable;

    protected $table = 'alunos';

    protected $fillable = [
        'nome', 'matricula'
    ];

    protected $hidden = [
        'remember_token'
    ];
}
