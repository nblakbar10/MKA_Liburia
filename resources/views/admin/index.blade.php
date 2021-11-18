@extends('../layouts/dashboard')

<!-- Konten -->
@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">List Admin</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="col-sm-12 col-md-6">
            <div id="example1_filter" class="dataTables_filter">
                <i class="bi bi-search"></i>
                <label>
                    <input type="search" class="form-control form-control-sm" placeholder="Cari nama admin . . ." aria-controls="example1">
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
                                    <label for="">Nama</label>
                                    <br>
                                    <input type="text" placeholder="Nama Admin . . . ">
                                </div>
                                <br>
                                <div class="input">
                                    <label for=""> Daerah</label> <br>
                                    <select name="" placeholder="Daerah Admin " autofocus>
                                        <option value="">- Pilih -</option>
                                    </select>
                                </div>
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
                    <th style="width: 10px">#</th>
                    <th>Nama Lengkap</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>No.Telepon</th>
                    <th>Foto</th>
                    <th style="width: 95px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($admins as $adm)
                <tr>
                    <td>{{$adm->id}}</td>
                    <td>{{$adm->fullname}}</td>
                    <td>{{$adm->username}}</td>
                    <td>{{$adm->email}}</td>
                    <td>{{$adm->phone}}</td>
                    <td>{{$adm->photo}}</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i> </a>
                        <form action="" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
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