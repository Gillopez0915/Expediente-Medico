<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PacienteModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       if (session()->has('idPaciente')) {
         $paciente = PacienteModel::find(session()->get('idPaciente'));
         return view('index', compact('paciente'));
       }else{
         return view('index');
       }
      // dd();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function form()
    {
        return view('layouts.form.index');
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function helper()
    {
        return view('layouts.helper.index');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function media()
    {
        return view('layouts.media.index');
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function table()
    {
        return view('layouts.table.index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function typography()
    {
        return view('layouts.typography.index');
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function widget()
    {
        return view('layouts.widget.index');
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function chart()
    {
        return view('layouts.chart.index');
    }
}
