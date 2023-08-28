<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Database
 *
 * @property Collection<Table> $tables
 * @property int $port
 * @property string $connection_name
 * @property string $database
 * @property string $driver
 * @property string $host
 * @property string $password
 * @property string $username
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\DatabaseFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Database newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Database newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Database query()
 * @method static \Illuminate\Database\Eloquent\Builder|Database whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Database whereDatabase($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Database whereDriver($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Database whereHost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Database whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Database wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Database wherePort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Database whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Database whereUsername($value)
 * @mixin \Eloquent
 */
	class IdeHelperDatabase {}
}

namespace App\Models{
/**
 * App\Models\Table
 *
 * @property string[] $columns
 * @method static \Illuminate\Database\Eloquent\Builder|Table newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Table newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Table query()
 * @mixin \Eloquent
 */
	class IdeHelperTable {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperUser {}
}

