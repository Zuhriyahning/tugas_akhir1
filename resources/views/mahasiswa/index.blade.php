<a href="/mahasiswa/create">Add Mahasiswa</a>
<table border="1">
    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>NIM</th>
        <th>JENIS KELAMIN</th>
        <th>ALAMAT</th>
    </tr>
    @foreach ($mahasiswa as $m)
    <tr>
        <td>{{$m->id}}</td>
        <td>{{$m->nama}}</td>
        <td>{{$m->nim}}</td>
        <td>{{$m->jenis_kelamin}}</td>
        <td>{{$m->alamat}}</td>
    </tr>
    @endforeach
</table>