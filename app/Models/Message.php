<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Message
 * @package App\Models
 * @version July 19, 2018, 10:32 am UTC
 *
 * @property string name
 * @property string phone
 * @property string city
 * @property string text
 * @property string status
 */
class Message extends Model
{
    use SoftDeletes;

    public $table = 'messages';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'phone',
        'city',
        'text',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'phone' => 'string',
        'city' => 'string',
        'text' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'phone' => 'required',
        'text' => 'required'
    ];

    
}
