<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'description','status','description','rooms_type',
    ];
}
