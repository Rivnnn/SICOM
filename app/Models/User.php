<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
    protected $fillable = [
        'name',
        'email',
        'password',
        'description',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'role_id',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function hasRole($role)
    {
        return $this->role()->where('role', $role)->exists();
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function ordersAsClient()
    {
        return $this->hasMany(Orders::class, 'client_id');
    }

    public function ordersAsFreelancer()
    {
        return $this->hasMany(Orders::class, 'freelancer_id');
    }

    public function reviewsAsClient()
    {
        return $this->hasMany(Review::class, 'client_id');
    }

    public function reviewsAsFreelancer()
    {
        return $this->hasMany(Review::class, 'freelancer_id');
    }

    public function messagesSent()
    {
        return $this->hasMany(Message::class, 'from_user_id');
    }

    public function messagesReceived()
    {
        return $this->hasMany(Message::class, 'to_user_id');
    }
}
