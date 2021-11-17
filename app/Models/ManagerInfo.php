<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManagerInfo extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $table = 'manager_info';

    protected $fillable = [
        'name', 'phone', 'mobile', 'email',
        'whatsapp', 'instagram', 'telegram'
    ];
}
