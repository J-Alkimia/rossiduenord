<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    protected $fillable = [
        'name', 'type',
    ];

    public function bank(){
        return $this->belongsTo(Bank::class);
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }

}
