<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function state(){
        return $this->belongsTo(States::class, 'state_id', 'id');
      }
}
