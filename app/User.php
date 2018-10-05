<?php

namespace App;

use Faker\Factory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function city()
    {
        return $this->hasOne(City::class);
    }

    public function ships()
    {
        return $this->hasMany(UserShip::class);
    }

    protected static function boot()
    {
        parent::boot();
        static::created(function (self $model) {
            $faker = Factory::create();
            $city = $model->city()->save(new City([
                'user_id' => $model->getKey(),
                'name'    => $faker->city,
                'gold'    => 50000,
            ]));
        });
    }
}
