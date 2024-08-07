@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Produk Hukum</h1>
    <form action="{{ route('produk_hukum.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="jenis_produk">Jenis Produk:</label>
            <select name="jenis_produk" class="form-control" id="jenis_produk" required>
                <option value="Hukum Desa">Hukum Desa</option>
                <option value="Hukum Kepala Desa">Hukum Kepala Desa</option>
            </select>
        </div>
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" name="judul" class="form-control" id="judul" required>
        </div>
        <div class="form-group">
            <label for="isi">Isi:</label>
            <textarea name="isi" class="form-control summernote" id="isi" required></textarea>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal:</label>
            <input type="date" name="tanggal" class="form-control" id="tanggal" required>
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
