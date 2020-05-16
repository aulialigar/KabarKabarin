@extends('master')
@section('title', 'Halaman Utama Portal - Kabar Kabarin')
@section('body')
<h1>Portal - Kabar Kabarin</h1>
@foreach (App\berita::where('published', '=' , 'yes')->get() as $berita)
<h3><a href="">{{ $berita->judul }}</a></h3>
<hr />
{{ $berita->created_at->format('M d, Y') }}
<hr />
{{ $berita->isi }}
<hr /><br>
@endforeach
@endsection