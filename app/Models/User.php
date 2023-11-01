<?php

namespace App\Models;
// use App\Models\Order;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Order;
use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;


class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $guarded = [];
    protected $table = 'users';

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }
    public function working_hour()
    {
        return  $this->hasMany(WorkingHour::class, 'vendor_id', 'id');
    }
    public function working_hours()
    {
        return  $this->hasMany(WorkingHour::class, 'vendor_id', 'id');
    }
    // User.php

    public function isOpenNow($current_time)
    {
        // return $this->working_hour;
        if ($this->working_hours->isEmpty() || $this->working_hours[0]->availability == 0) {
            return false; // No working hours or availability is 0, consider as closed
        }

        $currentWorkingHour = $this->working_hours->first();
        // return $current_time;
        // return $currentWorkingHour->opening_hour;
        
        

        return $current_time >= $currentWorkingHour->opening_hour
            && $current_time <= $currentWorkingHour->closing_hour;
    }
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'id' => 'string',
        'email_verified_at' => 'datetime',
    ];
}
