<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        "country_code",
        "name"
    ];
public function skyscrapers()
{
    return $this ->hasMany(Skyscraper::class, "city_id", "id");

}

}
