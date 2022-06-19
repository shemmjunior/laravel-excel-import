<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Car extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

        // Relationship To User
        public function user() {
            return $this->belongsTo(User::class, 'user_id');
        }
}
