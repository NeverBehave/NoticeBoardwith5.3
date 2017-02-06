<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * Massive assign
     * @var array
     */
    protected $fillable = [
        'type', 'content', 'explanation',
    ];

    /**
     * Hidden
     * @var array
     */
    protected $hidden = [
        'range', 'vote_id',
    ];

    protected $table = 'vote_questions';

    /**
     * Related to options
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function options()
    {
        return $this->hasMany('App\Option', 'question_id', 'id');
    }

    /**
     * Trace back to the vote
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vote()
    {
        return $this->belongsTo('App\Vote', 'id', 'vote_id');
    }

}
