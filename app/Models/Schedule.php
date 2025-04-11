<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = ['franchise_id', 'name'];

    public function franchise()
    {
        return $this->belongsTo(Franchise::class);
    }
}
