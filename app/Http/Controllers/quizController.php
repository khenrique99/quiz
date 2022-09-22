<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

use Carbon\Carbon;

class quizController extends Controller
{
    public function welcome() {
        
        $geralAdmin         = db::Select('select count(*) as total from quiz.users where tipo_usuario <>99;');
        $geralUser          = db::Select('select count(*) as total from quiz.users where tipo_usuario =99;');
        $geralPergunta      = db::Select('select count(*) as total from quiz.perguntas;');
        $user               = db::Select('select * from users');
        $grupos             = db::Select('select image, grupo from quiz.grupos;');

        return view ('welcome', compact ('user','geralAdmin','geralUser','geralPergunta','grupos'));
    }

    public function dashboard() {
        
        return view ("/dashboard");
    }

    public function cadastrar() {
        
        return view ("perguntas.cadastrar");
    }

    public function visualizar() {
        
        return view ("perguntas.visualizar");
    }
}