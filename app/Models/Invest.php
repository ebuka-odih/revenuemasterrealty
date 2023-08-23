<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invest extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function properties()
    {
        return $this->belongsTo(Property::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function transId()
    {
        return "#".$this->id."3558".$this->id;
    }

}
