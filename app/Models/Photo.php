<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Photo
 * @package App\Models
 * @version July 24, 2018, 4:46 pm +06
 *
 * @property string path
 */
class Photo extends Model
{
    use SoftDeletes;

    public $table = 'photos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'path'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'path' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'path' => 'required'
    ];

    
}
