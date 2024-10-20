<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Project extends Model
{
    use HasFactory;
    use Sortable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'project';
    protected $fillable = [
        'task',
        'company',
        'location',
        'comodity',
        'month',
        'years'
    ];
    public $sortable = [
        'task',
        'company',
        'location',
        'comodity',
        'month',
        'years'
    ];
}
