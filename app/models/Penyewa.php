<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Description of penyewa
 *
 * @author KAWAN
 */
class Penyewa extends Eloquent {

    //put your code here
    protected $table = 'penyewa';
    public $timestamps = false;

    public function boking() {
        return $this->hasMany("App\\Models\\Boking");
    }

}
