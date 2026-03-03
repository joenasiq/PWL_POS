<!DOCTYPE html>
<html>
<head>
    <title>Ubah User</title>
</head>
<body>
    <h1>Form Ubah Data User</h1>
    <form method="post" action="/user/ubah_simpan/{{ $user->user_id }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        
        <label>Username</label>
        <input type="text" name="username" value="{{ $user->username }}" placeholder="Masukkan Username">
        <br>
        <label>Nama</label>
        <input type="text" name="nama" value="{{ $user->nama }}" placeholder="Masukkan Nama">
        <br>
        <label>Password</label>
        <input type="password" name="password" value="{{ $user->password }}" placeholder="Masukkan Password">
        <br>
        <label>Level ID</label>
        <input type="number" name="level_id" value="{{ $user->level_id }}" placeholder="Masukkan ID Level">
        <br><br>
        <input type="submit" class="btn btn-success" value="Ubah">
    </form>
</body>
</html>