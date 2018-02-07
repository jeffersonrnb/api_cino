<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $disciplines_id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 * @property Discipline $discipline
 * @property Lesson[] $lessons
 */
class Class extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['disciplines_id', 'name', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function discipline()
    {
        return $this->belongsTo('App\Discipline', 'disciplines_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lessons()
    {
        return $this->hasMany('App\Lesson');
    }
}
