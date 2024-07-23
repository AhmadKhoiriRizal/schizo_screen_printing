@extends('admin.layouts.layouts')

@section('content')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/produk/create">Produk</a></li>
        {{-- <li class="breadcrumb-item active"></li> --}}
      </ol>
    </nav>
</div><!-- End Page Title -->
  <section class="section conatiner-fluid content-inner mt-n5 py-0">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Produk</h5>
            {{-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable. Check for <a href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more examples</a>.</p> --}}

            <!-- Table with stripped rows -->
            <div class="table-responsive">
            <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="container col-xl-11">
                <div class="form-group mb-2">
                  <label for="">Masukkan kategori produk</label>
                  <input type="text" class="form-control @error('kategori') is-invalid @enderror" name="kategori" value="{{ old('kategori') }}" placeholder="Masukkan kategori produk"/>

                  @error('kategori')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="form-group mb-2">
                  <label for="">Pilih Foto produk</label>
                  <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" required>

                  @error('image')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                </div>
                  <div class="card-action">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/produk" class="btn btn-danger">Kembali</a>
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
