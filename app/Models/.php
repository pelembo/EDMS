<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class 
 * @package App\Models
 * @version September 11, 2021, 2:45 pm UTC
 *
 * @property \App\Models\User $createdBy
 * @property \App\Models\User $updatedBy
 * @property \App\Models\Document_Type $documentTypes
 * @property \App\Models\WorkGroup $workgroup
 * @property string $document_code
 * @property string $title
 * @property string $description
 * @property string $file_upload
 * @property integer $document_type_id
 * @property integer $workgroup_id
 */
class  extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = '';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'document_code',
        'title',
        'description',
        'file_upload',
        'document_type_id',
        'workgroup_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'document_code' => 'string',
        'title' => 'string',
        'description' => 'string',
        'file_upload' => 'string',
        'created_by' => 'integer',
        'updated_by' => 'integer',
        'document_type_id' => 'integer',
        'workgroup_id' => 'integer'
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function documentTypes()
    {
        return $this->belongsTo(\App\Models\Document_Type::class, 'document_types_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function workgroup()
    {
        return $this->belongsTo(\App\Models\WorkGroup::class, 'workgroup_id', 'id');
    }
}
