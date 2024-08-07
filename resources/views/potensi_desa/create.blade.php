@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Potensi Desa</h1>
    <form action="{{ route('potensi_desa.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" class="form-control" id="nama" required>
        </div>
        <div class="form-group">
            <label for="jenis">Jenis:</label>
            <select name="jenis" class="form-control" id="jenis" required>
                <option value="umkm">UMKM</option>
                <option value="wisata">Wisata</option>
            </select>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar:</label>
            <input type="file" name="gambar" class="form-control-file" id="gambar">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <textarea name="deskripsi" class="form-control summernote" id="deskripsi" required></textarea>
        </div>
        <div class="form-group">
            <label for="lokasi">Lokasi:</label>
            <input type="text" name="lokasi" class="form-control" id="lokasi" required>
        </div>
        <div class="form-group">
            <label for="hari_buka">Hari Buka:</label>
            <input type="text" name="hari_buka" class="form-control" id="hari_buka" required>
        </div>
        <div class="form-group">
            <label for="hari_tutup">Hari Tutup:</label>
            <input type="text" name="hari_tutup" class="form-control" id="hari_tutup" required>
        </div>
        <div class="form-group">
            <label for="buka">Buka:</label>
            <input type="time" name="buka" class="form-control" id="buka" required>
        </div>
        <div class="form-group">
            <label for="tutup">Tutup:</label>
            <input type="time" name="tutup" class="form-control" id="tutup" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<!-- Summernote CSS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

<!-- Summernote JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
    $(document).ready(function() {
        $('.summernote').summernote({
            height: 300,
            placeholder: 'Write your content here...',
            tabsize: 2,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
        });
    });
</script>
@endsection
