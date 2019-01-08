<?php

namespace App\Repositories;

use App\Models\Review;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ReviewRepository
 * @package App\Repositories
 * @version July 23, 2018, 1:55 pm +06
 *
 * @method Review findWithoutFail($id, $columns = ['*'])
 * @method Review find($id, $columns = ['*'])
 * @method Review first($columns = ['*'])
*/
class ReviewRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'text'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Review::class;
    }
}
