<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $guarded = [];

    // protected $fillable = [
    //     'id', 'name', 'slug',
    // ];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'roles_permissions');
    }

    public function admins()
    {
        return $this->belongsToMany(Admin::class, 'admins_roles');
    }
}
