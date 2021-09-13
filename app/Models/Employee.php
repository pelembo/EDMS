<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Employee
 * @package App\Models
 * @version September 11, 2021, 7:37 pm UTC
 *
 * @property \App\Models\State $stateOfOrigin
 * @property \App\Models\User $createdBy
 * @property \App\Models\User $updatedBy
 * @property string $employee_code
 * @property string $last_name
 * @property string $first_name
 * @property string $middle_name
 * @property string $gender
 * @property string $birth_date
 * @property integer $marital_status
 * @property integer $state_of_origin
 * @property string $email
 * @property string $phone_number
 * @property integer $status
 */
class Employee extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'employees';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'employee_code',
        'last_name',
        'first_name',
        'middle_name',
        'gender',
        'birth_date',
        'marital_status',
        'state_of_origin',
        'email',
        'phone_number',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'employee_code' => 'string',
        'last_name' => 'string',
        'first_name' => 'string',
        'middle_name' => 'string',
        'gender' => 'string',
        'birth_date' => 'date',
        'marital_status' => 'integer',
        'state_of_origin' => 'integer',
        'email' => 'string',
        'phone_number' => 'string',
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
    public function stateOfOrigin()
    {
        return $this->belongsTo(\App\Models\State::class, 'state_of_origin', 'id');
    }

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
