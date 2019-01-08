<?php

namespace App\Repositories;

use App\Models\Textblock;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TextblockRepository
 * @package App\Repositories
 * @version July 19, 2018, 11:25 pm +06
 *
 * @method Textblock findWithoutFail($id, $columns = ['*'])
 * @method Textblock find($id, $columns = ['*'])
 * @method Textblock first($columns = ['*'])
*/
class TextblockRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'text'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Textblock::class;
    }
}
