<?php


namespace App\Repositories\Web\Admin;


use App\Models\Invoice;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class InvoiceEloquent
{
    private $model;

    public function __construct(Invoice $invoice)
    {
        $this->model = $invoice;
    }

    public function index()
    {
        $invoices = Invoice::paginate(10);
        $type = ['internet', 'electricity', 'services', 'communications'];
        return view('layouts.Admin.invoice.invoice')->with(compact('invoices', 'type'));
    }

    public function addInvoice(array $data)
    {
        $invoice = new Invoice();
        $invoice->type = $data['type'];
        $invoice->price = $data['price'];
        $invoice->date = $data['date'];
        if ($data['is_paid'] == true) {
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

    public function update(array $data)
    {
        $id = $data['id'];
        $invoice = Invoice::find($id);
        $invoice->type = $data['type'];
        $invoice->price = $data['price'];
        $invoice->date = $data['date'];
        if ($data['is_paid'] == true) {
            $invoice->is_paid = 1;
        } else {
            $invoice->is_paid = 0;
        }
        $invoice->save();
        return Redirect::back()->withErrors(['Edited Successfully', 'The Message']);

    }

    public function edit($id)
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
