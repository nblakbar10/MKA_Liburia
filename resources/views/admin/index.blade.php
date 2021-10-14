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
                                    Nama
                                    <br>
                                    <input type="text" placeholder="Nama Admin . . . ">
                                </div>
                                <br>
                                <div class="input">
                                    Daerah <br>
                                    <input type="password" placeholder="Daerah Admin ">
                                </div>
                                <br>
                                <div class="input">
                                    Email <br>
                                    <input type="password" placeholder="Email ">
                                </div>
                                <br>
                                <div class="input">
                                    No. Telepon <br>
                                    <input type="password" placeholder="Nomor telepon admin">
                                </div>
                                <br>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
                    <th>Nama</th>
                    <th>Hak Akses</th>
                    <th>Email</th>
                    <th>No.Telepon</th>
                    <th>Status</th>
                    <th style="width: 95px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Update software</td>
                    <td>Cron job running</td>
                    <td>Cron job running</td>
                    <td>Cron job running</td>
                    <td>Cron job running</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i> </a>
                        <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> </a>
                    </td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Clean database</td>
                    <td>Cron job running</td>
                    <td>Cron job running</td>
                    <td>Cron job running</td>
                    <td>Cron job running</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i> </a>
                        <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> </a>
                    </td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Cron job running</td>
                    <td>Cron job running</td>
                    <td>Cron job running</td>
                    <td>Cron job running</td>
                    <td>Cron job running</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i> </a>
                        <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> </a>
                    </td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Fix and squish bugs</td>
                    <td>Fix and squish bugs</td>
                    <td>Fix and squish bugs</td>
                    <td>Fix and squish bugs</td>
                    <td>Fix and squish bugs</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i> </a>
                        <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> </a>
                    </td>
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