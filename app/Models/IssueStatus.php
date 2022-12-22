<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IssueStatus extends Model
{
    use HasFactory;

    /**
     * @var string $table
     */
    protected $table = 'issue_status';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'name',
        'description',
        'created_by_user',
        'assigned_to_user'
    ];
}
