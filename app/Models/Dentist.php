<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Dentist extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'password',
        'subscription'
    ];

    public function password(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Hash::make($value) 
        );      
    }

    public function register(array $data): void
    {
        $this->create($data);
    }
}
