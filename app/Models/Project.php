<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'tech_stack',
        'link',
        'image', // jika ada upload gambar
    ];
}
