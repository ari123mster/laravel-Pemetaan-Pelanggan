<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class customer extends Model
{
    use SoftDeletes;
    protected $table = 'customers';
    protected $fillable = ['region_id', 'nama', 'alamat', 'no_hp', 'file', 'latitude', 'longitude'];

    public function region()
    {
        return $this->belongsTo(region::class);
    }
    public function history()
    {
        return $this->hasMany(history::class)->withTrashed();
    }
}
