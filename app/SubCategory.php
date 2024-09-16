<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubCategory extends Model
{
    protected $fillable = ['sub_cate_name', 'category_id', 'status'];


    public function category(): BelongsTo{
        return $this->belongsTo(category::class, 'category_id', 'id');
    }
}
