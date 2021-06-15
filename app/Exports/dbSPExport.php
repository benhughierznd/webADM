<?php

namespace App\Exports;

use App\Models\dbSP;
//use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
// use Maatwebsite\Excel\Concerns\WithHeadings;
// use Illuminate\Support\Facades\DB;

class dbSPExport implements FromCollection 
{
    //use Exportable;

    public function collection()
    {
        return dbSP::all();
    }

}
