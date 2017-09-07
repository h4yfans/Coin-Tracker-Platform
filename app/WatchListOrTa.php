<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $shiller
 */
class WatchListOrTa extends Model
{
    protected $fillable = [
        'shiller_id',
        'name',
        'symbol',
        'description',
        'trading_view',
        'trading_view_ideas',
        'twitter_ideas',
        'reddit',
        'is_acitve',
    ];


    public function shiller()
    {
        return $this->belongsTo(Shiller::class);
    }
}
