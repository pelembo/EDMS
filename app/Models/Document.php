<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Document
 * @package App\Models
 * @version September 11, 2021, 2:58 pm UTC
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
class Document extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'documents';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'document_code',
        'title',
        'description',
        'file_upload',
        'file_url',
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
        'file_upload' => 'array',
        'file_url' => 'array',
        'created_by' => 'integer',
        'updated_by' => 'integer',
        'document_type_id' => 'integer',
        'workgroup_id' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'file_upload' => 'Required'
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
    public function documentType()
    {
        return $this->belongsTo(\App\Models\DocumentType::class, 'document_type_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function workgroup()
    {
        return $this->belongsTo(\App\Models\WorkGroup::class, 'workgroup_id', 'id');
    }
}
