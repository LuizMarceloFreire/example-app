<?php

namespace App\Http\Controllers;

use App\Models\Estudante;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function PegarTodosOsEstudantes(){
        $estudante = Estudante::get()->toJson(JSON_PRETTY_PRINT);
        return response($estudante, 200);
    }
}
