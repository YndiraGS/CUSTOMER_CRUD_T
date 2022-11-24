<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'name',
        'ruc',
        'email',
        'page',
        'status',
        'type_id'
    ];

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class, 'type_id');

    }

    public function scopeTypeName($query, $value)
    {
        return $query->when($value, function ($query) use ($value) {
            $query->whereHas('type', function ($query) use ($value) {
                $query->filterName($value);
            });
        });
    }



    public function getTypeNameAttribute ()
    {
        return $this->type ? $this->type->name : '';
    }

}
