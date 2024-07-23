<?php

namespace App\Http\Controllers;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    //
    public function index()
    {
        $pesanans = Pesanan::all();
        return view('admin.pesanan.index', compact('pesanans'));
    }

    // Operasi link ke index pesanan (admin)
    public function create()
    {
        // Kirim data pesanan ke pesanan.index
        return view('admin.pesanan.create');

    }

    // Fungsi Indek
    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required',
            'nomer' => 'required',
            'jumlah' => 'required',
            'jenis_sablon' => 'required',
            'jenis_kain' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'tanggal_pesanan' => 'required|date',
            'deadline_pesanan' => 'required|date',
        ];

        $messages = [
            'nama.required' => 'Nama wajib diisi!',
            'nomer.required' => 'Nomer wajib diisi!',
            'jumlah.required' => 'Jumlah wajib diisi!',
            'jenis_sablon.required' => 'Jenis sablon wajib diisi!',
            'jenis_kain.required' => 'Jenis kain wajib diisi!',
            'harga.required' => 'Harga wajib diisi!',
            'deskripsi.required' => 'Deskripsi wajib diisi!',
            'tanggal_pesanan.required' => 'Tanggal pesanan wajib diisi!',
            'tanggal_pesanan.date' => 'Tanggal pesanan harus berupa tanggal!',
            'deadline_pesanan.required' => 'Deadline pesanan wajib diisi!',
            'deadline_pesanan.date' => 'Deadline pesanan harus berupa tanggal!',
        ];

        $this->validate($request, $rules, $messages);

         // Jika validasi berhasil, buat entri baru dalam tabel 'pesanan'
    Pesanan::create([
        'nama' => $request->nama,
        'nomer' => $request->nomer,
        'jumlah' => $request->jumlah,
        'jenis_sablon' => $request->jenis_sablon,
        'jenis_kain' => $request->jenis_kain,
        'harga' => $request->harga,
        'deskripsi' => $request->deskripsi,
        'tanggal_pesanan' => $request->tanggal_pesanan,
        'deadline_pesanan' => $request->deadline_pesanan,
    ]);

    // Redirect kembali ke halaman '/pesanan' dengan pesan sukses
    return redirect('/pesanan')->with('success', 'Data berhasil disimpan');
}

    // halaman Edit
    public function edit($id)
    {
        $pesanan = Pesanan::find($id);
        return view('admin.pesanan.edit',[
            'pesanan' => $pesanan
        ]
    );
    }

    // Operasi link ke index pesanan (admin)
    public function update(Request $request,$id)
    {
        $pesanan = Pesanan::find($id);

        $rules = [
            'nama' => 'required',
            'nomer' => 'required',
            'jumlah' => 'required',
            'jenis_sablon' => 'required',
            'jenis_kain' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'tanggal_pesanan' => 'required|date',
            'deadline_pesanan' => 'required|date',
        ];

        $messages = [
            'nama.required' => 'Nama wajib diisi!',
            'nomer.required' => 'Nomer wajib diisi!',
            'jumlah.required' => 'Jumlah wajib diisi!',
            'jenis_sablon.required' => 'Jenis sablon wajib diisi!',
            'jenis_kain.required' => 'Jenis kain wajib diisi!',
            'harga.required' => 'Harga wajib diisi!',
            'deskripsi.required' => 'Deskripsi wajib diisi!',
            'tanggal_pesanan.required' => 'Tanggal pesanan wajib diisi!',
            'tanggal_pesanan.date' => 'Tanggal pesanan harus berupa tanggal!',
            'deadline_pesanan.required' => 'Deadline pesanan wajib diisi!',
            'deadline_pesanan.date' => 'Deadline pesanan harus berupa tanggal!',
        ];

        $this->validate($request, $rules, $messages);

        $pesanan->update([
            'nama' => $request->nama,
            'nomer' => $request->nomer,
            'jumlah' => $request->jumlah,
            'jenis_sablon' => $request->jenis_sablon,
            'jenis_kain' => $request->jenis_kain,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'tanggal_pesanan' => $request->tanggal_pesanan,
            'deadline_pesanan' => $request->deadline_pesanan,
        ]);


        return redirect('/pesanan')->with('success', 'Data berhasil diperbarui');
    }

    // halaman view
    public function view($id)
    {
        $pesanan = Pesanan::find($id);
        return view('admin.pesanan.view', [
            'pesanan' => $pesanan
        ]);
    }

    // Fungsi Delete
    public function destroy($id)
    {
        $pesanans = Pesanan::find($id);

        $pesanans->delete();

        return redirect('/pesanan')->with('success', 'data berhasil di hapus');
    }


    // Pesanan By WA
    public function storeWA(Request $request)
    {
        $rules = [
            'nama' => 'required',
            'nomer' => 'required',
            'jumlah' => 'required',
            'jenis_sablon' => 'required',
            'jenis_kain' => 'required',
            'deskripsi' => 'required',
            'deadline_pesanan' => 'required|date',
        ];

        $validatedData = $request->validate($rules);

        // Simpan data pemesanan ke database
        Pesanan::create($validatedData);

        // Redirect atau response jika diperlukan

        // Kemudian redirect atau response ke halaman atau link WhatsApp sesuai kebutuhan

        // Contoh redirect:
        return redirect()->to('https://api.whatsapp.com/send?phone=6285789173041&text=' .
            urlencode('Halo Schizo, saya mau pesan kaos dengan detail pemesanan :') . '%0A' .
            urlencode('Nama: ' . $validatedData['nama']) . '%0A' .
            urlencode('Nomor: ' . $validatedData['nomer']) . '%0A' .
            urlencode('Jumlah: ' . $validatedData['jumlah']) . '%0A' .
            urlencode('Jenis Sablon: ' . $validatedData['jenis_sablon']) . '%0A' .
            urlencode('Jenis Kain: ' . $validatedData['jenis_kain']) . '%0A' .
            urlencode('Deskripsi: ' . $validatedData['deskripsi']) . '%0A' .
            urlencode('Deadline Pesanan: ' . $validatedData['deadline_pesanan']) . '%0A' .
            urlencode('Mohon dibantu untuk pesanannya ya min, terimakasih.')
        );


        // Atau, jika menggunakan JavaScript untuk membuka link WhatsApp:
        // return response()->json(['redirect' => 'https://api.whatsapp.com/...']);

    }
}
