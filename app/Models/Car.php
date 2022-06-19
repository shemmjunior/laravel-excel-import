<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
/**
 * https://www.codecheef.org/article/tracking-user-activities-using-laravel-audit-package
 * https://laravel-auditing.com/docs/13.0/model-setup
 */

class Car extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

        // Relationship To User
        public function user() {
            return $this->belongsTo(User::class, 'user_id');
        }
}
