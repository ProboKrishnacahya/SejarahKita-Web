<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogApps extends Model
{
    use HasFactory;

    protected $table = "sej12_logs";

    protected $primaryKey = 'id_log';

    protected $fillable = [
        'id_user',
        'log_table',
        'log_path',
        'log_desc',
        'log_ip'
    ];

    public function students(){
        return $this->belongsTo(Student::class, 'id_user', 'id');
    }
}
