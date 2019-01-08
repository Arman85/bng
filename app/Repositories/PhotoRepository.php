<?php

namespace App\Repositories;

use App\Models\Photo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PhotoRepository
 * @package App\Repositories
 * @version July 24, 2018, 4:46 pm +06
 *
 * @method Photo findWithoutFail($id, $columns = ['*'])
 * @method Photo find($id, $columns = ['*'])
 * @method Photo first($columns = ['*'])
*/
class PhotoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'path'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Photo::class;
    }
}
