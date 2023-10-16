<?php



namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Customer
 *
 * @property int $id
 * @property string $customer_name
 * @property string $mobile
 * @property string $address
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Customer extends Model
{
	use SoftDeletes;
	protected $table = 'customers';

	protected $fillable = [
		'customer_name',
		'mobile',
		'address'
	];

	public function users()
	{
		return $this->belongsToMany(User::class, 'user_customers')
					->withPivot('id', 'deleted_at')
					->withTimestamps();
	}
}
