<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;     #注意,这一行代码写在类内部
    protected $table      = 'article';
    protected $primaryKey = 'id';
    protected $fillable   = ['title','content','user_id']; 


    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }
        
}
