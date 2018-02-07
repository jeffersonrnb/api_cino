<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 * @property ClassroomEquipment[] $classroomEquipments
 */
class Equipment extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'equipments';

    /**
     * @var array
     */
    protected $fillable = ['name', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function classroomEquipments()
    {
        return $this->hasMany('App\ClassroomEquipment');
    }
}
