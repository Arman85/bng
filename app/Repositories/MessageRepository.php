<?php

namespace App\Repositories;

use App\Models\Message;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MessageRepository
 * @package App\Repositories
 * @version July 19, 2018, 10:32 am UTC
 *
 * @method Message findWithoutFail($id, $columns = ['*'])
 * @method Message find($id, $columns = ['*'])
 * @method Message first($columns = ['*'])
*/
class MessageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'phone',
        'city',
        'text',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Message::class;
    }
}
