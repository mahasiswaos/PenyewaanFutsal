<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Boking;
use App\Models\Lapangan;
use App\Models\Penyewa;
use View;
use Redirect;
use Input;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BokingController
 *
 * @author KAWAN
 */
class BokingController extends BaseController {
    //put your code here
    public function tampil() {
        $tampil = Boking::all();
        $data = array(
            'boking' => $tampil,
        );
//        echo '<pre>';
//        print_r($data);
//        echo '</pre>';
        return View::make('boking.view', $data);
    }

    public function tambah() {
        $lap = Lapangan::all();
        $penyewa = Penyewa::all();
        $data = [
            'isi_lap'=>$lap,
            'isi_penyewa'=>$penyewa,
        ];
        return View::make('boking.add',$data);
    }

    public function tambahProses() {
        $add = Input::all();
        $proses = new Boking();
        $proses->tanggal = $add['tanggal'];
        $proses->waktu = $add['waktu'];
        $proses->lama_main = $add['lama_main'];
        $proses->harga = $add['harga'];
        $proses->lapangan_id = $add['lapangan_id'];
        $proses->penyewa_id = $add['penyewa_id'];
        $proses->save();

        return Redirect::to('/boking');
    }

    public function ubah($id) {
        $edit = Boking::find($id);
        $data = array(
            'isi' => $edit,
        );

        return View::make('boking.edit', $data);
    }
    
    public function ubahProses($id) {
        $update = Input::all();
        $ket = Boking::find($id);
        $ket->waktu = $update['waktu'];
        $ket->lama_main = $update['lama_main'];
        $ket->harga = $update['harga'];
        $ket->update();
        
        return Redirect::to('/boking');   
    }

    public function hapus($id) {
        $hapus = Boking::find($id);
        $hapus->delete();
        return Redirect::to('/boking');
    }

}
