@extends('layout.app')

@section('content')
<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-7 pt-5 mt-4">
            <div class="card p-3 py-4 bg-light shadow">
                <div class="text-center">
                    <img src="{{ Vite::asset('/resources/images/mringis.jpg') }}" width="200" class="rounded-circle">
                </div>
                <div class="text-center mt-3">
                    <h5 class="mt-2 mb-0 fw-semibold">Rafi Syeghani Ardiyanto</h5>
                    <span class="fw-semibold">1204220047</span>
                    <div class="px-4 mt-1">
                        <p class="fs-6">Haloo,nama saya Rafi Syeghani Ardiyanto saya Mahasiswa Semester 4 Prodi Sistem Informasi Telkom University Surabaya. Alamat saya di Jl.Tanjungsari No 62b, Taman, Sidoarjo</p>
                    </div>
                    <!-- Social Media Icons -->
                    <div class="social-icons mt-3">
                        <a href="https://www.facebook.com/profile.php?id=100028849610765&mibextid=ZbWKwL" class="icon-link"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/rafiiardiynto/" class="icon-link"><i class="bi bi-instagram"></i></a>
                        <a href="https://youtube.com/@rafisyeghaniardiyanto1669?si=ZDkwZZd_-I5u9rfH" class="icon-link"><i class="bi bi-youtube"></i></a>
                    </div>
                    <!-- End Social Media Icons -->
                    <div class="buttons mt-3 ">
                        <!-- Tombol "GRAB NOW" -->
                        <a href="https://wa.me/6285733257930" class="btn btn-outline-dark px-4">Message</a>
                        <a href="mailto:syeghanirafi@gmail.com" class="btn btn-dark px-4 ms-3">E-Mail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .icon-link i {
        color: black;
        font-size: 20px;
        margin-right: 15px;
    }
</style>

@endsection
