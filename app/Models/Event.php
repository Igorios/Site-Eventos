<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $casts = [
        'items' => 'array'
    ];

    protected $dates = ['date'];

    // permitindo atualizacao pelo post
    protected $guarded = [];

    public function user() {
        // pertence ao usuario
        return $this->belongsTo('App\Models\User');
    }

    public function users() {
        // pertence a muitos
        return $this->belongsToMany('App\Models\User');
    }

}
