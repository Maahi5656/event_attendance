<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use QrCode as Qcode;

class QrCode extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function qrcode($size)
    {
        return Qcode::size($size)->generate($this->id);
    }
}
