<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;

    /**
     * @var string $table
     */
    protected $table = 'issues';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'name',
        'created_by_user',
        'assigned_to_user'
    ];
}
