<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Community extends Model
{
    protected $table = 'communities';

    protected $fillable = ['name','userId'];

    public static function checkComm(){

        $user = Auth::user();
        if(is_null($user->commId))
            return 'false';

       return 'true';

    }

}
