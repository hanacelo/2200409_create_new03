<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Make extends Model
{
     // Userテーブルとのリレーション （従テーブル側）
     public function user() {
        return $this->belongsTo('App\Models\User');
    }
    
    use HasFactory;
    
    // Userテーブルとの多対多リレーション
     public function favo_user() {
        return $this->belongsToMany('App\Models\User');
    }
}

