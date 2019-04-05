<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PacienteModel;
class NotasController extends Controller
{
    public function index(Request $request)
    {
      $paciente = PacienteModel::find($request->id);
       return view('Notas.ConsultaExterna.index', compact('paciente'));
     // dd($request->session()->get('idPaciente'));
    }
    public function store(Request $request)
    {
        dd($request);
    }
    public function show(Request $request)
    {
        dd($request);
    }
}
