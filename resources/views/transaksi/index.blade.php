@extends('../layouts/dashboard')

<!-- Konten -->
@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">List Transaksi</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="col-sm-12 col-md-6">
            <div id="example1_filter" class="dataTables_filter">
                <i class="bi bi-search"></i>
                <label>
                    <input type="search" class="form-control form-control-sm" placeholder="Cari transaksi . . ." aria-controls="example1">
                </label>
            </div>
        </div>

        <div class="row">
            <div class="tambah col ">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-plus"></i> Tambah
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <!-- body -->
                            <div class="modal-body">
                                <div class="input">
                                    <label for="">Username</label>
                                    <br>
                                    <input type="text" placeholder="Username . . . ">
                                </div>
                                <br>
                                <div class="input">
                                    <label for="">Nama User</label> <br>
                                    <input type="text" placeholder="Nama User . . . ">
                                </div>
                                <br>
                                <div class="input">
                                    <label for="">No.Telp</label><br>
                                    <input type="text" placeholder="total harga . . . ">
                                </div>
                                <br>
                                <div class="input">
                                    <label for="">ID Transaksi</label><br>
                                    <input type="text" placeholder="ID Transaksi . . . ">
                                </div>
                                <br>
                                <div class="input">
                                    <label for="">Detail Transaksi</label><br>
                                    <input type="text" placeholder="Detail Transaksi . . . ">
                                </div>
                                <br>
                                <div class="input">
                                    <label for="">Jumlah Transaksi</label><br>
                                    <input type="text" placeholder="Jumlah Transaksi . . . ">
                                </div>
                                <br>
                            </div>
                            <br>
                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">No</th>
                    <th>Username</th>
                    <th>No.Telp User</th>
                    <th>Nama Tempat Wisata</th>
                    <th>Tanggal Pesan</th>
                    <th>Jumlah Pesan</th>
                    <th>Total Harga</th>
                    <th>Bukti Pembayaran</th>
                    <th>Verify Status</th>
                    <th style="width: 100px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaksis as $trs)
                <tr>
                    <td>{{$trs->id}}</td>
                    <td>{{$trs->username_pemesan}}</td>
                    <td>{{$trs->phone_pemesan}}</td>
                    <td>{{$trs->nama_tempat_wisata}}</td>
                    <td>{{$trs->tanggal_pesan}}</td>
                    <td>{{$trs->jumlah_pesan}}</td>
                    <td>{{$trs->total_harga}}</td>
                    <td>{{$trs->bukti_pembayaran}}</td>
                    <td>{{$trs->verify_status}}</td>
                    <td>
                        

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">«</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">»</a></li>
        </ul>
    </div>
</div>

@endsection