<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Code extends Model
{
    public function projects(){
        return $this->HasMany(Project::class);
    }
}
