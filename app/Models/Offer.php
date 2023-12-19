<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Location;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Offer extends Model
{
    use HasFactory;
    protected $fiilable = [
        'title',
        'description',
        'price',
        'status',
        'author_id'
    ];
    public function categoryies():BelongsToMany{
        return $this->belongsToMany(Category::class);
    }
    public function location():BelongsToMany{
        return $this->belongsToMany(Location::class);
    }
}
