<?php


namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 *
 * @property int $id
 * @property string $name
 * @property string $mobile
 * @property string $email
 * @property int $age
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|Customer[] $customers
 *
 * @package App\Models
 */
class User extends Authenticatable
{
	use SoftDeletes;
	protected $table = 'users';

	protected $casts = [
		'age' => 'int'
	];

	protected $fillable = [
		'name',
		'mobile',
		'email',
		'age'
	];

	public function customers()
	{
		return $this->belongsToMany(Customer::class, 'user_customers')
					->withPivot('id', 'deleted_at')
					->withTimestamps();
	}
}
