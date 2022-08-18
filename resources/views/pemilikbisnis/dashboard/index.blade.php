@extends('layouts.master')
@section('title')
Dashboard CMS Pemilik Bisnis
@endsection

@section('content')

Selamat Datang {{Auth::user()->name}} anda adalah {{Auth::user()->role}}

@endsection
