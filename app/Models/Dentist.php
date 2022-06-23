<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class Dentist extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'password',
        'subscription',
        'profile_picture'
    ];

    public function password(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Hash::make($value) 
        );      
    }

    public function register(Request $request): void
    {
        $file = $request->picture;

        if ($file) {
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('/images/dentist'), $fileName);
            $request->request->add(['profile_picture' => $fileName]);
        }
        $this->create($request->all());
    }
}
