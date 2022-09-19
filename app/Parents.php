<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    protected $table = 'parents';
    
	protected $fillable = [
		'id',
		'student_id',
		'total_amount',
        'acc_balance',
	];
    public function student()
	{
		return $this->hasMany('App\Student');
	}
	// public function stock()
	// {
	// 	return $this->hasMany('App\Stock');
	// }
}
