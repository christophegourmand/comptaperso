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
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

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
    ];

    /**
    * Get the roles of that user.
    */
    public function roles()
    {
        return $this->belongsToMany(Role::class , 'role_user'); // arg2 is the pivot table
    }

    /**
    * Get the bank-accounts of that user.
    */
    public function bankAccounts()
    {
        return $this->hasMany(BankAccount::class);
    }


    /**
    * Get the preferences customized by this user.
    */
    public function preferences()
    {
        return $this->belongsToMany(Preference::class , 'preference_user'); // arg2 is the pivot table
    }

    /**
    * Get the operationCategories created by this user.
    */
    public function operationCategories()
    {
        return $this->hasMany(OperationCategory::class);
    }

    /**
    * Get the operationCategories created by this user.
    */
    public function thirdparties()
    {
        return $this->hasMany(Thirdparty::class);
    }

}
