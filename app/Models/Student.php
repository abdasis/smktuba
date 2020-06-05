<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function father()
    {
        return $this->hasOne(Mother::class);
    }

    public function mother()
    {
        return $this->hasOne(Mother::class);
    }

    public function wali()
    {
        return $this->hasOne(Wali::class);
    }
    public function contact()
    {
        return $this->hasOne(Contact::class);
    }
}
