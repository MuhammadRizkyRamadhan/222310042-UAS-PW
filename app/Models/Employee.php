<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable=['role_id', 'name','nip'];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
