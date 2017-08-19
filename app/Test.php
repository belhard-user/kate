<?php

namespace App;

use App\Phone;
use Illuminate\Database\Eloquent\Model;


class Test extends Model
{
    protected $table = 'test';

    protected $fillable = [
        'name', 'email', 'age', 'avatar', 'description'
    ];

    public function getFooAttribute()
    {
        return $this->name . ' ' . $this->email;
    }

    public function getUpperName()
    {
        return strtoupper($this->name);
    }

    public function phones()
    {
        return $this->hasMany(Phone::class);
    }
}
