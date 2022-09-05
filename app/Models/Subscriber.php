<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'subscriber';
    protected $primary = 'id_subscriber';
    protected $guarded = ['id_subscriber'];
    protected $hidden=['id'];
}
