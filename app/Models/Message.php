<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'messages';

    protected $fillable = [
        'message',
        'user_id',
        'flag',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
