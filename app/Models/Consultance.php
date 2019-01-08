<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Consultance
 * @package App\Models
 * @version July 19, 2018, 5:42 pm +06
 *
 * @property string name
 * @property string phone
 * @property string city
 * @property string when
 * @property string interest
 * @property string lang
 * @property string status
 */
class Consultance extends Model
{
    use SoftDeletes;

    public $table = 'consultances';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'phone',
        'city',
        'when',
        'interest',
        'lang',
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
        'when' => 'string',
        'interest' => 'string',
        'lang' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'phone' => 'required'
    ];

    
}
