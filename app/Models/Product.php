<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'name',
        'description'
    ];

    public function saveData(Request $request): void
    {
        $this->create($request->all());
    }
}
