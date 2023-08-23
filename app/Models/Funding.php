<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funding extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function adminStatus()
    {
        if ($this->status == 1)
        {
            return '<span class="tb-status text-success">Successful</span>';
        }
        return '<span class="tb-status text-warning">Pending</span>';
    }
    public function status()
    {
        if ($this->status == 1)
        {
            return '<span class="badge light badge-success">Successful</span>';
        }
        return '<span class="badge light badge-warning">Pending</span>';
    }

}
