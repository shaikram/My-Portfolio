<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;
    protected $primaryKey = 'replyId';
    protected $fillable = ["username", "email", "message","msgId"];
}
