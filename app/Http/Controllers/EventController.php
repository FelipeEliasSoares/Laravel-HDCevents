<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $nome = 'João';
        $idade = 30;
        
        $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

        $nomes = ['João', 'Maria', 'José', 'Pedro', 'Ana'];

        return view('welcome', ['nome' => $nome, 'idade' => $idade, 'trabalho' => 'Programador', 'arr' => $arr , 'nomes' => $nomes]);
    }

    public function create()
    {
        return view('events.create');
    }

    public function contact()
    {
        return view('contato');
    }

    public function produtos()
    {
        $busca = request('search');

        return view('produtos', ['busca' => $busca]);
    }

    public function produtos_teste($id = null)
    {
        return view('product', ['id' => $id]);
    }
}
