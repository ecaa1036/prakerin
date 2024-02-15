<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     public function siswa(){
        return $this->hasOne(Siswa::class, 'id_user');
     }

     public function guru(){
        return $this->hasOne(Guru::class, 'id_user');
     }

     public function industri(){
        return $this->hasMany(Industri::class, 'id_user');
     }
    protected $fillable = [
        'email',
        'password',
        'username',
        'level',
    ];
        protected $table = "users";
        protected $guarded = [];
        protected $primaryKey = 'id_user';
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
