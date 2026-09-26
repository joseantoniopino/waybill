<?php

namespace Waybill\Customer\Infrastructure\Persistence\Eloquent;

use App\Models\User;
use Database\Factories\CustomerFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\UseFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

#[UseFactory(CustomerFactory::class)]
#[Fillable(['name', 'description'])]
class CustomerModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'customers';

    /**
     * @return HasMany<User, $this>
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
