<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Kegiatan
 *
 * @author KAWAN
 */
class Kegiatan extends Eloquent{
    protected $table ='kegiatan';
    public function users (){
        return $this->belongsTo('App\\Models\\User');
    }
}
