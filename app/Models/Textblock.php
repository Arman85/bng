<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Textblock
 * @package App\Models
 * @version July 19, 2018, 11:25 pm +06
 *
 * @property string title
 * @property string text
 */
class Textblock extends Model
{
    use SoftDeletes;

    public $table = 'textblocks';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'text'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'text' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'text' => 'required'
    ];

    
}
