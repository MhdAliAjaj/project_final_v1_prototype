<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RequstService extends Model
{
    use HasApiTokens, HasFactory, Notifiable,HasRoles;
    protected $fillable = [
        'customer_id', 
        'service_id', 
        'status', 
       
    ];

    //relation between customer and  requsts_services : one to many 
    public function requst_service_customer():BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
    //relation between services and  requsts_services : one to many 
    public function requst_service_service():BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

}
