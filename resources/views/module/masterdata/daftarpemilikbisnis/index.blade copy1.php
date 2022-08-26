@extends('layouts.master')
@section('title')
Management Pemilik Bisnis
@endsection

@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Manage Daftar Pemilik Bisnis</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="table-responsive">
                    <form method="GET">
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label btn btn-primary" >
                                Cari Data
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="cari" id="cari" class="form-control" placeholder="Cari Data Berdasarkan Nama Pemilik" autofocus="true" value="{{$cari}}" >
                            </div>
                        </div>
                    </form>
                    <table class="table table-striped table-bordered table-hover dataTables" >
                        <thead>
                            <tr>
                                <th style="width: 5%">No.</th>
                                <th style="width: 10%;">@sortablelink('nomor_pemilik_bisnis', 'ID Pemilik')</th>
                                <th>@sortablelink('nama_lengkap','Nama Pemilik')</th>
                                <th>@sortablelink('alamat','Alamat')</th>
                                <th>Handphone</th>
                                <th style="width: 13%">@sortablelink('status_verifikasi','Status Verifikasi')</th>
                                <th style="width: 10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $nomor = 1 + (($pemilikbisnis -> currentPage() - 1) * $pemilikbisnis -> perPage());
                            @endphp
                            @foreach ($pemilikbisnis as $pemilik )

                            <tr>
                                {{-- looping td No menjadi increment 1+1 --}}
                                <td>{{ $nomor++}}</td>
                                <td>{{$pemilik->nomor_pemilik_bisnis}}
                                <td>{{$pemilik->nama_lengkap}}</td>
                                </td>
                                <td>{{$pemilik->alamat}}</td>
                                <td class="center">{{$pemilik->nomor_telepon }}</td>
                                @if ($pemilik->status_verifikasi == 'Belum diverifikasi')
                                <td class="center">
                                    <span><a href="#" class="badge badge-danger">{{$pemilik->status_verifikasi}}</a></span>
                                </td>
                                @else
                                <td class="center">
                                    <span><a href="#" class="badge badge-success">{{$pemilik->status_verifikasi}}</a></span>
                                </td>
                                @endif
                                <td>
                                    <span><a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a></span>
                                    <span><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a></span>
                                    <span><a href="#" class="btn btn-success btn-xs"><i class="fa fa-eye"></i></a></span>
                                </td>
                            </tr>
                            @endforeach

                        </tfoot>
                    </table>
                    {{-- {{$pemilikbisnis -> links()}} --}}
                    {!! $pemilikbisnis->appends(Request::except('page'))->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@push('scripts')
 
@endpush
