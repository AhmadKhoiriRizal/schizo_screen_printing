@extends('admin.layouts.layouts')

@section('content')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/pesanan/create">pesanan</a></li>
        {{-- <li class="breadcrumb-item active"></li> --}}
      </ol>
    </nav>
</div><!-- End Page Title -->
  <section class="section conatiner-fluid content-inner mt-n5 py-0">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Pesanan</h5>
            {{-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable. Check for <a href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more examples</a>.</p> --}}

            <!-- Table with stripped rows -->
            <div class="table-responsive">

            <form action="{{ route('pesanan.update', $pesanan->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <label for="">Masukkan nama pembeli</label>
                    <input type="text" class="form-control mb-2 @error('nama') is-invalid @enderror" value="{{ old('nama', $pesanan->nama) }}" id="nama" name="nama" placeholder="Masukkan nama pembeli">
                    @error('nama')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror

                    <label for="">Masukkan No HP pembeli</label>
                    <input type="number" class="form-control mb-2 @error('nomer') is-invalid @enderror" value="{{ old('nomor', $pesanan->nomor) }}" id="nomer" name="nomer" placeholder="Masukkan nomer hp pembeli">
                    @error('nomer')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror

                    <label for="">Masukkan jumlah pesanan</label>
                    <input type="text" class="form-control mb-2 @error('jumlah') is-invalid @enderror" value="{{ old('jumlah', $pesanan->jumlah) }}" id="jumlah" name="jumlah" placeholder="Masukkan jumlah pembelian">
                    @error('jumlah')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror

                    <label for="">Masukkan jenis sablon</label>
                    <input type="text" class="form-control mb-2 @error('jenis_sablon') is-invalid @enderror" value="{{ old('jenis_sablon', $pesanan->jenis_sablon) }}" id="jenis_sablon" name="jenis_sablon" placeholder="Masukkan jenis sablon">
                    @error('jenis_sablon')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror

                    <label for="">Masukkan jenis kain</label>
                    <input type="text" class="form-control mb-2 @error('jenis_kain') is-invalid @enderror" value="{{ old('jenis_kain', $pesanan->jenis_kain) }}" id="jenis_kain" name="jenis_kain" placeholder="Masukkan jenis kain">
                    @error('jenis_kain')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror

                    <label for="">Masukkan total harga pesanan</label>
                    <input type="number" class="form-control mb-2 @error('harga') is-invalid @enderror" value="{{ old('harga', $pesanan->harga) }}" id="harga" name="harga" placeholder="Masukkan total harga pembelian">
                    @error('harga')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror

                    <label for="">Masukkan deskripsi pesanan</label>
                    <textarea class="form-control" rows="3" name="deskripsi" id="summernote" placeholder="Masukkan Description">{{ old('deskripsi', $pesanan->deskripsi) }}</textarea>
                    @error('deskripsi')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror

                    <label for="">Masukkan tanggal pesanan</label>
                    <input type="date" class="form-control mb-2 @error('tanggal_pesanan') is-invalid @enderror" value="{{ old('tanggal_pesanan', $pesanan->tanggal_pesanan) }}" id="tanggal_pesanan" name="tanggal_pesanan" placeholder="Masukkan tanggal pemesanan">
                    @error('tanggal_pesanan')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror

                    <label for="">Masukkan deadline pesanan</label>
                    <input type="date" class="form-control mb-2 @error('deadline_pesanan') is-invalid @enderror" value="{{ old('deadline_pesanan', $pesanan->deadline_pesanan) }}" id="deadline_pesanan" name="deadline_pesanan" placeholder="Masukkan tanggal deadline">
                    @error('deadline_pesanan')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror

                </div>
                <div class="text-start mt-2">
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">perbarui</button>
                    <a href="" type="button" class="btn btn-danger">kembali</a>
                </div>
            </form>

            </div>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
