<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comic
 *
 * @property $id
 * @property $title
 * @property $price
 * @property $isbn
 * @property $stock
 * @property $writer
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Comic extends Model
{
    
    static $rules = [
		'title' => 'required',
		//'isbn' => 'required',
    'stock' => 'required',
		//'issn' => 'required',
    //'ean' => 'required',
		//'upc' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title','stock','isbn','issn','ean','upc'];



}
