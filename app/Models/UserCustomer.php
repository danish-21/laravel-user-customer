<?php



namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UserCustomer
 *
 * @property int $id
 * @property int $user_id
 * @property int $customer_id
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Customer $customer
 * @property User $user
 *
 * @package App\Models
 */
class UserCustomer extends Model
{
	use SoftDeletes;
	protected $table = 'user_customers';

	protected $casts = [
		'user_id' => 'int',
		'customer_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'customer_id'
	];

	public function customer()
	{
		return $this->belongsTo(Customer::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
