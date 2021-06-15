<?php

namespace App\Exports;

use App\Models\dbdev;
use Maatwebsite\Excel\Concerns\FromCollection;

class dbdevExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return dbdev::all();
    }
}
