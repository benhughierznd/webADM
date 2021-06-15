<?php

namespace App\Models;

use illuminate\Database\Eloquent\Model;

class dbSP extends Model 
{
    protected $table = "dbo.FactPurchaseOrder_Test_SP";

    protected $guarded = []; //untuk ambil semua kolom
}

?>