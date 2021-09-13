<?php

namespace App\Repositories;

use App\Models\Document;
use App\Repositories\BaseRepository;

/**
 * Class DocumentRepository
 * @package App\Repositories
 * @version September 11, 2021, 2:58 pm UTC
*/

class DocumentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'document_code',
        'title',
        'description',
        'file_upload',
        'document_type_id',
        'workgroup_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Document::class;
    }
}
