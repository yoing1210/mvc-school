@extends('admin.layouts.main') 

@section('container')
<div id="content" class="p-4 p-md-5 pt-5 ">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mt-1 pt-1 pb-2 mb-3 border-bottom">
  <h1 class="h2">PROFIL SEKOLAH</h1>
</div>

@if(session()-> has ('success'))
<div class="alert alert-success col-lg-8" role="alert">
  {{ session('success') }}
</div>
@endif


<div class="table-responsive col-lg-12">
  <a href="/admin/profil/create" class="btn btn-primary mb-3">Input Data Sekolah </a>
  
  @foreach ($profil as $profils)
  <a href="/admin/profil/{{ $profils->id }}/edit" class="btn btn-primary mb-3">Edit Data Sekolah</a>
  
  <dl class="row">
    <dt class="col-sm-3">Nama Sekolah</dt>
    <dd class="col-sm-9">{{ $profils->nama }}</dd>
    <dt class="col-sm-3">Alamat Sekolah</dt>
    <dd class="col-sm-9">{{ $profils->alamat }}</dd>
    <dt class="col-sm-3">Kepala Sekolah</dt>
    <dd class="col-sm-9">{{ $profils->ks }}</dd>
    <dt class="col-sm-3">NIP</dt>
    <dd class="col-sm-9">{{ $profils->nip }}</dd>
    <dt class="col-sm-3">kontak</dt>
    <dd class="col-sm-9">{{ $profils->kontak }}</dd>
    <dt class="col-sm-3">email</dt>
    <dd class="col-sm-9">{{ $profils->email }}</dd>
    <dt class="col-sm-3">prestasi</dt>
    <dd class="col-sm-9">{{ $profils->prestasi }}</dd>
    <dt class="col-sm-3">akreditasi</dt>
    <dd class="col-sm-9">{{ $profils->akreditasi }}</dd>

    <dt class="col-sm-3">Visi Sekolah</dt>
    <dd class="col-sm-9">{!! $profils->visi !!}</dd>

    <dt class="col-sm-3">Misi Sekolah</dt>
    <dd class="col-sm-9">{!! $profils->misi !!}</dd>

    <dt class="col-sm-3">Tujuan Sekolah</dt>
    <dd class="col-sm-9">{!! $profils->tujuan !!}</dd>

    <dt class="col-sm-3">Fasilitas </dt>
    <dd class="col-sm-9">{!! $profils->fasilitas !!}</dd>

    <dt class="col-sm-3">Jurusan</dt>
    <dd class="col-sm-9">{!! $profils->jurusan !!}</dd>

    <dt class="col-sm-3">sejarah</dt>
    <dd class="col-sm-9">{!! $profils->sejarah !!}</dd>

  </dl>




@endforeach
 
</div>
</div>

@endsection