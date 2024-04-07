<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

/**
 * @method static find($id)
 */
class Marca extends Model
{
    use HasFactory;
    protected $table = 'marcas';

    protected $guarded = [];
}
