<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $upload = '/images/';
    protected $fillable = ['file'];

    public function getFileAttribute($file) {
        return $this->upload . $file;
    }
}
