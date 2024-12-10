<?php

namespace App\Models\Parties;

use App\Concerns\Blamable;
use App\Concerns\CompanyOwned;
use App\Concerns\SyncsWithCompanyDefaults;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use Blamable;
    use CompanyOwned;
    use SyncsWithCompanyDefaults;

    protected $table = 'customers';

    protected $fillable = [
        'company_id',
        'customer_name',
        'customer_email',
        'customer_phone',
        'address',
        'city',
        'country',
        'enabled',
        'created_by',
        'updated_by',
    ];


    protected $casts = [
        'enabled' => 'boolean',
    ];
}
