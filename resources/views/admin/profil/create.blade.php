@extends('admin.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post </h1>
  </div>

  <div class="col-lg-8">

    <form method="post" action="/admin/profil" class="mb-5" enctype="multipart/form-data" >
        @csrf

{{-- profil --}}
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Sekolah</label>
          <input type="Text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required autofocus value="{{ old('nama') }}">
          @error('nama')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat Sekolah</label>
          <input type="Text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required autofocus value="{{ old('alamat') }}">
          @error('alamat')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        
        <div class="mb-3">
          <label for="ks" class="form-label">Nama Kepala Sekolah</label>
          <input type="Text" class="form-control @error('ks') is-invalid @enderror" id="ks" name="ks" required autofocus value="{{ old('ks') }}">
          @error('ks')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        
        <div class="mb-3">
          <label for="nip" class="form-label">nip</label>
          <input type="Text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" required autofocus value="{{ old('nip') }}">
          @error('nip')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="kontak" class="form-label">kontak</label>
          <input type="Text" class="form-control @error('kontak') is-invalid @enderror" id="kontak" name="kontak" required autofocus value="{{ old('kontak') }}">
          @error('kontak')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">email</label>
          <input type="Text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required autofocus value="{{ old('email') }}">
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="prestasi" class="form-label">prestasi</label>
          <input type="Text" class="form-control @error('prestasi') is-invalid @enderror" id="prestasi" name="prestasi" required autofocus value="{{ old('prestasi') }}">
          @error('prestasi')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="akreditasi" class="form-label">akreditasi</label>
          <input type="Text" class="form-control @error('akreditasi') is-invalid @enderror" id="akreditasi" name="akreditasi" required autofocus value="{{ old('akreditasi') }}">
          @error('akreditasi')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        {{-- profil --}}

      
          
        <div class="mb-3">
            <label for="visi" class="form-label">Visi</label>
            @error('visi')
              <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="visi" type="hidden" name="visi" value="{{ old('visi') }}">
            <trix-editor input="visi"></trix-editor>
           
          </div>
            
        <div class="mb-3">
            <label for="misi" class="form-label">Misi</label>
            @error('misi')
              <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="misi" type="hidden" name="misi" value="{{ old('misi') }}">
            <trix-editor input="misi"></trix-editor>
           
          </div>
            
        <div class="mb-3">
            <label for="tujuan" class="form-label">Tujuan Sekolah</label>
            @error('tujuan')
              <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="tujuan" type="hidden" name="tujuan" value="{{ old('tujuan') }}">
            <trix-editor input="tujuan"></trix-editor>
           
          </div>

        <div class="mb-3">
            <label for="sejarah" class="form-label">sejarah Sekolah</label>
            @error('sejarah')
              <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="sejarah" type="hidden" name="sejarah" value="{{ old('sejarah') }}">
            <trix-editor input="sejarah"></trix-editor>
           
          </div>
            
        <div class="mb-3">
            <label for="fasilitas" class="form-label">Fasilitas</label>
            @error('fasilitas')
              <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="fasilitas" type="hidden" name="fasilitas" value="{{ old('fasilitas') }}">
            <trix-editor input="fasilitas"></trix-editor>
           
          </div>
     
        
        <div class="mb-3">
          <label for="jurusan" class="form-label">Jurusan</label>
          @error('jurusan')
            <p class="text-danger">{{ $message }}</p>
          @enderror
          <input id="jurusan" type="hidden" name="jurusan" value="{{ old('jurusan') }}">
          <trix-editor input="jurusan"></trix-editor>
         
        </div>
        
       
        
        <button type="submit" class="btn btn-primary">Create Post</button>
      </form>

  </div>

<script>

  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');

  title.addEventListener('change',function(){
    fetch('/dashboard/posts/checkSlug?title=' + title.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
  });


  function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
      imgPreview.src = oFREvent.target.result;
    }
  }
</script>


@endsection