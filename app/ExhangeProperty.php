<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class ExhangeProperty extends Model
{

    use SoftDeletes;
    use Notifiable;


    protected $dates = ['deleted_at'];


    protected static function boot()
    {
        parent::boot();


        static::creating(function ($model) {
            $model->updated_by = Auth::user()->id;
        });

        static::updating(function ($model) {
            $model->updated_by = Auth::user()->id;
        });
    }
}
