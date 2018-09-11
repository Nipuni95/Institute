<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lecturer extends Model
{
 
 use SoftDeletes;
	//STUDENT TABLE
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

	protected $table = 'lecturer';


}