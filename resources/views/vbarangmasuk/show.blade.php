
@extends('layout.adm-main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
               <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td>Tangal Masuk</td>
                                <td>{{ $rsetBarangMasuk->tgl_masuk }}</td>
                            </tr>
                            <tr>
                                <td>QTY Masuk</td>
                                <td>{{ $rsetBarangMasuk->qty_masuk }}</td>
                            </tr>
                            <tr>
                                <td>Barang ID</td>
                                <td>{{ $rsetBarangMasuk->barang_id }}</td>
                            </tr>
                        </table>
                    </div>
               </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12  text-center">

                <a href="{{ route('barangmasuk.index') }}" class="btn btn-md btn-primary mb-3">Back</a>
            </div>
        </div>
    </div>
@endsection
