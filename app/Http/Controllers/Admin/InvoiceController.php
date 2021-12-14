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
        return $this->invoice->index();
    }

    public function addInvoice(Request $request)
    {
        return $this->invoice->addInvoice($request->all());
    }

    public function create()
    {
        return $this->invoice->create();
    }

    public function update(Request $request)
    {
        return $this->invoice->update($request->all());
    }

    public function edit($id)
    {
        return $this->invoice->edit($id);
    }

    public function destroy($id)
    {
        return $this->invoice->destroy($id);
    }
}
