<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listings extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filter)
    {
        if ($filter['tag'] ?? false) {
            $query->where('tags', 'like', '%' . $filter['tag'] . '%');
        }

        if ($filter['search'] ?? false) {
            $query->where('title', 'like', '%' . $filter['search'] . '%')
                ->orWhere('tags', 'like', '%' . $filter['search'] . '%')
                ->orWhere('company', 'like', '%' . $filter['search'] . '%')
                ->orWhere('location', 'like', '%' . $filter['search'] . '%');
        }
    }
}
