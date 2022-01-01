<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'sej12_roles';

    protected $primaryKey = 'id_role';

    protected $fillable = [
        'id_student',
        'role',
        'is_login',
        'is_active'
    ];

    public function students()
    {
        return $this->belongsTo(Student::class, 'id_student', 'id');
    }
}
