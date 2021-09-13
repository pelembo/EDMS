<?php

namespace App\Repositories;

use App\Models\WorkGroup;
use App\Repositories\BaseRepository;

/**
 * Class WorkGroupRepository
 * @package App\Repositories
 * @version September 11, 2021, 7:38 pm UTC
*/

class WorkGroupRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'name',
        'acronym',
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
        return WorkGroup::class;
    }
}
