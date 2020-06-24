<?php

namespace App\Repositories;

use App\Models\Cargo;
use App\Repositories\BaseRepository;

/**
 * Class CargoRepository
 * @package App\Repositories
 * @version June 23, 2020, 10:06 pm -05
*/

class CargoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre'
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
        return Cargo::class;
    }
}
