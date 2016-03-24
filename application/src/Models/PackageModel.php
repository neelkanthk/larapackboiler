<?php

namespace Package\Application\Models;

use Illuminate\Database\Eloquent\Model;

class PackageModel extends Model {

    protected $table = 'laravel_packageboilerplate';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

}
