<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use App\Enums\SupportStatus;

class Support extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject',
        'body',
        'status'
    ];

    public function status(): Attribute {
        return Attribute::make(
            set: fn (SupportStatus $status) => $status->name
        );
    }
}
