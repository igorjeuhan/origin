<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomepageController extends Controller
{
    public function welcomepage()
    {
        //Títulos
        $titulo = 'Origin';
        $subtitulo = 'Transformando a forma de analisar dados.';

        //Cards
        $t_card1 = 'Análise de dados';
        $t_card2 = 'Tomada de decisão';
        $itens_card1 = ['Definição do problema', 'Exploração dos dados', 'Criando solução', 'Apresentando resultados'];
        $itens_card2 = ['Definição de caminhos', 'Análise de opções', 'Execução'];

        return view('admin.welcomepage.index', compact('titulo', 'subtitulo', 't_card1', 't_card2', 'itens_card1', 'itens_card2'));
    }
}
