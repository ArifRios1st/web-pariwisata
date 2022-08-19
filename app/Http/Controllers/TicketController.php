<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use PDF;

class TicketController extends Controller
{
    public function index(Order $order){
        return view('user.ticket.index', compact('order'));
    }

    public function download(Order $order){
        if($order->status != 3){
            abort(404);
        }
        $pdf = PDF::loadView('user.ticket.index', compact('order'))->setPaper('a4', 'landscape');

        // download pdf file
        return $pdf->download('ticket.pdf');

    }
}
