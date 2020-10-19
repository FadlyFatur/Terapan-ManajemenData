@extends('layout.main')
@section('title','Sunting Acara')
@section('halaman','Acara/Kegiatan')

@section('content')
      <div class="card">
        <div class="card-header">
          <h3>Tambah Kegiatan</h3>
        </div>
        <div class="card-body">
          <form action="" method="POST">
              
              <div class="form-group has-error">
                  <label for="slug">Slug <span class="require">*</span> <small>(This field use in url path.)</small></label>
                  <input type="text" class="form-control" name="slug" />
                  <span class="help-block">Field not entered!</span>
              </div>
              
              <div class="form-group">
                  <label for="title">Judul<span class="require">*</span></label>
                  <input type="text" class="form-control" name="title" />
              </div>
              
              <div class="form-group">
                  <label for="description">Deskripsi</label>
                  <textarea rows="5" class="form-control" name="description" ></textarea>
              </div>
              
              
              
              <div class="form-group">
                <label for="image">Foto Acara/Kegiatan</label>
                <div id="image-preview" class="image-preview">
                  <label for="image-upload" id="image-label">Choose File</label>
                  <input type="file" name="image" id="image-upload">
                </div>
              </div>
            

              <div class="form-group">
                  <p><span class="require">*</span> - required fields</p>
              </div>
              <div class="form-group">
                  <button type="submit" class="btn btn-primary">
                      Create
                  </button>
                  <button class="btn btn-default">
                      Cancel
                  </button>
              </div>
          </form> 
        </div>
      </div>
@endsection