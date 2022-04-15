<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'excerpt', 'body'];

    public function scopeFilters($query, array $filters){
        $query->when($filters['search']?? false, fn($query, $search)=>
            $query->where(fn($query)=>
            $query->where('title', 'like', '%' . $search . '%')
            ->orWhere('body', 'like', '%' . $search . '%')
        ));
        
        $query->when($filters['category']?? false, fn($query, $category)=>
            $query->whereHas('category', fn($query)=>
            $query->where('slug', $category)));
            
        
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
