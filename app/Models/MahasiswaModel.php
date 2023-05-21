<?php namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table ='mhs';
    protected $allowedFields =['nama', 'nim','prodi'];
}