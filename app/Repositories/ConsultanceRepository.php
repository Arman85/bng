<?php

namespace App\Repositories;

use App\Models\Consultance;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ConsultanceRepository
 * @package App\Repositories
 * @version July 19, 2018, 5:42 pm +06
 *
 * @method Consultance findWithoutFail($id, $columns = ['*'])
 * @method Consultance find($id, $columns = ['*'])
 * @method Consultance first($columns = ['*'])
*/
class ConsultanceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'phone',
        'city',
        'when',
        'interest',
        'lang',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Consultance::class;
    }
}
