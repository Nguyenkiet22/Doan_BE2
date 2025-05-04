<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    //
    use HasFactory, Notifiable;


     /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'ID_Car',
        'Name_Car',
        'Car_Company',
        'Price',
        'Information',
        'Image',
        'Countries',
        'Start',
        'create_at',
        'update_at'
    ];
   
}
