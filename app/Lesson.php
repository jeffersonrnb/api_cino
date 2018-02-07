<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $class_id
 * @property int $classroom_id
 * @property string $teacher
 * @property string $created_at
 * @property string $updated_at
 * @property Class $class
 * @property Classroom $classroom
 * @property LessonHour[] $lessonHours
 */
class Lesson extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['class_id', 'classroom_id', 'teacher', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function class()
    {
        return $this->belongsTo('App\Class');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function classroom()
    {
        return $this->belongsTo('App\Classroom');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lessonHours()
    {
        return $this->hasMany('App\LessonHour');
    }
}
