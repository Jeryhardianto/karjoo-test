<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnnualLeave extends Model
{
    protected $table = 'annual_leaves';
    protected $guarded = ['id'];
}
