<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['user_id', 'subcription_package_id', 'ecpired_date'])]

class SubscriptionPackageUser extends Model
{
    //
    public function subscriptionPackage(): BelongsTo {
        return $this->belongsTo(SubscriptionPackage::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
