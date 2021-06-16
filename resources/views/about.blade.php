@extends('layouts.nav')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-sm-12">
            <div class="d-flex justify-content-center">
                <h3 class="judul text-primary">Tentang Kami</h3>
            </div>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="d-flex justify-content-center">
                <h6 class="text-center">
                LalinMu24 adalah sebuah website informasi mengenai info lalu lintas secara real time dengan menampilkan peta lalu lintas yang bisa diakses sesuai perempatan dan juga video live 
                perempatan yang berguna untuk memantau keadaan lalu lintas oleh pengguna jalan.
                </h6>
            </div>
            <hr>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-sm-6">
            <h4 class="text-primary">Lalu Lintas</h4>
            <p>Dengan fitur Lalu Lintas ini pengguna jalan dapat melihat titik tertentu kemacetan yang terjadi di sebuah daerah, sehingga sebagai pengguna jalan anda dapat mengambil keputusan 
            memilih jalan yang tepat dan dapat mempersingkat waktu perjalanan anda.</p>
        </div>
        <div class="col-sm-6">
            <img src="{{URL::to('/')}}/img/asset/map.png" width="500" height="350">
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-sm-6">
            <img src="{{URL::to('/')}}/img/asset/video.png" width="500" height="350">
        </div>
        <div class="col-sm-6">
            <h4 class="text-primary">Video Perempatan</h4>
            <p>Menampilkan live video langsung dari tempat perempatan, dengan menggunakan IoT(Interet of Things) sistem kami sudah terhubung melalui papan micro chip ke CCTV yang terdapat pada setiap
            perempatan yang terdaftar di dalam sistem kami.</p>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-sm-6">
            <h4 class="text-primary">Informasi Jalan</h4>
            <p>Dengan mengakses website kami para pengguna jalan dapat lebih mudah memilih perempatan yang ingin di pantau, di dalam sistem kami sudah terdapat fitur search perempatan, ketika pengguna 
            sudah menemukan perempatan yang di cari, pengguna juga dapat untuk melihat detail dari suatu perempatan.</p>
        </div>
        <div class="col-sm-6">
            <img src="{{URL::to('/')}}/img/asset/navigator.png" width="500" height="350">
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-sm-12">
            <div class="d-flex justify-content-center">
                <h3 class="judul text-primary">Team Kami</h3>
            </div>
            <hr>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-sm-6">
            <div class="d-flex justify-content-center">
                <div class="row">
                        <img src="{{URL::to('/')}}/img/asset/lanang.jpeg" width="130" height="130" class="rounded-circle border border-primary">
                    </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="row mt-2">
                    <h6>Lanang Bagus Prabowo</h6>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="row">
                    <div class="badge badge-primary text-wrap">
                            Project Manager
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="d-flex justify-content-center">
                <div class="row">
                        <img src="{{URL::to('/')}}/img/asset/hagai.jpg" width="130" height="130" class="rounded-circle border border-primary">
                    </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="row mt-2">
                    <h6>Disa Hagai Tarigan</h6>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="row">
                    <div class="badge badge-primary text-wrap">
                            Software Engineer
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mt-5">
            <div class="d-flex justify-content-center">
                <div class="row">
                        <img src="{{URL::to('/')}}/img/asset/rafli.jpeg" width="130" height="130" class="rounded-circle border border-primary">
                    </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="row mt-2">
                    <h6>Rafli Firdaus</h6>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="row">
                    <div class="badge badge-primary text-wrap">
                            System Analyst
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mt-5">
            <div class="d-flex justify-content-center">
                <div class="row">
                        <img src="{{URL::to('/')}}/img/asset/paxilla.jpeg" width="130" height="130" class="rounded-circle border border-primary">
                    </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="row mt-2">
                    <h6>Paxilla Chairany</h6>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="row">
                    <div class="badge badge-primary text-wrap">
                            UI/UX Designer
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 mt-3">
            <div class="d-flex justify-content-center">
                <div class="row">
                        <img src="{{URL::to('/')}}/img/asset/jile.jpeg" width="130" height="130" class="rounded-circle border border-primary">
                    </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="row mt-2">
                    <h6>Jile Tamariska</h6>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="row">
                    <div class="badge badge-primary text-wrap">
                            UI/UX Designer
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

