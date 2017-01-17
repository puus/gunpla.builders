<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ScrapeData extends Model
{
    use SoftDeletes;

    protected $table      = 'scrape_data';
    protected $primaryKey = 'scrape_data_id';
    protected $dates      = ['deleted_at'];
}
