<?php

namespace App\Models;
<<<<<<< HEAD

use Laravel\Sanctum\HasApiTokens;
use Laravel\Jetstream\HasProfilePhoto;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use HasRoles;
    use TwoFactorAuthenticatable;
=======
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Role;
use App\Models\Technician;
use App\Models\Customer;
use App\Models\Message;

class User extends Authenticatable {
    use HasApiTokens, HasFactory, Notifiable;
>>>>>>> 3abbe9a20101da6a35b2b6d345e4d6901f9c30cf

    /**
     * The attributes that are mass assignable.
     *
<<<<<<< HEAD
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
=======
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'email',
        'username',
        'phone',
>>>>>>> 3abbe9a20101da6a35b2b6d345e4d6901f9c30cf
        'id_role',
        'password',
    ];

    /**
<<<<<<< HEAD
     * The attributes that should be hidden for arrays.
     *
     * @var array
=======
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
>>>>>>> 3abbe9a20101da6a35b2b6d345e4d6901f9c30cf
     */
    protected $hidden = [
        'password',
        'remember_token',
<<<<<<< HEAD
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'created_at' => 'datetime:d-M-Y'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['roles'];
=======
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function customer(){
        return $this->hasOne(Customer::class);
    }

    public function technician(){
        return $this->hasOne(Technician::class);
    }

    public function sender(){
        return $this->hasMany(Message::class, 'sender');
    }

    public function receiver(){
        return $this->hasMany(Message::class, 'receiver');
    }
>>>>>>> 3abbe9a20101da6a35b2b6d345e4d6901f9c30cf
}
