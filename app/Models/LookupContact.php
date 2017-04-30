<?php

namespace App\Models;

use Eloquent;

/**
 * Class ExpenseCategory.
 */
class LookupContact extends Eloquent
{
    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = [
        'lookup_account_id',
        'contact_key',
    ];

}