<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'deliveries';
    public function restaurant() {
        return $this->BelongsTo(User::class,'restaurant_id','id');
        
    }
}
