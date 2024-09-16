<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = ['cate_name', 'section_id', 'discount', 'description', 'status'];


    public function section(): BelongsTo{
        return $this->belongsTo(Section::class, 'section_id', 'id');
    }

    
    public function sub_categories(): HasMany{
        return $this->HasMany(SubCategory::class);
    }
}
