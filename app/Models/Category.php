<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * guarded
     *
     * @var array
     */
    protected $guarded = [];

    public function news()
    {
        return $this->hasMany(News::class);
    }
}
