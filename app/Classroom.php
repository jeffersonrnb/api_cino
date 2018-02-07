<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $building_id
 * @property string $number
 * @property int $chairs_number
 * @property boolean $accessible
 * @property string $air_conditioning
 * @property string $projection
 * @property boolean $big_slate
 * @property string $created_at
 * @property string $updated_at
 * @property Building $building
 * @property ClassroomEquipment[] $classroomEquipments
 * @property Lesson[] $lessons
 */
class Classroom extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['building_id', 'number', 'chairs_number', 'accessible', 'air_conditioning', 'projection', 'big_slate', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function building()
    {
        return $this->belongsTo('App\Building');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function classroomEquipments()
    {
        return $this->hasMany('App\ClassroomEquipment');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lessons()
    {
        return $this->hasMany('App\Lesson');
    }
}
