<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Section extends Model
{
    protected $fillable = ['section_name', 'status'];

 
    public function categories(): HasMany{
        return $this->HasMany(Category::class);
    }
}
