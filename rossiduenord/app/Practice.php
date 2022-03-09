<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    protected $fillable = [
        'applicant_id',
        'month',
        'year',
        'policy_name',
        'address',
        'civic',
        'common',
        'province',
        'region',
        'cap',
        'work_start',
        'c_m',
        'assev_tecnica',
        'nominative',
        'lastName',
        'name',
        'policy',
        'request_policy',
        'description',
        'bonus',
    ];

    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }

}
