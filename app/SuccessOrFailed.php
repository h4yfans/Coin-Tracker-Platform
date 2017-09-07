<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $watch_list_or_ta
 */
class SuccessOrFailed extends Model
{
    protected $fillable = [
        'watch_list_or_ta_id',
        'is_success'
    ];

    public function watchListOrTa()
    {
        return $this->belongsTo(WatchListOrTa::class);
    }
}
