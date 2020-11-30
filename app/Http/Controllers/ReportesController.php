<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportesController extends Controller
{
    public function reportCliente()
    {
        return view('reportesGonzalo.reportCliente');
    }
    public function reportDise()
    {
        return view('reportesGonzalo.reportDiseño');
    }
    public function reportRed()
    {
        return view('reportesGonzalo.reportePorRedes');
    }
}
