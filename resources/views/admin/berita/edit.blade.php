@extends('admin.layouts.main')

@section('container')
<div class="container-fluid d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom ">
    <h1 class="h2">Edit Profil </h1>
  </div>

  <div class="col-lg-8">

    <form method="post" action="/admin/berita/{{ $berita->id }}" class="mb-5" enctype="multipart/form-data" >
      {{-- /admin/berita/{{ $berita->id }} --}}
        @csrf

{{-- profil --}}
<div class="mb-3">
  <label for="title" class="form-label">Judulsss</label>
  <input type="Text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ $berita->title }}">
  @error('title')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="mb-3">
  <label for="category" class="form-label">Category</label>
  <select class="form-select" name="category_id">
    <option value="" selected disabled>--pilih category-- </option>
    @foreach ($categories as $category)
    <option value="{{ $category -> id }}"> {{ $category->name }} </option>
    @if(old('category_id') == $category->id)
    <option value="{{ $category -> id }}" selected> {{ $category->name }} </option>
    @endif
    @endforeach
  </select>
</div>

<div>
    <label for="image" class="form-label">Product Image</label>
    <input type="hidden" name="oldImage" value="{{ $berita->image }}">
    @if ($berita->image)
    <img src="{{ asset('storage/'. $berita->image) }}" class="img-preview img-fluid col-sm-5">
    @else
    <img class="img-preview img-fluid col-sm-5">
    @endif
    <input class="form-control form-control-lg mb-4 @error('image') is-invalid @enderror" type="file" id="image"  value=" {{ asset('storage/'. $berita->image) }}" name="image"  
    onchange="previewImage()">
    @error('image')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>



<div class="mb-3">
  <label for="body" class="form-label">body</label>
  @error('body')
    <p class="text-danger">{{ $message }}</p>
  @enderror
  <input id="body" type="hidden" name="body" value="{{ $berita->body }}">
  <trix-editor input="body"></trix-editor>
 
</div>
        
       
        
        <button type="submit" class="btn btn-primary">Edit Profil</button>
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