<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Selling extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sellings';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['product_id', 'date_sale', 'user_id'];

    
}
