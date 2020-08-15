<?php

namespace App\Models\Store;

use Illuminate\Database\Eloquent\Model;

class Card extends Model 
{
    protected $table = 'cards';
    public $timestamps = true;
    protected $fillable = [];
	
    public function type()
    {
        return $this->belongsTo('App\Models\Store\CardType', 'card_type_id', 'id');
    }
}