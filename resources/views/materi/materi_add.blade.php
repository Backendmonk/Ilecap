<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Materi {{$nama_kelas->nama_kelas}}</title>
</head>
<body>
<h3><b><center> Upload Materi</center></b></h3>
    <form action="/upload_file" method="post" enctype="multipart/form-data">
    @csrf
        <table>
            <tr>
                <td>Nama Dosen</td>
                <td>:</td>
                <td><input type="text"  value="{{$user->nama}}"> <input hidden type="text" name="iddsn" value="{{$user->id}}"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text"  value="{{$nama_kelas->nama_kelas}}"> <input hidden type="text" name="idkls" value="{{$nama_kelas->id}}"></td>
            </tr>
            <tr>
                <td>Upload File</td>
                <td>:</td>
                <td><input type="file"  name="materi"></td>
            </tr>

            <tr>
                <td>Judul Materi</td>
                <td>:</td>
                <td><input type="text" name="judul"> </td>
            </tr>
        </table>
        <button type="submit">Upload</button> 
<a href="/materi/{{$nama_kelas->id}}">
<button type="button" class="btn btn-outline-primary">kembali</button></a>
</p> 
    </form>
</body>
</html>