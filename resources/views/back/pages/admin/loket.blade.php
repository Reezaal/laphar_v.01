@extends('back.layouts.form-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'LAPHAR | LOKET')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Table Laporan Harian Loket</h3>
                            <div class="add" style="margin-left: 52rem; margin-top: -5px">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModalCenter"
                                    style="background-color: #24afc1; color: #252525; border-radius: 6px">
                                    Tambah Data
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">Laporan
                                                    Loket</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="row">
                                                        <!-- Date -->
                                                        <label>Tanggal:</label>
                                                        <div class="input-group date" id="reservationdate"
                                                            data-target-input="nearest">
                                                            <input type="text" class="form-control datetimepicker-input"
                                                                data-target="#reservationdate" placeholder="mm/dd/yy" />
                                                            <div class="input-group-append" data-target="#reservationdate"
                                                                data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i class="fa fa-calendar"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label>Migrasi</label>
                                                        <!-- text input -->
                                                        <div class="input-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Masukkan ...">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label>Multiguna</label>
                                                        <!-- text input -->
                                                        <div class="input-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Masukkan ...">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label>PB</label>
                                                        <!-- text input -->
                                                        <div class="input-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Masukkan ...">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label>PD</label>
                                                        <!-- text input -->
                                                        <div class="input-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Masukkan ...">
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Batal</button>
                                                <button type="button" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Migrasi</th>
                                        <th>Multiguna</th>
                                        <th>PB</th>
                                        <th>PD</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($lokets as $loket)
                                        <tr>
                                            <td>{{ $loket->tanggal }}</td>
                                            <td>{{ $loket->migrasi }}</td>
                                            <td>{{ $loket->multiguna }}</td>
                                            <td>{{ $loket->PB }} </td>
                                            <td>{{ $loket->PD }} </td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger">
                                            Data Loket belum Tersedia.
                                        </div>
                                    @endforelse
                                    {{-- <tr>
                                        <th>11/26/2023</th>
                                        <th>3</th>
                                        <th>4</th>
                                        <th>8</th>
                                        <th>1</th>
                                    </tr> --}}
                                </tbody>
                                {{-- <tbody>
                                    <tr>
                                        <th>11/27/2023</th>
                                        <th>5</th>
                                        <th>3</th>
                                        <th>6</th>
                                        <th>7</th>
                                    </tr>
                                </tbody> --}}
                                <tfoot>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Migrasi</th>
                                        <th>Multiguna</th>
                                        <th>PB</th>
                                        <th>PD</th>
                                    </tr>
                                </tfoot>
                            </table>
                            {{ $lokets->links() }}
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
