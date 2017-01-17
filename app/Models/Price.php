<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Price extends Model
{
    use SoftDeletes;

    protected $table      = 'price';
    protected $primaryKey = 'price_id';
    protected $dates      = ['deleted_at'];

    public function gunpla() {
        return $this->belongsTo('App\Models\Gunpla', 'gunpla_prices', 'price_fk', 'gunpla_fk');
    }

    public function source() {
        return $this->belongsTo('App\Models\Source', 'source_prices', 'price_fk', 'source_fk');
    }
}
