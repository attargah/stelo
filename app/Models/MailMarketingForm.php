<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MailMarketingForm extends Model
{

    protected $fillable = [
        'email',
        'phone',
    ];
}
