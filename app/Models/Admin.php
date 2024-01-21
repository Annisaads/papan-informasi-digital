<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use App\Notifications\ResetPasswordNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable {
    use HasFactory, Notifiable;

    protected $guarded = ['id'];

    public function generateToken(){
        $token = Str::random(60);
        $this->token = $token;
        $this->token_expired_at = now()->addMinutes(10);
        $this->save();
        return $token;
    }

    public function sendForgotPasswordNotification(){
        $token = $this->generateToken();
        $this->notify(new ResetPasswordNotification($token));
    }

    public function verifyToken($token) {
        if ($this->token === $token && $this->token_expired_at > now()) {
            $this->token = null;
            $this->token_expired_at = null;
            $this->save();

            return true;
        }

        return false;
    }
}
