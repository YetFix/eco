<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cupon extends Model
{
    use HasFactory;
    protected $fillable=
    ['code','status','type','value'];

    public function discount($price){
        if($this->type=='fixed'){
            return $this->value;
        }
        elseif($this->type=='percentage'){
            return ($this->value/100)*$price;
        }else{
            return 0;
        }
    }
}