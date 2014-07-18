<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Description of Lapangan
 *
 * @author KAWAN
 */
class Lapangan extends Eloquent {

    //put your code here
    protected $table = 'lapangan';
    public $timestamps = false;

    public function boking() {
        return $this->hasMany("App\\Models\\Boking");
    }

}
