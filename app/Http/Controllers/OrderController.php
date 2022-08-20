<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderPaymentRequest;
use App\Http\Requests\OrderRequest;
use App\Models\BankAccount;
use App\Models\Order;
use App\Models\Packet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.order.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $order = [
            'packet' => Packet::where('slug', $request->packet)->first(),
            'start' => $request->start,
        ];
        return view('user.order.create', compact('order'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\OrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderRequest $request)
    {
        $validated = $request->validated();
        $order = new Order();
        $order->forceFill([
            'user_id' => Auth::id(),
            'packet_id' => Packet::where('slug',$validated['packet'])->first()->id,
            'message' => $request['message'],
            'start' => $validated['start'],
        ])->save();

        return redirect()->route('user.order.index')->with('action-message', 'saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        $bankAccounts = BankAccount::all();
        return view('user.order.edit', ['order' => $order, 'bankAccounts' => $bankAccounts]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\OrderPaymentRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(OrderPaymentRequest $request, Order $order)
    {
        $validated = $request->validated();
        if ($request->photo != '') {
            $order->updatePhoto($validated['photo']);
            $order->forceFill([
                'status' => 1,
            ])->save();
        }
        return redirect()->route('user.order.index')->with('action-message', 'saved');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\OrderPaymentRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function cancel(Order $order)
    {
        $order->forceFill([
            'status' => 4,
        ])->save();
        return redirect()->route('user.order.index')->with('action-message', 'saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
