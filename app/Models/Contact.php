<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public $guarded=["_token"];

    protected $casts = [
        'created_at'  => 'date:Y-m-d',];
    const UPDATED_AT = null;

}
