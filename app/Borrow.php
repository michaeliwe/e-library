<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    protected $table = "borrow";
    protected $fillable = [
        'book_id','student_id','loan_date','return_date','fine_price'
    ];

    public $timestamps = false;

    public function book()
    {
        return $this->belongsTo('App\Book');
    }
}
