<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userInfoMessage extends Model
{
    use HasFactory;
    
    //Table name
    protected $table= 'user_info_messages';
    //Primary key
    public $primarykey='id';
}
