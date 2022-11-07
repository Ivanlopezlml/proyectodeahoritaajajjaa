<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Gerente
 *
 * @property $id
 * @property $name
 * @property $email
 * @property $numero tel
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Gerente extends Model
{
    
    static $rules = [
		'name' => 'required',
		'email' => 'required',
		'numero tel' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email','numero tel'];



}
