<?php

namespace App\Exports;

use App\Models\Order;
use http\Env\Request;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

$orders= null;
class OrdersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */


    public function __construct($orders){
        $GLOBALS['orders'] = $orders;
    }

    public function collection()
    {

        return $GLOBALS['orders'];
    }

    public function headings(): array
    {
        return [
            'Ad',
            'Diş No.',
            'Miktar',
            'Tutar',
            'Tarih'
        ];
    }
}
