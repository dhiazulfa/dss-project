@extends('dashboard.layouts.main')
@section('container')

<div class="container-fluid">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mb-3 border-bottom">
        <h1 class="h2">Add Developers</h1>
    </div>
    
    <div class="col-lg-8">
      <form method="POST" action="/admin/tasks" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{old('nama')}}" required>
          @error('title')
            <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
					</div>
     
        <div class="mb-3 col-lg-4">
          <label for="jumlah_kebutuhan" class="form-label">Jumlah Kebutuhan Pekerja</label>
          <input type="number" class="form-control @error('jumlah_kebutuhan') is-invalid @enderror" id="jumlah_kebutuhan" name="jumlah_kebutuhan" value="{{old('jumlah_kebutuhan')}}" required>
          @error('jumlah_kebutuhan')
            <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
        </div>
    
        <div class="mb-3 col-lg-4">
          <label for="umur_min" class="form-label">Umur Minimal Pekerja</label>
          <input type="number" class="form-control @error('umur_min') is-invalid @enderror" id="umur_min" name="umur_min" value="{{old('umur_min')}}" required>
          @error('umur_min')
            <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
        </div>
    
        <div class="mb-3 col-lg-4">
          <label for="umur_max" class="form-label">Umur Maximal Pekerja</label>
          <input type="number" class="form-control @error('umur_max') is-invalid @enderror" id="umur_max" name="umur_max" value="{{old('umur_max')}}" required>
          @error('umur_max')
            <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
        </div>
    
        <label for="position" class="form-label">Position</label>
        <select class="form-control @error('position') is-invalid @enderror" name="position" required>
          <option value="">Pilih Salah Satu</option>
          <option value="backend">Backend</option>
          <option value="frontend">Frontend</option>
          <option value="fullstack">Fullstack</option>
          <option value="QA">QA</option>
          <option value="UI/UX">UI/UX</option>
          </select>
        </div>
    
        <div class="mb-3 col-lg-4">
            <label for="status" class="form-label">Status</label>
            <select class="form-control @error('status') is-invalid @enderror" name="status" required>
              <option value="">Pilih Salah Satu</option>
              <option value="In House">On Site</option>
              <option value="Freelance">Freelance</option>
            </select>
        </div>
    
        <div class="smb-3">
            <label for="body" class="form-label">Deskripsi Pekerjaan</label>
            <textarea class="form-control row-10 @error('body') is-invalid @enderror" name="body" requiered>{{old('body')}}</textarea>
        </div>
    
        <div class="smb-3">
            <label for="alamat" class="form-label">Alamat Tempat Bekerja</label>
            <textarea class="form-control row-10 @error('alamat') is-invalid @enderror" name="alamat" requiered>{{old('alamat')}}</textarea>
        </div>
    
        <div class="mb-3">
          <label for="link_maps" class="form-label">Link Maps (Jika Ada)</label>
          <input type="text" class="form-control @error('link_maps') is-invalid @enderror" id="link_maps" name="link_maps" value="{{old('link_maps')}}" required>
          @error('link_maps')
            <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
        </div>
    
        <div class="smb-3">
            <label for="punishment" class="form-label">Hukuman apabila tidak selesai</label>
            <textarea class="form-control row-10 @error('punishment') is-invalid @enderror" name="punishment" requiered>{{old('punishment')}}</textarea>
        </div>
        
        <div class="mb-3 col-lg-4">
          <label for="jam_masuk" class="form-label">Jam Masuk</label>
          <input type="time" step="1" class="form-control @error('jam_masuk') is-invalid @enderror" id="jam_masuk" name="jam_masuk" value="{{old('jam_masuk')}}" required>
          @error('jam_masuk')
            <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
        </div>
        
        <div class="mb-3 col-lg-4">
          <label for="jam_selesai" class="form-label">Jam Selesai</label>
          <input type="time" step="1" class="form-control @error('jam_selesai') is-invalid @enderror" id="jam_selesai" name="jam_selesai" value="{{old('jam_selesai')}}" required>
          @error('jam_selesai')
            <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
        </div>
    
        <div class="mb-3 col-lg-4">
          <label for="tgl_mulai" class="form-label">Tanggal Masuk</label>
          <input type="date" class="form-control @error('tgl_mulai') is-invalid @enderror" id="tgl_mulai" name="tgl_mulai" value="{{old('tgl_mulai')}}" required>
          @error('tgl_mulai')
            <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
        </div>
        
        <div class="mb-3 col-lg-4">
          <label for="tgl_selesai" class="form-label">Tanggal Selesai</label>
          <input type="date" class="form-control @error('tgl_selesai') is-invalid @enderror" id="tgl_selesai" name="tgl_selesai" value="{{old('tgl_selesai')}}" required>
          @error('tgl_selesai')
            <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
        </div>
    
        <div class="mb-3 col-lg-4">
            <label for="price" class="form-label">Gaji</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price')}}" required>
            @error('price')
              <div class="invalid-feedback">
                {{$message}}
              </div>
            @enderror
        </div>
    
        <div class="mb-3 col-lg-4">
            <label for="image" class="form-label">Gambar</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" value="{{old('image')}}" required>
            @error('image')
              <div class="invalid-feedback">
                {{$message}}
              </div>
            @enderror
        </div>
    
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
    
  </div>
</div>

@endsection