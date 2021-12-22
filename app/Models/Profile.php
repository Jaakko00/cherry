<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function profileImage() 
    {
        $imagePath = ($this->image) ? $this->image : 'uploads/pyWje6Z84Pb1p9njqVOOZvN3DwWfl6qKcSTq5cVE.png';
        return '/storage/' . $imagePath;
    }


    public function follower() 
    {
        return $this->belongsToMany(User::class);
    }

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
    
}
