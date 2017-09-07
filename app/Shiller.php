<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * @property mixed $watch_list_or_tas
 */
class Shiller extends Model
{
    protected $fillable = [
        'name'
    ];

    public function watchListOrTas()
    {
        return $this->hasMany(WatchListOrTa::class);
    }
}
