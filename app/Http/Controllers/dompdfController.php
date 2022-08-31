<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class dompdfController extends Controller
{
   public function index()
   {

    return view('dompdf.invoice');

   }


   public function pdf($type='stream')
   {
    $users =User::all();
    $pdf = Pdf::loadView('dompdf.invoice-pdf',compact('users'));

    return $type == 'stream' ? $pdf ->setPaper('a4', 'landscape')->stream() :  $pdf ->download('invoice.pdf');
   }
}
