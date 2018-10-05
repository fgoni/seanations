<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Cannon
 *
 * @property int $id
 * @property int $price
 * @property int $power
 * @property int $weight
 * @property int $is_black
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cannon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cannon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cannon whereIsBlack($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cannon whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cannon wherePower($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cannon wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cannon whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cannon whereWeight($value)
 */
	class Cannon extends \Eloquent {}
}

namespace App{
/**
 * App\City
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property int $gold
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\City whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\City whereGold($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\City whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\City whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\City whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\City whereUserId($value)
 */
	class City extends \Eloquent {}
}

namespace App{
/**
 * App\Ship
 *
 * @property int $id
 * @property string $name
 * @property int $hull
 * @property int $cargo
 * @property int $crew
 * @property int $speed
 * @property int $cannons
 * @property int $price
 * @property int $build_time
 * @property int $is_black
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ship whereBuildTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ship whereCannons($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ship whereCargo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ship whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ship whereCrew($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ship whereHull($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ship whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ship whereIsBlack($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ship whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ship wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ship whereSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ship whereUpdatedAt($value)
 */
	class Ship extends \Eloquent {}
}

namespace App{
/**
 * App\Traderoute
 *
 * @property int $id
 * @property int $city_from_id
 * @property int $city_to_id
 * @property int $duration
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Traderoute whereCityFromId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Traderoute whereCityToId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Traderoute whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Traderoute whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Traderoute whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Traderoute whereUpdatedAt($value)
 */
	class Traderoute extends \Eloquent {}
}

namespace App{
/**
 * App\Trip
 *
 * @property int $id
 * @property int $user_ship_id
 * @property int $route_id
 * @property int $good_id
 * @property int $is_safe
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trip whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trip whereGoodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trip whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trip whereIsSafe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trip whereRouteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trip whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trip whereUserShipId($value)
 */
	class Trip extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $avatar
 * @property string|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\City $city
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\UserShip[] $ships
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\UserShip
 *
 * @property int $id
 * @property int $user_id
 * @property int $ship_id
 * @property int $cannon_id
 * @property int $is_active
 * @property string $name
 * @property int $hull
 * @property int $cannons
 * @property int $cargo
 * @property int $crew
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserShip whereCannonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserShip whereCannons($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserShip whereCargo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserShip whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserShip whereCrew($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserShip whereHull($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserShip whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserShip whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserShip whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserShip whereShipId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserShip whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserShip whereUserId($value)
 */
	class UserShip extends \Eloquent {}
}

