<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\User;
use App\Repositories\Web\Admin\InvoiceEloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class InvoiceController extends Controller
{
    public function __construct(InvoiceEloquent $invoiceEloquent)
    {
        $this->invoice = $invoiceEloquent;
    }
    public function index()
    {
        $invoices = Invoice::paginate(10);
        $type = ['internet', 'electricity', 'services', 'communications'];
        return view('layouts.Admin.invoice.invoice')->with(compact('invoices', 'type'));
    }

    public function addInvoice(Request $request)
    {
        $invoice = new Invoice();
        $invoice->type = $request->input('type');
        $invoice->price = $request->input('price');
        $invoice->date = $request->input('date');
        if ($request->input('is_paid') == true) {
            $invoice->is_paid = 1;
        } else {
            $invoice->is_paid = 0;
        }

        $invoice->save();
        return Redirect::back()->withErrors(['Added Successfully', 'The Message']);
    }


    public function create()
    {
        $invoices = Invoice::all();
        $type = ['internet', 'electricity', 'services', 'communications'];
        return view('layouts.Admin.invoice.addInvoice')->with(compact('invoices', 'type'));
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $invoice = Invoice::find($id);
        $invoice->type = $request->input('type');
        $invoice->price = $request->input('price');
        $invoice->date = $request->input('date');
        if ($request->input('is_paid') == true) {
            $invoice->is_paid = 1;
        } else {
            $invoice->is_paid = 0;
        }
        $invoice->save();
        return Redirect::back()->withErrors(['Edited Successfully', 'The Message']);

    }

    public function edit(Request $request, $id)
    {

        $invoice = Invoice::findOrFail($id);
        $type = ['internet', 'electricity', 'services', 'communications'];
        $employees = User::all();
        return view('layouts.Admin.invoice.editInvoice', compact('invoice', 'type', 'employees'));

    }


    public function destroy($id)
    {
        $invoice = Invoice::find($id);
        $invoice->destroy($id);
        return Redirect::back();
    }
}
