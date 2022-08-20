<?php

namespace App\Http\Controllers;

use App\Http\Requests\BankAccountRequest;
use App\Models\BankAccount;
use Illuminate\Http\Request;

class BankAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.bank.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bank.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request\BankAccountRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BankAccountRequest $request)
    {
        $validated = $request->validated();
        $bankAccount = new BankAccount();
        $bankAccount->forceFill([
            'name' => $validated['name'],
            'bank_name' => $validated['bank_name'],
            'account_number' => $validated['account_number'],
        ])->save();

        if ($request->photo != '') {
            $bankAccount->updatePhoto($validated['photo']);
        }
        return redirect()->route('admin.bank.index')->with('action-message','saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BankAccount  $bankAccount
     * @return \Illuminate\Http\Response
     */
    public function show(BankAccount $bankAccount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BankAccount  $bankAccount
     * @return \Illuminate\Http\Response
     */
    public function edit(BankAccount $bankAccount)
    {
        return view('admin.bank.edit', compact('bankAccount'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request\BankAccountRequest  $request
     * @param  \App\Models\BankAccount  $bankAccount
     * @return \Illuminate\Http\Response
     */
    public function update(BankAccountRequest $request, BankAccount $bankAccount)
    {
        $validated = $request->validated();
        $bankAccount->forceFill([
            'name' => $validated['name'],
            'bank_name' => $validated['bank_name'],
            'account_number' => $validated['account_number'],
        ])->save();

        if ($request->photo != '') {
            $bankAccount->updatePhoto($validated['photo']);
        }
        return redirect()->route('admin.bank.index')->with('action-message','saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BankAccount  $bankAccount
     * @return \Illuminate\Http\Response
     */
    public function destroy(BankAccount $bankAccount)
    {
        //
    }
}
