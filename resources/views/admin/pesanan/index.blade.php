@extends('admin.layouts.layouts')

@section('content')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Pesanan</a></li>
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
            <div class="card-header">
                <div class="d-flex align-items-center">
                  <h4 class="card-title">Data Pesanan</h4>
                  <button class="btn btn-primary btn-round ms-auto">
                    <i class="fa fa-plus"></i>
                    <a href="{{ route('pesanan.create') }}" style="color: white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0"/>
                        </svg>
                        Tambah Pesanan
                    </a>
                  </button>
                </div>
              </div>
            {{-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable. Check for <a href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more examples</a>.</p> --}}

            <!-- Table with stripped rows -->
            <div class="table-responsive">
                <table class="table datatable">
                    <thead>
                      <tr>
                          <th class="w-10">No</th>
                          <th class="col-xl-1">Nama</th>
                          <th class="col-xl-1">No HP</th>
                          <th class="col-xl-1">Jumlah</th>
                          <th class="col-xl-1">Jenis Sablon</th>
                          <th class="col-xl-1">Jenis Kain</th>
                          <th class="col-xl-1">Harga</th>
                          <th class="col-xl-2">Deskripsi</th>
                          <th class="col-xl-1">Tanggal Pesanan</th>
                          <th class="col-xl-1">Deadline Penanan</th>
                          <th class="col-xl-1">Aksi</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                        <th class="w-10">No</th>
                        <th class="col-xl-1">Nama</th>
                        <th class="col-xl-1">No HP</th>
                        <th class="col-xl-1">Jumlah</th>
                        <th class="col-xl-1">Jenis Sablon</th>
                        <th class="col-xl-1">Jenis Kain</th>
                        <th class="col-xl-1">Harga</th>
                        <th class="col-xl-2">Deskripsi</th>
                        <th class="col-xl-1">Tanggal Pesanan</th>
                        <th class="col-xl-1">Deadline Penanan</th>
                        <th class="col-xl-1">Aksi</th>
                      </tr>
                  </tfoot>
                      <tbody>
                          @php
                          $no = 1;
                          @endphp
                          @foreach ($pesanans as $pesanan)
                          <tr>
                          <td class="w-10">{{ $no++ }}</td>
                          <td class="col-xl-1">{{ $pesanan->nama }}</td>
                          <td class="col-xl-1">{{ $pesanan->nomer }}</td>
                          <td class="col-xl-1">{{ $pesanan->jumlah }}</td>
                          <td class="col-xl-1">{{ $pesanan->jenis_sablon }}</td>
                          <td class="col-xl-1">{{ $pesanan->jenis_kain }}</td>
                          <td class="col-xl-1">{{ $pesanan->harga }}</td>
                          <td class="col-xl-2">{{ Str::limit($pesanan->deskripsi, 200, '...') }}</td>
                          <td class="col-xl-1">{{ $pesanan->tanggal_pesanan }}</td>
                          <td class="col-xl-1">{{ $pesanan->deadline_pesanan }}</td>
                          <td class="col-xl-1">
                              <div class="form-button-action">
                              <a href="{{ route('pesanan.edit', $pesanan->id)}}" class="btn btn-sm btn-icon text-info">
                                <span class="btn-inner">
                                    <svg class="icon-20" width="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" >
                                        <path d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M15.1655 4.60254L19.7315 9.16854" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                              </a>
                              <a href="{{ route('pesanan.view', $pesanan->id)}}" class="btn btn-sm btn-icon text-success">
                                <span class="btn-inner">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="currentColor" class="bi bi-info-square" viewBox="0 0 16 16">
                                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                      </svg>
                                </span>
                              </a>
                              <form action="{{ route('pesanan.destroy', $pesanan->id)}}" method="POST" onsubmit="return confirm('Apakah yakin akan dihapus?')">
                                  @csrf
                                  <button type="submit" class="btn btn-sm btn-icon text-danger" data-bs-toggle="tooltip" title="Delete User">
                                    <span class="btn-inner">
                                        <svg class="icon-20" width="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                            <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </button>
                              </form>
                              </div>
                          </td>
                          @endforeach
                      </tr>
                    </tbody>
                  </table>
            </div>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
