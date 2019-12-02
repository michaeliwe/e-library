<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'librarian_id','name','type','desc','author','publisher','price','status'
    ];

    public $timestamps = false;

    public function borrow()
    {
        return $this->hasMany('Borrow', 'book_id');
    }
}
