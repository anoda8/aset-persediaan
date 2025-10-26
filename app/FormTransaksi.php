<?php

namespace App;

use Livewire\Attributes\Title;
use Livewire\Component;

class FormTransaksi extends Component
{
    #[Title('Form Transaksi')]

    public $tanggal, $nama_penerima, $keperluan;

    public function mount(){
        $this->tanggal = date('Y-m-d');
        session([
            'tanggal' => null,
            'nama_penerima' => null,
            'keperluan' => null,
        ]);
    }

    public function render()
    {
        return view('form-transaksi');
    }


    public function lanjut()
    {
        $this->validate([
            'tanggal' => 'required|date',
            'nama_penerima' => 'required|string|max:255',
            'keperluan' => 'required|string|max:500',
        ]);

        //simpan tanggal, nama_penerima, keperluan ke session
        session([
            'tanggal' => $this->tanggal,
            'nama_penerima' => $this->nama_penerima,
            'keperluan' => $this->keperluan,
        ]);

        return redirect()->route('form-input-barang');
    }
}
