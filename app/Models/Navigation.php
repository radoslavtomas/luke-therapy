<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'route',
        'position',
        'page_id'
    ];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class)->orderBy('position');
    }
}
