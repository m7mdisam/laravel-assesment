<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Franchise extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function parents()
    {
        return $this->hasMany(ParentModel::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
