@extends('admin.layouts.main') 

@section('container')
<div id="content" class=" p-4 p-md-5 pt-5">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mt-1 pt-1 pb-2 mb-3 border-bottom">
  <h1 class="h2">BERITA SEKOLAH</h1>
</div>

@if(session()-> has ('success'))
<div class="alert alert-success col-lg-8" role="alert">
  {{ session('success') }}
</div>
@endif


<div class="table-responsive col-lg-12">
    <a href="/admin/berita/create" class="btn btn-primary mb-3">Post Berita </a>
    
    <table class="table table-striped">
      <thead>
          <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Gambar</th>
            <th>Deskripsi</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $no =1; ?>
          @foreach ($berita as $beritas)
          
          {{-- @foreach ($pesanans as $pesanan) --}}
          <tr>
              <td>{{ $no++ }}</td>
              <td> {{ $beritas->title }}</td>
              <td> {{ $beritas->category->name }}</td>
              <td> <img src="{{ asset('storage/'. $beritas->image) }}"width="100"></td>
              <td> {!! $beritas->body !!}</td>
              <td>  <a href="/admin/berita/{{ $beritas->id }}/edit" class="btn btn-primary mb-3">Edit berita </a>
                <form action="{{ url('/admin/berita') }}/{{ $beritas->id }}" method="post" class="d-inline">
                  @csrf
                  {{ method_field('DELETE') }}
                  <button class="border-0">
                    <a class="btn btn-danger mb-3" onclick="return confirm('Are You Sure?')">Hapus Berita</a>

                  </button>
                </form>
              </td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>
</div>

@endsection