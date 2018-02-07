<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $day
 * @property string $starts
 * @property string $ends
 * @property string $created_at
 * @property string $updated_at
 * @property LessonHour[] $lessonHours
 */
class Hour extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'day', 'starts', 'ends', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lessonHours()
    {
        return $this->hasMany('App\LessonHour');
    }
}
