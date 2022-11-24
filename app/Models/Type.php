<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $table = 'types';

    protected $fillable = [
        'name',
        'order'
    ];

    public function scopeFilterName($query, $value)
    {
        if ($value)
        return $query->where('name', 'LIKE', '%'.$value.'%');
    }

}
