<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salaries extends Model
{
    use HasFactory;
    protected $primaryKey = ['emp_no', 'from_date'];
    public $incrementing = false;
    public function employee()
    {
        return $this->belongsTo(Employees::class);
    }
}

