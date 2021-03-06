<?php
    namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model{
    protected $table = 'employees';

   public $timestamps = false;

    protected $fillable = [
        'name',
        'company_id',
        'id_card_number',
        'avatar',
        'position'
    ];
}
?>
