<?php


namespace App\Repositories\Web\Admin;


use App\Models\Invoice;

class InvoiceEloquent
{
    private $model;

    public function __construct(Invoice $invoice)
    {
        $this->model = $invoice;
    }

}
