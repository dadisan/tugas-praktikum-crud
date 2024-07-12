<?php

namespace App\Models;

use CodeIgniter\Model;

class RentalModel extends Model
{
    protected $table = 'rental';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'address', 'bundle', 'price'];
}
