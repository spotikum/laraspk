<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    protected $fillable = ['nomor_induk', 'nama', 'fisika', 'kimia', 'matematika', 'biologi', 'geografi', 'sosiologi', 'antropologi', 'ekonomi'];
}
