<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::all();
        return view('admin.produk.index', compact('produks'));
    }

    // Operasi link ke index produk (admin)
    public function create()
    {
        // Kirim data produk ke produk.index
        return view('admin.produk.create');

    }

    // Fungsi Indek
    public function store(Request $request)
    {
        $rules = [
            'kategori' => 'required',
            'image' => 'required|max:10000|mimes:jpg,jpeg,png,webp',
        ];

        $messages = [
            'kategori.required' => 'kategori wajib diisi!',
            'image.required' => 'required|max:10000|mimes:jpg,jpeg,png,webp',
        ];

        $this->validate($request, $rules, $messages);

         // Menyimpan gambar dengan nama file unik
         if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/produk', $fileName);

            Produk::create([
                'kategori' => $request->kategori,
                'image' => $fileName,
            ]);

            return redirect('/produk')->with('success', 'Data berhasil disimpan');
        } else {
            return back()->with('error', 'Gagal mengupload gambar.');
        }
    }

    // halaman Edit
    public function edit($id)
    {
        $produk = Produk::find($id);
        return view('admin.produk.edit',[
            'produk' => $produk
        ]
    );
    }

    // Operasi link ke index produk (admin)
    public function update(Request $request,$id)
    {
        $produk = Produk::find($id);

        # Jika ada image baru
        if ($request->hasFile('image')) {
            $fileCheck = 'required|max:10000|mimes:jpg,jpeg,png,webp';
        } else {
            $fileCheck = '';
        }

        $rules = [
            'kategori' => 'required',
            'image' => $fileCheck,
        ];

        $messages = [
            'kategori.required' => 'kategori wajib diisi!',
            'image.required' => 'required|max:10000|mimes:jpg,jpeg,png,webp',
        ];

        $this->validate($request, $rules, $messages);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if (\File::exists('storage/produk/' . $produk->image)) {
                \File::delete('storage/produk/' . $produk->image);
            }
            // Simpan gambar baru
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/produk', $fileName);
        } else {
            $fileName = $produk->image; // Tetap gunakan gambar lama jika tidak ada gambar baru diunggah
        }

        $produk->update([
            'kategori' => $request->kategori,
            'image' => $fileName,
        ]);

        return redirect('/produk')->with('success', 'Data berhasil diperbarui');
    }

    // halaman view
    public function view($id)
    {
        $produk = Produk::find($id);
        return view('admin.produk.view', [
            'produk' => $produk
        ]);
    }

    // Fungsi Delete
    public function destroy($id)
    {
        $produks = Produk::find($id);
        if (\File::exists('storage/produk/' . $produks->image)) {
            \File::delete('storage/produk/' . $produks->image);
        }

        $produks->delete();

        return redirect('/produk')->with('success', 'data berhasil di hapus');
    }
}
