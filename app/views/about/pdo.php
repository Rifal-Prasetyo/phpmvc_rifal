<div class="container">
    <img src="<?= BASE_URL ?>/img/download.png" alt="pdo" srcset="" class="img-thumbnail mb-3">
    <hr>
    <div class="row">
        <div class="col-6">
            <p>
                PDO (PHP Data Objects) adalah interface universal yang disediakan PHP untuk “berkomunikasi” dengan database server. Maksud istilah “interface universal” disini adalah bahwa PDO tidak terikat dengan aplikasi database tertentu. Apabila saat ini kita menggunakan database MySQL dan dikemudian hari ingin bermigrasi menggunakan PostgreSQL, kita hanya tinggal mengganti cara pemanggilan awal PDO dan seluruh kode program yang ada bisa langsung digunakan untuk database baru.

                Kondisi ini berbeda jika menggunakan mysql extension atau mysqli extension. Kedua extension ini hanya bisa bekerja dengan database MySQL. Karena alasan inilah banyak sebaiknya kita mulai beralih menggunakan PDO dibandingkan mysqli.

                Secara teknis, apabila menggunakan mysql atau mysqli extension, PHP langsung berhubungan dengan MySQL Server, tetapi jika menggunakan PDO, ia tidak berhubungan langsung dengan database, tetapi hanya sebagai “interface”. Konsep PDO ini dapat digambarkan sebagai berikut
            </p>
        </div>
        <div class="col-6">
            <p>
            <h3>Jenis Database Server yang didukung PDO</h3>
            Hingga saat penulisan tutorial ini (PHP versi 5.6) PDO mendukung setidaknya 12 jenis Interface/Database Server:

            CUBRID
            MS SQL Server
            Firebird
            IBM
            Informix
            MySQL
            MS SQL Server
            Oracle
            ODBC and DB2
            PostgreSQL
            SQLite
            4D</p>
        </div>
    </div>

</div>