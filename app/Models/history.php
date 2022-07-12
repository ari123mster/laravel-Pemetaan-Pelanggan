<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class history extends Model
{
    use SoftDeletes;
    protected $table = 'histories';
    protected $fillable = ['customer_id', 'tanggal', 'trouble', 'action'];

    public function customer()
    {
        return $this->belongsTo(customer::class)->withTrashed();
    }
}
