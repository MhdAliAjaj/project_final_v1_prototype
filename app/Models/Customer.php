<?php

namespace App\Models;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasApiTokens, HasFactory, Notifiable,HasRoles;
    protected $fillable = [
        'firstName', 
        'lastName', 
        'email', 
        'password', 
        'gender', 
        'birthDate', 
        'phone', 
    ];

     //relation between customer and services : one to many 
     public function requst_services_R():HasMany
     {
         return $this->hasMany(RequstService::class);
     }
}
