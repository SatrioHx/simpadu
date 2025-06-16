@extends('template.main')
@section('content')
<main class="app-main">
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Data mahasiswa</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php">Data mahasiswa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                    </ol>
                </div>
                <div class="app-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h3 class="card-title">Tambah mahasiswa</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <form action="{{ url('mahasiswa') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                    <div class="card-body">
    <div class="form-group">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" name="nim" id="nim" class="form-control" id="nim" required>
</div>
<div class="form-group">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control" id="password" required>
</div>
    <div class="form-group">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" id="nama" required>
</div>
    <div class="form-group">
        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" id="tgl_lahir" required>
</div>
    <div class="form-group">
        <label for="no_telp" class="form-label">No. Telp</label>
        <input type="text" name="no_telp" id="no_git telp" class="form-control" id="telp" required>
</div>
    <div class="form-group">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" id="email" required>
</div>
<div class="form-group">
        <label for="id_prodi" class="form-label">Prodi</label>
<select class="form-select" name="id_prodi" id="id_prodi">
    @foreach ($prodi as $p)
    <option value="{{ $p->id }}">{{ $p->nama }}</option>
    @endforeach
            </select>
</div>
<div class="form-group">
    <label class ="form-label" for="foto">Upload foto</label>
    <input type="file" class="form-control" id="foto" name="foto" />
    </div>
</div>
        <div class="card-footer">
    <a href="index.php" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
        </main>
                                            </tbody>
                                        </table>
                                    </div>
</main>
@endsection