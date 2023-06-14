<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\modelPublic\Singleton;

class Flight extends Singleton
{
    use HasFactory;
    public function FunctionName()
    {
        echo 132;
    }
}
