<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role', 'status', 'confirmation_code', 'company_position', 'mobile_number', 'code', 'firm_code', 'firm_name', 'address', 'suburb', 'state', 'postcode', 'firm_website', 'firm_phone', 'tokens_available'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * get reports of the advisors
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reports(){
        return $this->hasMany(Report::class, 'advisor', 'id');
    }
}
