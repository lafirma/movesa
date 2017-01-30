<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = ['name', 'email', 'phone'];
    
    public function getCouponAttribute(){
      return 'MVCP' . $this->id;
    }
}
