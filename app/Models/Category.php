<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasApiTokens, HasFactory, Notifiable,HasRoles;
    protected $fillable = [
        'category_name', 
    ];

    //relation between category and services : one to many 
    public function services():HasMany
    {
        return $this->hasMany(Service::class);
    }
    
}
