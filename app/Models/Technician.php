<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class Technician extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'phone_number',
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
            $file->move(public_path('/images/technician'), $fileName);
            $request->request->add(['profile_picture' => $fileName]);
        }

        $this->create($request->all());
    }
}
