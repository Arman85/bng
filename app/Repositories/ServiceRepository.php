<?php

namespace App\Repositories;

use App\Models\Service;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ServiceRepository
 * @package App\Repositories
 * @version January 10, 2019, 2:49 pm +06
 *
 * @method Service findWithoutFail($id, $columns = ['*'])
 * @method Service find($id, $columns = ['*'])
 * @method Service first($columns = ['*'])
*/
class ServiceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'img'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Service::class;
    }
}
