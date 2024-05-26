<?php

namespace App\Models;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    use HasApiTokens, HasFactory, Notifiable,HasRoles;
    protected $fillable = [
        'title', 
        'details', 
        'price', 
        'start_date', 
        'end_date', 
        'category_id', 
    ];

    //relation between category and services : one to many 
    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
