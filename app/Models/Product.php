<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

   
    protected $fillable = ['name', 
                           'description',
                           'price',
                           'model',
                           'body_type',
                           'date_of_year',
                           'millage',
                           'transmission',
                           'color',
                           'oil_type',
                           'condition',
                           'address',
                           'user_name',
                           'user_number'];

                         
               

    public function scopeFilter($query, array $filters) {
        if($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        if($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%');
        }
    }

    // Relationship To User
    // public function user() {
    //     return $this->belongsTo(User::class, 'user_id');
    // }
}
