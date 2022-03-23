@extends('layout.main')

@section('container')
    <div class="card">
        <div class="card-header">
            <i class="fas fa-info-circle"></i> About
        </div>
        <div class="card-body">
            <article class="text">
                <h1 class="small">Hallo, Selamat Datang Di Moza Blog. Nama Saya Bagas Arya Pradipta Yang Membuat
                    Blog Ini. Web Ini Dibuat Bertujuan Melatih Skill Dalam Membuat Website.</h1>

                <small>
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item"> Harap gunakan kata-kata yang pantas selama menulis diblog ini.</li>
                        <li class="list-group-item">Dilarang memposting hal-hal yeng bersifat negatif seperti SARA,
                            Pornografi dan hal-hal lain yang akan memicu hal negatif.</li>
                        <li class="list-group-item">Tidak diperbolehkan untuk melakukan hal-hal seperti
                            spamming posts, serta mengiklankan produk tertentu (termasuk memberikan link referal) diblog ini
                            demi kenyamanan bersama.</li>
                        <li class="list-group-item">Bagi yang melanggar aturan-aturan diatas maka akun pembuat postingan
                            tersebut akan
                            dihapus.</li>
                    </ol>
                </small>

                <p class="badge bg-danger mt-3"> Note : </p>
                <p class="text-muted small"> Registrasi Dan Login Agar Bisa Memposting Tulisan Kalian. Yuk
                    Coba Isi Beberapa Artikel Mu Di Blog Ini :) </p>
                <p class="text-muted small">Credit :</p>
            </article>

            <div class="col-lg d-flex justify-content-star mt-2">
                {{-- <div class="mx-2">
                    <a href="https://id.pinterest.com/"> <img src="../img/icon/pinterest.png" style="max-width: 100px"></a>
                </div>
                <div class="mx-2">
                    <a href="https://pixabay.com/id/"><img src="../img/icon/pixabay.png" style="max-width: 100px"></a>
                </div> --}}
                <div class="mx-2">
                    <a href="https://unsplash.com/"><img src="../img/icon/unsplash.png" style="max-width: 100px"></a>
                </div>
            </div>
            <hr>
            <div class="d-flex justify-content-center">
                <p class="small">Kunjungi Juga <a href="../Portfolio/index.php"
                        class="badge bg-success text-decoration-none">MyPortfolio</a> Thank You <i
                        class="fas fa-heart text-danger"></i></p>
            </div>
        </div>
    </div>
@endsection
