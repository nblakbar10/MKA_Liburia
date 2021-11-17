@extends('../layouts/dashboard')

<!-- Konten -->
@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">List Artikel</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="col-sm-12 col-md-6">
            <div id="example1_filter" class="dataTables_filter">
                <i class="bi bi-search"></i>
                <label>
                    <input type="search" class="form-control form-control-sm" placeholder="Cari nama artikel . . ." aria-controls="example1">
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
                                    <label for="">Nama Artikel</label>
                                    <br>
                                    <input type="text" placeholder="Nama Artikel . . . ">
                                </div>
                                <br>
                                <div class="input">
                                    <label for="">Alamat Artikel</label> <br>
                                    <br>
                                    <input type="text" placeholder="Alamat Artikel . . . ">
                                </div>
                                <br>
                                <div class="input">
                                    <label for=""> Kamar</label><br>
                                    <input type="text" placeholder="Jenis Kamar . . . ">
                                </div>
                                <br>
                            </div>
                            <br>
                                <div class="input">
                                    <label for=""> Foto/Video</label><br>
                                    <input type="text" placeholder="Foto/Video . . . ">
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
                    <th>Judul Artikel</th>
                    <th>Foto/Video Artikel</th>
                    <th>Isi Artikel</th>
                    <th style="width: 100px;">Aksi</th>

                </tr>
            </thead>
            <tbody>
            @foreach ($artikel as $at)
                <tr>
                    <td>{{$at->id}}</td>
                    <td>{{$at->judul}}</td>
                    <td>{{$at->foto}}</td>
                    <td>{{$at->isi}}</td>
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