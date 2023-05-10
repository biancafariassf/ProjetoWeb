<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Agendamento;
class AgendamentoController extends Controller
{
    function create(Request $request){
        $request->validate([
            'nome'=>'required',
            'telefone'=>'required',
            'origem'=>'required',
            'data_contato'=>'required',
            'observacao'=>'required'
        ]);
        $query = DB::table('agendamentos')->insert([
            'nome'=>$request->input('nome'),
            'telefone'=>$request->input('telefone'),
            'origem'=>$request->input('origem'),
            'data_contato'=>$request->input('data_contato'),
            'observacao'=>$request->input('observacao')
        ]);
        
    }

    public function listar()
    {
        $data = array(
            'listar' =>DB::table('agendamentos')->get()

        );
        return view('consultar', $data);
    }
}