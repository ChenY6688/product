<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReplyToMessage extends Model
{
    use HasFactory;
    protected $table = 'reply_to_messages';
    protected $primaryKey = 'id';
    protected $fillable = ['created_at', 'updated_at', 'replay_message', 'message_id'];
    
    public function message()
    {
        return $this->belongsTo(ReplyToMessage::class, 'message_id', 'id');
    }
}
