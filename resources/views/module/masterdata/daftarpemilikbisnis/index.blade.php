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
                    <table class="table table-striped table-bordered table-hover" id="datatables1">
                        <thead>
                        <tr>
                            <th stye="width: 80%">ID Pemilik</th>
                            <th>Nama Lengkap</th>
                            <th>Alamat</th>
                            <th>Handphone</th>
                            <th>Status Verifikasi</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@push('scripts')

<script type="text/javascript">
          $(function(){
            $('#datatables1').DataTable({
                processing: true,
                responsive: true,
                serverSide : true,
                ajax: {
                    url: "{{route('json')}}"
                },
                columns: [
                    {data :'nomor_pemilik_bisnis',name:'nomor_pemilik_bisnis'},
                    {data :'nama_lengkap', name:'nama_lengkap'},
                    {data :'alamat', name:'alamat'},
                    {data :'nomor_telepon', name:'nomor_telepon'},
                    {data :'status_verifikasi', name:'status_verifikasi'},
                    {data :'aksi', name:'aksi'}
                ],
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ],

            });
          });

</script>

@endpush
