<div class="container mt-3">
    <div class="card">
        <div class="card-header">Tambah Data siswa</div>
        <div class="card-body">

            <form>
                <div class="mb-3">
                    <label for="nameinput" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nameinput" aria-describedby="nameInput">
                </div>
                <div class="mb-3">
                    <label for="nisInput" class="form-label">NIS</label>
                    <input type="number" class="form-control" id="nisInput" style="width: 30%;">
                </div>
                <div class="mb-3">
                    <label for="emailInput" class="form-label">Email</label>
                    <input type="email" class="form-control" id="emailInput">
                </div>
                <div class="mb-3">
                    <label for="majorInput" class="form-label">Jurusan</label>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="majorInput">
                            Pilih
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Rekayasa Perangkat Lunak</a></li>
                            <li><a class="dropdown-item" href="#">Teknik Bisnis Sepeda Motor</a></li>
                            <li><a class="dropdown-item" href="#">AKuntasi Keuangan</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="checkValid">
                    <label class="form-check-label" for="checkValid">Data yakin sudah benar</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
</div>