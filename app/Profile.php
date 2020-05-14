<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function profileImage()
    {
        $imagePath = $this->image ? $this->image : 'profile/LCNpeh4xrJmfb9fN3XDXshVUVIxICC7u0nj34UR9.jpeg';

        return '/storage/'.$imagePath;
    }
}
