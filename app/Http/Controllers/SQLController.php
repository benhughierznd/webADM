<?php

namespace App\Http\Controllers;

// untuk Table
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Foo;
use App\Models\dbdev; //untuk table
use App\Models\dbSP; //untuk SP
use App\Exports\dbdevExport; //untuk table
use App\Exports\dbSPExport; //untuk SP
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;


class SQLController extends Controller
{
    //function untuk table 
    public function index() 
    {
        $dbdev = dbdev::all();
        return view('dbdev', ['dbdev'=>$dbdev]);
    }

    public function export_excel()
    {
        return Excel::download(new dbdevExport, 'dbdev.xlsx');
    }


    //function untuk SP
    public function homeSP() //function untuk 
    {
        $dbSP = dbSP::all();
        return view('dbSP', ['dbSP'=>$dbSP]);
    }

    public function SPrun($var) 
    {
        $category = $var; //untuk masukan parameter '@category' pada SP

        DB::select(DB::raw('EXEC TestingBenFactPurchaseOrder ?'), $category);
        echo 'berhasil joss';
    }

    public function export_excel2() 
    {
        return Excel::download(new dbSPExport, 'dbSP.xlsx');
    }

    public function save()
    {
        //
    }

}


// foreach($ex_columns as $ex_c){
//     $dataQuery = $dataQuery->addSelect($ex_c);
//     }