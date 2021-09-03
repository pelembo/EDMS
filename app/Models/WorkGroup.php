<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class WorkGroup
 * @package App\Models
 * @version September 3, 2021, 9:24 am UTC
 *
 * @property \App\Models\User $createdBy
 * @property \App\Models\User $updatedBy
 * @property string $name
 * @property string $description
 * @property string $acronym
 * @property integer $status
 */
class WorkGroup extends Model
{
    use SoftDeletes;

    public $table = 'workgroups';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description',
        'acronym',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'acronym' => 'string',
        'status' => 'integer',
        'created_by' => 'integer',
        'updated_by' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function createdBy()
    {
        return $this->belongsTo(\App\Models\User::class, 'created_by', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function updatedBy()
    {
        return $this->belongsTo(\App\Models\User::class, 'updated_by', 'id');
    }
}
