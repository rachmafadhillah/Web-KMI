@extends('layouts.frontend')

@section('title','Portfolio')
    @section('content')
   <!-- This example requires Tailwind CSS v2.0+ -->
   <style>
    .bg {
      position: relative;
    }
    .bg img {
      width: 100%;
      height: 100%;
      object-fit: cover; /* Memastikan gambar mengisi sepenuhnya tanpa merubah rasio aspek */
      display: block;
    }

    .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.5); /* Warna putih dengan tingkat transparansi 0.5 */
    }

    .download-btn {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: rgba(250, 5, 34, 0.7); /* Ganti dengan warna latar yang diinginkan */
      color: white;
      padding: 10px 20px;
      font-size: 16px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .download-btn:hover {
    background-color: #fa0522; /* Warna yang berbeda saat tombol di-hover */
    }
    
  </style>
  
  <section id="team" class="team-area pt-120">
    <div class="container1">
      <div class="container">
        <nav class="flex mb-10" aria-label="Breadcrumb">
          <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
              <a href="/" class="inline-flex items-center text-sm text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                Home
              </a>
            </li>
            <li>
              <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <a href="/profile" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Annual Report</a>
              </div>
            </li>
          </ol>
        </nav>
      </div>

        <div class="bg">
          <img src="images/blog-2.jpg" alt="">
          <div class="overlay"></div>
          <a href="{{ url('/download/Profil KMI.pdf') }}" download="Profil KMI.pdf" class="download-btn">
            Download PDF
          </a>
        </div>
    </div>
  </section>