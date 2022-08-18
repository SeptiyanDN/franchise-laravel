@extends('layouts.master')
@section('title')
Management Pemilik
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
                    <table class="table table-striped table-bordered table-hover dataTables" >
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Pemilik</th>
                                <th>Email Pemilik</th>
                                <th>Nomor Handphone</th>
                                <th>Status Verifikasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pemilikbisnis as $pemilik )
                                
                            <tr>
                                {{-- looping td No menjadi increment 1+1 --}}
                                <td>{{ $loop->iteration }}</td>
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
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@push('scripts')
 <!-- Page-Level Scripts -->
 <script>

    // Upgrade button class name
    $.fn.dataTable.Buttons.defaults.dom.button.className = 'btn btn-white btn-sm';

    $(document).ready(function(){
        $('.dataTables').DataTable({
            pageLength: 10,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                { extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'Data Pemilik'},
                {extend: 'pdf', title: 'Data Pemilik'},

                {extend: 'print',
                 customize: function (win){
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                }
                }
            ]
        });
    });

</script>
@endpush