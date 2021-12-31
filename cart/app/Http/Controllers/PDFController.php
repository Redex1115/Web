<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;
use App\Models\myOrder;
use Auth;

class PDFController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); 		
    }

    public function pdfReport()

    {

        $items=DB::table('my_orders')

        ->select('my_orders.id','my_orders.amount','my_orders.created_at')

        ->where('my_orders.userID','=',Auth::id())

        ->get();

         

        $pdf = PDF::loadView('myPDF', compact('items'));

   

        return $pdf->download('OrderReport.pdf');

    }
}
