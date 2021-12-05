<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::paginate(10);
        $employee = User::all();
        return view('layouts.admin.invoice.invoice')->with(compact('invoices', 'employee'));
    }

    public function addInvoice(Request $request)
    {
        $invoice = new Invoice();
        $invoice->type = $request->input('type');
        $invoice->price = $request->input('price');
        $invoice->date = $request->input('date');
        $invoice->is_paid = $request->input('is_paid');
        $invoice->save();
        return Redirect::back()->withErrors(['Added Successfully', 'The Message']);
    }

    public function add()
    {
        return view('layouts.admin.invoice.addInvoice');
    }

    public function create()
    {
        $employees = User::all();
        $invoices = Invoice::all();
        return view('layouts.admin.invoice.addInvoice')->with(compact('employees', 'invoices'));
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $invoice = Invoice::find($id);
        $invoice->type = $request->input('type');
        $invoice->price = $request->input('price');
        $invoice->date = $request->input('date');
        $invoice->is_paid = $request->input('is_paid');
        $invoice->save();
        return Redirect::back()->withErrors(['Edited Successfully', 'The Message']);

    }

    public function edit(Request $request, $id)
    {

        $invoice = Invoice::find($id);
        $type = ['internet','electricity','services','communications'];
        $employees = User::all();
        return view('layouts.admin.invoice.editInvoice', compact('invoice', 'type', 'employees'));

    }


    public function destroy($id)
    {
        $invoice = Invoice::find($id);
        $invoice->destroy($id);
        return Redirect::back();
    }
}
