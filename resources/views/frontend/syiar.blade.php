@extends('layouts.frontend')

@section('title', 'departemen')

@section('content')
    <!--====== BRAMD PART START ======-->
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
        list-style: none;
        scroll-behavior: smooth;
        font-family: 'Poppins', sans-serif;
        scroll-padding-top: 0;
    }
    :root{
    --main-color:#008148;
    --second-color:#1e3932;
    }
    section {
        padding: 50px 10px;
    }
    *::selection {
        color: #fff;
        background: var(--main-color);
    }
        header {
        position: fixed;
        width: 100%;
        top: 0;
        right: 0;
        z-index: 1000;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: #fff;
        box-shadow: 0 4px 41px rgb(14 55 54 / 14%);
        padding: 15px 10%;
        transition: 0.2s;
    }
    .logo img {
    width: 40px;
    }
    .navbar {
        display: flex;
        overflow: hidden;
    }
    .navbar a {
        font-size: 1rem;
        padding: 11px 20px;
        color: var(--second-color);
        font-weight: 600;
        text-transform: uppercase;
    }
    .navbar a:hover {
        color: var(--main-color);
    }
    #menu-icon {
        font-size: 24px;
        cursor: pointer;
        z-index: 1001;
        display: none;
    }
    .container {
        margin-top: 50px;
        overflow: hidden;
    }
    .row {
        justify-content: center;
    }
    .card {
    border: 1px solid #ccc;
    border-radius: 10px;
    margin-top: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 170px;
    transition: transform 0.3s ease; /* Efek transisi untuk transformasi */
    margin-right: 10px;
    }
    .card:hover {
        transform: scale(1.05); /* Mengubah skala card saat di-hover */
    }
    .card img {
        width: 100%;
        height: auto;
        align-items: bottom;
    }
    </style>
    <!-- navbar -->
    <header>
        <!-- logo -->
        <a href="#" class="logo"><img src="img/logo.png" alt=""></a>
        <!-- garis 3 -->
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#">HRD</a></li>
            <li><a href="#shop">Syiar</a></li>
            <li><a href="#delivery">Keputrian</a></li>
            <li><a href="#app">Iptek</a></li>
            <li><a href="#about">Mentoring</a></li>
            <li><a href="#contact">Adik Asuh</a></li>
            <li><a href="#contact">Eksternal</a></li>
        </ul>
    </header>

    <!-- struktur organisasi -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="images/departemen/HRD/1.jpg" alt="">
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="images/departemen/HRD/2.jpg" alt="">
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="images/departemen/HRD/3.jpg" alt="">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="images/departemen/HRD/4.jpg" alt="">
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="images/departemen/HRD/5.jpg" alt="">
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="images/departemen/HRD/6.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="proker">
        <h3>Program Kerja Sektor HRD</h3>
        <table>
                <tr>
                    <td>1. </td>
                    <td>Mentoring Lanjutan</td>
                </tr>
                <tr>
                    <td>2. </td>
                    <td>SHOOT</td>
                </tr>
                <tr>
                    <td>3. </td>
                    <td>Organization Training</td>
                </tr>
                <tr>
                    <td>4. </td>
                    <td>Organization Training</td>
                </tr>
                <tr>
                    <td>5. </td>
                    <td>Daurah Pasca Kampus</td>
                </tr>
                <tr>
                    <td>6. </td>
                    <td>Heal Your Soul</td>
                </tr>
                <tr>
                    <td>7. </td>
                    <td>Hang Out</td>
                </tr>
                <tr>
                    <td>8. </td>
                    <td>KMI Sport</td>
                </tr>
                <tr>
                    <td>9. </td>
                    <td>Aksara (Ayo Kita Bersama-sama Belajar Al Quran)</td>
                </tr>
                <tr>
                    <td>10. </td>
                    <td>Mentoring Internal</td>
                </tr>
                <tr>
                    <td>11. </td>
                    <td>Tastqif</td>
                </tr>
                <tr>
                    <td>12. </td>
                    <td>Meet Up Mentor</td>
                </tr>
                <!-- Add more rows as needed -->
        </table>
    </div>



    

@endsection

