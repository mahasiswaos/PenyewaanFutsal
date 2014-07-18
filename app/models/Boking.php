<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;
class Boking extends Eloquent {
    //put your code here
    protected $table = 'boking';
    public $timestamps = false;
    
    public function lapangan() {
        return $this->belongsTo("App\\Models\\Lapangan");
    }
    public function penyewa() {
        return $this->belongsTo("App\\Models\\Penyewa");
    }
}
