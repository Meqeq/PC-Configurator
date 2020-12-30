<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PCConfig extends Model
{
    protected $fillable =  ['cpu_id', 'gpu_id', 'mb_id','ram_id'];
    use HasFactory;
}
