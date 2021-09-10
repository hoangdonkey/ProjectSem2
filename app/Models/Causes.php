<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Causes extends Model
{
    use HasFactory;

    protected $table = 'causes';
    protected $primaryKey = 'cause_id';
    protected $guardedBy = [];

    public function donations()
    {
        return $this->hasMany(Donation::class, 'cause_id', 'cause_id');
    }
}
