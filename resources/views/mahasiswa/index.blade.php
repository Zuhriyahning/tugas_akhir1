@extends('layouts.master')

@section('content')
<div class="container">
        <a class="btn btn-primary" href="/mahasiswa/create">Add Mahasiswa</a>
        <a href="http://127.0.0.1:8000/home" class="btn btn-secondary">Back</a>
    <table class="table table-success table-striped">
    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>NIM</th>
        <th>JENIS KELAMIN</th>
        <th>ALAMAT</th>
        <th>AKSI</th>
    </tr>
    @foreach ($mahasiswa as $m)
    <tr>
        <td>{{$m->id}}</td>
        <td>{{$m->nama}}</td>
        <td>{{$m->nim}}</td>
        <td>{{$m->jenis_kelamin}}</td>
        <td>{{$m->alamat}}</td>
        <td>
            <div class="btn-group" role="group" aria-label="Basic example">
                <a class="btn btn-warning" href="/mahasiswa/{{$m->id}}/edit">Edit</a>
                <form action="/mahasiswa/{{$m->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <input class="btn btn-danger" type="submit" value="Delete">
                </form>
            </div>
        </td>
    </tr>
    @endforeach
    </table>
    </div>
@endsection

