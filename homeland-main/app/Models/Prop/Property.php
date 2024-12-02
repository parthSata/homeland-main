<?php

namespace App\Models\Prop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = true;

    protected $fillable = [
        'title',
        'price',
        'image',
        'beds',
        'baths',
        'sq_ft',
        'year_built',
        'price_sqft',
        'more_info',
        'location',
        'agent_name',
        'type',
        'city',
        'home_type_id',
    ];
    public function homeType()
    {
        return $this->belongsTo(HomeType::class, 'home_type_id');
    }
}
