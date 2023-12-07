<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'companyName',
        'keyPerson',
        'contactNo',
        'email',
        'address',
        'customerType',
        'productType',
        'purchasePlan',
        'suggestedModel',
        'date',
        'reference',
        'node_id',
        'created_by',
    ];
}
