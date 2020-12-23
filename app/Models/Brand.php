<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use Translatable;

    protected $with = ['translations'];

    protected $fillable = ['image', 'is_active'];

    protected $casts =['is_active' => 'boolean'];

    public $translatedAttributes =['name'];

    public function scopeChild ($query){
        return $query->whereNotNull('id');
    }

    public function getActive (){
        return $this->is_active == 0 ? __('admin/body.false') : __('admin/body.true') ;
    }
}
