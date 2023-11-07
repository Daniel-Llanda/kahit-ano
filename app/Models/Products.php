<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function saveProducts($data) {
        return $this->create($data);
    }
    // public function getProducts() {
    //     return $this->all();
    // }
}
