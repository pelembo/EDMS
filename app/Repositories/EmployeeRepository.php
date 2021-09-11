<?php

namespace App\Repositories;

use App\Models\Employee;
use App\Repositories\BaseRepository;

/**
 * Class EmployeeRepository
 * @package App\Repositories
 * @version September 11, 2021, 7:37 pm UTC
*/

class EmployeeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
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
        return Employee::class;
    }
}
