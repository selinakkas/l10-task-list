<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title','description','long_description','completed'];
   
    public function toggleComplete(){
        $this->completed = !$this->completed;
        $this->save();
    }
    // protected $fillable = ['tablodaki bütün alanların isimleri veri gönderilecek olan']
    // protected $guarded = [];
    
    //protected $fillable = ['title'];
}
