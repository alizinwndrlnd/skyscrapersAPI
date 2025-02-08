<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skyscraper extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        "name",
        "city_id",
        "height",
        "stories",
        "finished"
    ];

    public function city()
    {
        return $this->belongsTo(Skyscraper::class, "city_id", "id");
    }
}
