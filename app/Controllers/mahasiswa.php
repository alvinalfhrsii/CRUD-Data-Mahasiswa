<?php

namespace App\Controllers;

class mahasiswa extends BaseController
{
    protected $mahasiswaModel; // agar variabel dapat di pakai di fungsi lain

    public function __construct()
    {
        $this->mahasiswaModel = new \App\Models\MahasiswaModel();
    }


    public function index()   //  halaman home
    {
        return view('mahasiswa/index');
    }


    public function mhs()  // halaman menampilkan data dari database
    {
        $mahasiswa = $this->mahasiswaModel->findAll();

        $data = [
            'mahasiswa' => $mahasiswa
        ];

        return view('mahasiswa/mhs', $data);
    }


    public function create()  // halaman create
    {
        return view('mahasiswa/create');
    }


    public function save()  // fungsi save
    {
        $this->mahasiswaModel->save([
            'nama' => $this->request->getPost('nama'),
            'nim' => $this->request->getPost('nim'),
            'prodi' => $this->request->getPost('prodi')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');

        return redirect()->to('/mahasiswa');
    }

    public function delete($id)
    {
        $this->mahasiswaModel->delete($id);
        return redirect()->to('/mahasiswa');
    }

    public function edit($id)
    {
        $mahasiswa = $this->mahasiswaModel->find($id);

        $data = [
            'mahasiswa' => $mahasiswa
        ];

        return view('mahasiswa/edit', $data);
    }

    public function update($id)
    {
        $this->mahasiswaModel->update($id, [
            'nama' => $this->request->getPost('nama'),
            'nim' => $this->request->getPost('nim'),
            'prodi' => $this->request->getPost('prodi')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diperbarui.');

        return redirect()->to('/mahasiswa');
    }
}
