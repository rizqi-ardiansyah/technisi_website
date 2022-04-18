<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Message extends Model {
    use HasFactory;

    protected $table = 'Message';
    protected $primaryKey = 'msg_id';
    protected $fillable = [
        'msg_id',
        'msg_conetnt',
        'is_seen',
        'dir',
        'file',
        'sender',
        'receiver',
        'message',
        'created_at',
        'updated_at',
    ];

    public function sender(){
        return $this->belongsTo(User::class, 'sender');
    }

    public function receiver(){
        return $this->belongsTo(User::class, 'receiver');
    }
}
