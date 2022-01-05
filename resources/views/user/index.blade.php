@extends('../layouts/dashboard')

<!-- Konten -->
@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">List User</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="col-sm-12 col-md-6">
            <div id="example1_filter" class="dataTables_filter">
                <i class="bi bi-search"></i>
                <label>
                    <input type="search" class="form-control form-control-sm" placeholder="Cari nama user . . ." aria-controls="example1">
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
                                    <input type="text" placeholder="Username Admin . . . ">
                                </div>
                                <br>
                                <div class="input">
                                    <label for="">Nama Lengkap</label>
                                    <br>
                                    <input type="text" placeholder="Nama Lengkap . . . ">
                                </div>
                                <br>
                                <br>
                                <div class="input">
                                    <label for=""> Email </label><br>
                                    <input type="text" placeholder="Email ">
                                </div>
                                <br>
                                <div class="input">
                                    <label for=""> No. Telepon </label><br>
                                    <input type="number" placeholder="Nomor telepon admin">
                                </div>
                                <!-- <br>
                                <div class="input">
                                    <label for=""> Status </label><br>
                                    <input type="text" placeholder="Status admin">
                                </div>
                                <br>
                                <div class="input">
                                    <label for=""> Rencana Liburan </label><br>
                                    <input type="text" placeholder="Rencana Liburan">
                                </div> -->
                                <!-- <br>
                                <div class="input">
                                    <label for=""> Pemesanan </label><br>
                                    <input type="text" placeholder="Pemesanan">
                                </div> -->
                                <br>
                                <div class="input">
                                    <label for=""> Foto </label><br>
                                    <input type="text" placeholder="Foto">
                                </div>
                                <!-- <br>
                                <div class="input">
                                    <label for=""> Ulasan</label><br>
                                    <input type="text" placeholder="Ulasan">
                                </div> -->
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
                    <th style="width: 10px">ID</th>
                    <th>Username</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>No.Telepon</th>
                    <th>Rencana Liburan</th>
                    <th>Pemesanan</th>
                    <th>Foto/Video</th>
                    <th>Ulasan</th>
                    <!-- <th style="width: 95px">Aksi</th> -->
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $us)
                <tr>
                    <td>{{$us->id}}</td>
                    <td>{{$us->username}}</td>
                    <td>{{$us->fullname}}</td>
                    <td>{{$us->email}}</td>
                    <td>{{$us->phone}}</td>
                    <td>{{$us->photo}}</td>
                    <td></td>
                    <td>
                        <!-- Button trigger modal -->
                        <button style="width:95px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                            <i class="bi bi-file-earmark-text"></i>
                            Detail
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModal1Label">Rencana Liburan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <!-- body -->
                                    <div class="modal-body">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>

                    <td>
                        <!-- Button trigger modal -->
                        <button style="width:95px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                            <i class="bi bi-file-earmark-text"></i>
                            Detail
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModal1Label">Rencana Liburan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <!-- body -->
                                    <div class="modal-body">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>

                    <td>{{$us->photo}}</td>
                    <td></td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</tr>
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