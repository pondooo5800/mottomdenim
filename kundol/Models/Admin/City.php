<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use SoftDeletes;
    protected $table = 'citys';
    protected $fillable = [
        'name',
        'states_id',
    ];

    public function scopeCityId($query, $id)
    {
        return $query->where('id', $id);
    }

    public function scopeSearchParameter($query, $parameter)
    {
        return $query->where('name', 'like', '%' . $parameter . '%');
    }

    public function scopeStateId($query, $id)
    {
        return $query->where('states_id', $id);
    }

    public function state()
    {
        return $this->belongsTo('App\Models\Admin\State', 'states_id', 'id');
    }
}
