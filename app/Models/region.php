<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class region extends Model
{
    use SoftDeletes;
    protected $table = 'regions';
    protected $fillable = ['kode_wilayah', 'nama_wilayah'];

    public function customer()
    {
        return $this->hashMany(customer::class)->withTrashed();
    }
}
