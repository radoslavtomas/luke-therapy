<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'page_title',
        'page_subtitle',
        'page_description',
        'page_keywords',
        'address_line1',
        'address_line2',
        'address_line3',
        'postcode',
        'phone',
        'email',
        'map'
    ];
}
