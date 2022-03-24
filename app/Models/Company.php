<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = "companies";
    protected $fillable = [
       'name',
       'siren',
       'siret',
    ];
    function user()
    {
        return $this->belongsTo(User::class,'company_id');
    }
}
