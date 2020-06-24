<?php

namespace App\Repositories;

use App\Models\CategoriaProducto;
use App\Repositories\BaseRepository;

/**
 * Class CategoriaProductoRepository
 * @package App\Repositories
 * @version June 24, 2020, 9:15 am -05
*/

class CategoriaProductoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
        return CategoriaProducto::class;
    }
}
