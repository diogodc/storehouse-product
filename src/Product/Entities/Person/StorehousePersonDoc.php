<?php

namespace ResultSystems\Storehouse\Entities\Storehouse;

use ResultSystems\Person\Entities\Person;

class StorehousePersonDoc extends Person
{
    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $user = \Auth::user();
            $model->created_by = $user->Id;
            $model->updated_by = $user->Id;
        });
        static::updating(function ($model) {
            $model->updated_by = \Auth::user()->Id;
        });
    }
}
