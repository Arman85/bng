<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Review
 * @package App\Models
 * @version July 23, 2018, 1:55 pm +06
 *
 * @property string text
 */
class Review extends Model
{
    use SoftDeletes;

    public $table = 'reviews';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'text'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'text' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'text' => 'required'
    ];

    
}
