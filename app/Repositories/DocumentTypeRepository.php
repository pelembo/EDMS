<?php

namespace App\Repositories;

use App\Models\DocumentType;
use App\Repositories\BaseRepository;

/**
 * Class DocumentTypeRepository
 * @package App\Repositories
 * @version September 11, 2021, 7:35 pm UTC
*/

class DocumentTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'name',
        'description',
        'status'
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
        return DocumentType::class;
    }
}
