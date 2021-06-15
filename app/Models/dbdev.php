<?php

namespace App\Models;

use illuminate\Database\Eloquent\Model;

class dbdev extends Model 
{
    protected $table = "dbo.Test_FactPurchaseOrder";

    protected $fillable = ['PurchasingDoc', 'CompanyCode', 'PurchDocCategory', 'PurchDocType', 'ControlIndicator', 'DeletionIndicator', 'Status', 'CreatedOn', 'CreatedBy', 'ItemNumberInterval', 'LastItem', 'Vendor'];
}

?>