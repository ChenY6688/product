<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $table = 'messages';
    protected $primaryKey = 'id';
    protected $fillable = ['created_at', 'updated_at', 'message'];

    
    public function replyToMessage()
    {
        return $this->hasMany(ReplyToMessage::class, 'message_id', 'id');
    }
}
