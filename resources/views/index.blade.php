<html lang="en" class="scroll-smooth">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TAMA</title>
  @vite('resources/css/app.css')
  @vite('resources/css/style.css')
  <link rel="stylesheet" href="https://qti.co.id/vendor/swiper/css/swiper.css">
  <link rel="stylesheet" href="https://qti.co.id/vendor/animate.css/animate.min.css">
</head>

<body class="relative overflow-x-hidden font-popp">
  <!-- ! Navbar -->
  <header class="md:px-20 lg:px-32 px-4 h-[70px] bg-slate-50 fixed z-10 w-full flex flex-wrap items-center py-2 shadow-md">
    <div class="flex items-center justify-between flex-1">
      <a href="#" class="text-4xl font-bold">TAMA</a>
    </div>
    <!-- Strip bar -->
    <label for="menu-toggle" class="block pointer-cursor md:hidden">
      <svg class="text-gray-900 fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
        <title>menu</title>
        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
      </svg>
    </label>
    <input class="hidden" type="checkbox" id="menu-toggle" />
    <div class="hidden w-full text-sm md:flex md:items-end md:w-auto " id="menu">
      <nav>
        <ul class="md:flex items-center text-[14px] justify-evenly text-gray-600 pt-4 md:pt-0">
          <li>
            <a class="block px-0 py-3 md:p-2" href="#home">Beranda</a>
          </li>
          <li>
            <a class="block px-0 py-3 md:p-2" href="#about-us">Tentang Kami</a>
          </li>
          <li>
            <a class="block px-0 py-3 md:p-2" href="#our-service">Produk & Layanan</a>
          </li>
          <li>
            <a class="block px-0 py-3 md:p-2" href="#our-client">Project</a>
          </li>
          <li>
            <a class="block px-0 py-3 md:p-2" href="#contact">Kontak</a>
          </li>
          <li>
            <a class="block px-0 py-3 md:p-2" href="Company_Profil_QTI.pdf" target="_blank" title="Unduh Company Profile">
              <img src="{{ asset('img/download-icon.png')}}" alt="">
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- Carousel -->
  <section class="relative h-full pt-8 mb-12 overflow-hidden bg-slate-100" id="home">
    <div class="blue-box"></div>
    <div class="flex items-center md:mx-20 lg:mx-32 ">
      <div class="slider-header ">
        <div class="swiper-container swiper-container-initialized swiper-container-horizontal" id="swiper-with-pagination">
          <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
            <!-- Slide 1 -->
            <div class="h-64 swiper-slide swiper-slide-active">
              <div class="grid grid-cols-12 px-4">
                <div class="w-full col-span-12 mb-4 sm:col-span-6 lg:col-span-6 xl:col-span-4 lg:mb-0 wow slideInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: slideInLeft;">
                  <h1 class="text-[54px] leading-[67.2px] text-slate-800 font-bold">TANAYA <br> ARTHA <br> GAUTAMA</h1>
                  <h4 class="mb-2 text-xl text-red-500">MINING & ENVIROMENT CONSULTANT</h4>
                  <div class="mt-12">
                    <a href="#about-us" class="p-1 px-4 text-white rounded-full bg-slate-600">Explore</a>
                  </div>
                </div>
                <div class="flex items-center w-full col-span-12 sm:col-span-6 lg:col-span-6 xl:col-span-8 wow slideInRight" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: slideInRight;">
                  <img src="{{asset('img/meeting.png')}}" class="md:w-[450px] lg:w-full px-4">
                </div>
              </div>
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide swiper-slide-next">
              <div class="grid grid-cols-12">
                <div class="col-span-12 sm:col-span-4">
                  <!-- <img src="https://qti.co.id/images/slider/logo-analitiq.png" class="img-fluid"> -->
                  <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam est ea fugiat enim quo facere excepturi iste minus! Quam non tempora quasi sed asperiores fugiat accusantium libero. Perspiciatis, eveniet dignissimos?</p>
                  <a href="#about-us" class="block p-1 px-4 mt-3 text-white bg-blue-700 rounded-full w-fit">Details</a>
                </div>
                <div class="grid col-span-12 sm:col-span-8 place-items-end">
                  <img src="https://qti.co.id/images/slider/analytics.png" width="500">
                </div>
              </div>
            </div>
            <!-- Slide 3 -->
            <div class="swiper-slide">
              <div class="grid grid-cols-12">
                <div class="col-span-12 sm:col-span-4">
                  <h4 class="text-2xl">Lorem ipsum dolor sit amet consectetur</h4>
                  <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam amet illo adipisci dignissimos deleniti consectetur nobis neque doloribus odit! Praesentium quos totam repellat voluptatibus eos commodi deleniti aut rem animi.</p>
                  <a href="#about-us" class="block p-1 px-4 mt-3 text-white bg-blue-700 rounded-full w-fit">Details</a>
                </div>
                <div class="grid col-span-12 sm:col-span-8 place-items-end">
                  <img src="https://qti.co.id/images/slider/covid.png" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
          <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
      </div>
    </div>
  </section>
  <section class="mb-16 overflow-x-hidden" id="about-us">
    <!-- <div class="absolute left-[-325px] hidden md:block ">
      <img src="https://qti.co.id/images/objek-left.png">
    </div> -->
    <div class="py-16 mx-4 my-16 md:mx-32">
      <div class="grid grid-cols-12 gap-0 md:gap-8">
        <div class="grid col-span-12 md:col-span-4 place-items-center wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
          <img src="{{asset('img/achievment.png')}}" class="w-52 md:w-72">
        </div>
        <div class="flex items-center h-full col-span-12 md:col-span-8">
          <div class="my-4 wow fadeInRight " data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
            <h4 class="text-2xl text-center text-red-600 uppercase">Tentang Perusahaan</h4>
            <p class="mt-4 text-justify wow fadeInRight" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">PT. TANAYA ARTHA GAUTAMA (TAMA)
              adalah perusahaan dibidang Jasa Konsultan Pertambangan dan Lingkungan berdomisili di Samarinda, Kalimantan Timur.
            </p>
            <p class="mt-4 text-justify wow fadeInRight" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">TAMA telah menghimpun dan memiliki
              sejumlah staf dan tenaga ahli yang berpengalaman serta kompeten di bidangnya masing-masing, sehingga setiap pekerjaan ditangani profesional.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="px-4 py-12 mb-12 overflow-x-hidden md:px-32" id="our-service">
    <!-- <div class="absolute right-[-180px]">
      <img src="https://qti.co.id/images/objek-right.png">
    </div> -->
    <div class="py-16">
      <div class="grid grid-cols-12">
        <div class="col-span-12">
          <div class="flex flex-col items-center justify-center wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
            <h4 class="mb-2 text-2xl text-red-600 uppercase">Produk & Layanan</h4>
            <p class="text-sm text-center w md:w-2/2">Tanaya Artha Gautama menghadirkan layanan terbaik untuk memenuhi kebutuhan produktivitas dan kredibilitas bisnis Anda</p>
          </div>
          <div class="mt-8 content-service">
            <ul class="flex flex-col space-y-6">
              <li class="shadow-[0_0_6px_0px_rgba(0,0,0,0.3)] text-slate-800 rounded-lg w-full my-0 wow fadeInLeft space-y-2 " data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                <a class="flex items-center space-x-4 md:py-4 md:px-6 lg:px-6 lg:pt-6 tab-button">
                  <h4 class="p-4 text-2xl text-center md:p-0 md:text-start">Konsultasi, Perencanaan, dan Pelaksanaan</h4>
                </a>
                <ul class="px-4 pb-6 space-y-4 sm:px-6">
                  <li class="space-y-2 transition-all wow fadeInLeft hover:-translate-y-2" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                    <p class="px-4 py-2 text-lg text-white rounded-t-md bg-slate-600">1. Eksplorasi</p>
                    <p class="px-4 pb-2 text-sm text-justify shadow-lg rounded-b-md text-slate-600">
                      Manajemen Eksplorasi, Penentuan Posisi,
                      Pemetaan Topografi dan Geologi, Geofisika,
                      Pemboran Eksplorasi dan Perhitungan Sumber
                      Daya & Cadangan
                    </p>
                  </li>
                  <li class="space-y-2 transition-all wow fadeInLeft hover:-translate-y-2" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                    <p class="px-4 py-2 text-lg text-white rounded-t-md bg-slate-600">2. Studi Kelayakan</p>
                    <p class="px-4 pb-2 text-sm text-justify shadow-lg rounded-b-md text-slate-600">Penyusunan AMDAL dan Studi Kelayakan</p>
                  </li>
                </ul>
              </li>
              <li class="shadow-[0_0_6px_0px_rgba(0,0,0,0.3)] text-slate-800 rounded-lg w-full my-0 wow fadeInRight space-y-2 " data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                <a class="flex items-center space-x-4 md:py-4 md:px-6 lg:px-6 lg:pt-6 tab-button">
                  <h4 class="p-4 text-2xl text-center md:p-0 md:text-start">Konsultasi dan Perencanaan</h4>
                </a>
                <ul class="px-4 pb-6 sm:px-6">
                  <li class="space-y-2 transition-all wow fadeInRight hover:-translate-y-2" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                    <p class="px-4 py-2 text-lg text-white rounded-t-md bg-slate-600">Pasca Tambang dan Reklamas</p>
                    <p class="px-4 pb-2 text-sm text-justify shadow-lg rounded-b-md text-slate-600">Reklamasi dan Penutupan Tambang</p>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="relative mb-16 overflow-hidden" id="our-client">
    <!-- <div class="absolute left-[-320px] top-[-70px]">
      <img src="https://qti.co.id/images/objek-left.png">
    </div> -->
    <div class="py-16 my-16 sm:mx-12 md:mx-12 lg:mx-24">
      <div class="grid grid-cols-12">
        <div class="col-span-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
          <div class="text-center">
            <h4 class="mb-2 text-2xl text-blue-700 uppercase">Bagian dari Klien Kami</h4>
          </div>
          <!-- <div class="flex items-center py-12 swiper-client">
            <div class="flex items-end space-x-2 swiper-wrapper">
              <div class="flex flex-col items-center justify-end w-24 h-full mx-0 space-y-4 swiper-slide"><img src="{{asset('/client-img/abi-smd.png')}}" alt="Flowers" class="w-2/3 mx-0">
                <p class="text-center">PT. Anggana Jaya Pribadi</p>
              </div>
              <div class="flex flex-col items-center justify-end w-24 h-full mx-0 space-y-4 swiper-slide"><img src="{{asset('/client-img/amethys.png')}}" alt="Flowers" class="w-2/3 mx-0">
                <p class="text-center">PT. Anggana Jaya Pribadi</p>
              </div>
              <div class="flex flex-col items-center justify-end w-24 h-full mx-0 space-y-4 swiper-slide"><img src="{{asset('/client-img/anggana-coal.png')}}" alt="Flowers" class="w-2/3 mx-0">
                <p class="text-center">PT. Anggana Jaya Pribadi</p>
              </div>
              <div class="flex flex-col items-center justify-end w-24 h-full mx-0 space-y-4 swiper-slide"><img src="{{asset('/client-img/anggaraksa.png')}}" alt="Flowers" class="w-2/3 mx-0">
                <p class="text-center">PT. Anggana Jaya Pribadi</p>
              </div>
              <div class="flex flex-col items-center justify-end w-24 h-full mx-0 space-y-4 swiper-slide"><img src="{{asset('/client-img/anugrah-pratama.png')}}" alt="Flowers" class="w-2/3 mx-0">
                <p class="text-center">PT. Anggana Jaya Pribadi</p>
              </div>
              <div class="flex flex-col items-center justify-end w-24 h-full mx-0 space-y-4 swiper-slide"><img src="{{asset('/client-img/aragon-tambang.png')}}" alt="Flowers" class="w-2/3 mx-0">
                <p class="text-center">PT. Anggana Jaya Pribadi</p>
              </div>
              <div class="flex flex-col items-center justify-end w-24 h-full mx-0 space-y-4 swiper-slide"><img src="{{asset('/client-img/arwana-prima.png')}}" alt="Flowers" class="w-2/3 mx-0">
                <p class="text-center">PT. Anggana Jaya Pribadi</p>
              </div>
              <div class="flex flex-col items-center justify-center w-24 mx-0 space-y-4 swiper-slide"><img src="{{asset('/client-img/batuah-energi.png')}}" alt="Flowers" class="w-2/3 mx-0">
                <p class="text-center">PT. Anggana Jaya Pribadi</p>
              </div>
              <div class="flex flex-col items-center justify-center w-24 mx-0 space-y-4 swiper-slide"><img src="{{asset('/client-img/berau-usaha-mandiri.png')}}" alt="Flowers" class="w-2/3 mx-0">
                <p class="text-center">PT. Anggana Jaya Pribadi</p>
              </div>
              <div class="flex flex-col items-center justify-center w-24 mx-0 space-y-4 swiper-slide"><img src="{{asset('/client-img/berau-jaya-energy.png')}}" alt="Flowers" class="w-2/3 mx-0">
                <p class="text-center">PT. Anggana Jaya Pribadi</p>
              </div>
              <div class="flex flex-col items-center justify-center w-24 mx-0 space-y-4 swiper-slide">
              </div>
            </div>
          </div> -->
          <div class="flex items-center justify-center py-12 ">
            <div class="grid gap-0 px-4 sm:grid-cols-2 md:grid-cols-6 md:gap-6">
              <?php foreach ($clients as $client) :?>
              <div class="flex flex-col items-center justify-end w-full h-full mx-0 space-y-4">
                <img src='{{asset("/client-img/$client->image")}}' alt="Flowers" class="w-full mx-0">
                <p class="text-center"><?= $client->name ?></p>
              </div>
              <?php endforeach; ?>
              <!-- <div class="flex flex-col items-center justify-end w-full h-full mx-0 space-y-4">
                <img src="{{asset('/client-img/amethys.png')}}" alt="Flowers" class="w-2/3 mx-0">
                <p class="text-center">PT. Anggana Jaya Pribadi</p>
              </div>
              <div class="flex flex-col items-center justify-end w-full h-full mx-0 space-y-4">
                <img src="{{asset('/client-img/anggana-coal.png')}}" alt="Flowers" class="w-2/3 mx-0">
                <p class="text-center">PT. Anggana Jaya Pribadi</p>
              </div>
              <div class="flex flex-col items-center justify-end w-full h-full mx-0 space-y-4">
                <img src="{{asset('/client-img/anggaraksa.png')}}" alt="Flowers" class="w-2/3 mx-0">
                <p class="text-center">PT. Anggana Jaya Pribadi</p>
              </div>
              <div class="flex flex-col items-center justify-end w-full h-full mx-0 space-y-4">
                <img src="{{asset('/client-img/anugrah-pratama.png')}}" alt="Flowers" class="w-2/3 mx-0">
                <p class="text-center">PT. Anggana Jaya Pribadi</p>
              </div>
              <div class="flex flex-col items-center justify-end w-full h-full mx-0 space-y-4">
                <img src="{{asset('/client-img/aragon-tambang.png')}}" alt="Flowers" class="w-2/3 mx-0">
                <p class="text-center">PT. Anggana Jaya Pribadi</p>
              </div>
              <div class="flex flex-col items-center justify-end w-full h-full mx-0 space-y-4">
                <img src="{{asset('/client-img/arwana-prima.png')}}" alt="Flowers" class="w-2/3 mx-0">
                <p class="text-center">PT. Anggana Jaya Pribadi</p>
              </div>
              <div class="flex flex-col items-center justify-center w-full mx-0 space-y-4">
                <img src="{{asset('/client-img/batuah-energi.png')}}" alt="Flowers" class="w-2/3 mx-0">
                <p class="text-center">PT. Anggana Jaya Pribadi</p>
              </div>
              <div class="flex flex-col items-center justify-center w-full mx-0 space-y-4">
                <img src="{{asset('/client-img/berau-usaha-mandiri.png')}}" alt="Flowers" class="w-2/3 mx-0">
                <p class="text-center">PT. Anggana Jaya Pribadi</p>
              </div>
              <div class="flex flex-col items-center justify-center w-full mx-0 space-y-4">
                <img src="{{asset('/client-img/berau-jaya-energy.png')}}" alt="Flowers" class="w-2/3 mx-0">
                <p class="text-center">PT. Anggana Jaya Pribadi</p>
              </div> -->
            </div>
            <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="mb-16 overflow-hidden sm:mx-12 md:mx-12 lg:mx-32" id="our-partner">
    <div class="py-16 my-16 ">
      <div class="grid grid-cols-12">
        <div class="col-span-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
          <div class="text-center">
            <h4 class="my-12 text-2xl text-blue-700 uppercase">Riwayat Pekerjaan</h4>
          </div>
          <div class="text-center">
            <h4 class="order-first text-slate-700 uppercase font-extrabold text-[120px]  sm:text-5xl">
              <span class="animate-[counter_3s_ease-out_forwards] tabular-nums [counter-set:_num_var(--num-transactions)] before:content-[counter(num)]" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;"> <span class="sr-only">557</span></span>
            </h4>
            <span class="text-lg font-semibold text-slate-400">Number Of Project</span>
          </div>
          <div class="px-4 mx-auto my-12 sm:px-12 lg:px-12">
            <table id="example" class="w-full table-fixed">
              <thead class="text-sm bg-slate-600">
                <tr class="text-white texts">
                  <th class="px-4 py-2">Name</th>
                  <th class="px-4 py-2">Position</th>
                  <th class="px-4 py-2">Office</th>
                  <th class="px-4 py-2">Age</th>
                  <th class="px-4 py-2">Start date</th>
                  <th class="px-4 py-2">Salary</th>
                </tr>
              </thead>
              <tbody class="text-sm text-center text-slate-500">
                <tr>
                  <td class="px-4 py-2 border">Tiger Nixon</td>
                  <td class="px-4 py-2 border">System Architect</td>
                  <td class="px-4 py-2 border">Edinburgh</td>
                  <td class="px-4 py-2 border">61</td>
                  <td class="px-4 py-2 border">2011/04/25</td>
                  <td class="px-4 py-2 border">$320,800</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 border">Garrett Winters</td>
                  <td class="px-4 py-2 border">Accountant</td>
                  <td class="px-4 py-2 border">Tokyo</td>
                  <td class="px-4 py-2 border">63</td>
                  <td class="px-4 py-2 border">2011/07/25</td>
                  <td class="px-4 py-2 border">$170,750</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 border">Ashton Cox</td>
                  <td class="px-4 py-2 border">Junior Technical Author</td>
                  <td class="px-4 py-2 border">San Francisco</td>
                  <td class="px-4 py-2 border">66</td>
                  <td class="px-4 py-2 border">2009/01/12</td>
                  <td class="px-4 py-2 border">$86,000</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 border">Cedric Kelly</td>
                  <td class="px-4 py-2 border">Senior Javascript Developer</td>
                  <td class="px-4 py-2 border">Edinburgh</td>
                  <td class="px-4 py-2 border">22</td>
                  <td class="px-4 py-2 border">2012/03/29</td>
                  <td class="px-4 py-2 border">$433,060</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 border">Airi Satou</td>
                  <td class="px-4 py-2 border">Accountant</td>
                  <td class="px-4 py-2 border">Tokyo</td>
                  <td class="px-4 py-2 border">33</td>
                  <td class="px-4 py-2 border">2008/11/28</td>
                  <td class="px-4 py-2 border">$162,700</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 border">Brielle Williamson</td>
                  <td class="px-4 py-2 border">Integration Specialist</td>
                  <td class="px-4 py-2 border">New York</td>
                  <td class="px-4 py-2 border">61</td>
                  <td class="px-4 py-2 border">2012/12/02</td>
                  <td class="px-4 py-2 border">$372,000</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 border">Herrod Chandler</td>
                  <td class="px-4 py-2 border">Sales Assistant</td>
                  <td class="px-4 py-2 border">San Francisco</td>
                  <td class="px-4 py-2 border">59</td>
                  <td class="px-4 py-2 border">2012/08/06</td>
                  <td class="px-4 py-2 border">$137,500</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 border">Herrod Chandler</td>
                  <td class="px-4 py-2 border">Sales Assistant</td>
                  <td class="px-4 py-2 border">San Francisco</td>
                  <td class="px-4 py-2 border">59</td>
                  <td class="px-4 py-2 border">2012/08/06</td>
                  <td class="px-4 py-2 border">$137,500</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 border">Ashton Cox</td>
                  <td class="px-4 py-2 border">Junior Technical Author</td>
                  <td class="px-4 py-2 border">San Francisco</td>
                  <td class="px-4 py-2 border">66</td>
                  <td class="px-4 py-2 border">2009/01/12</td>
                  <td class="px-4 py-2 border">$86,000</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 border">Cedric Kelly</td>
                  <td class="px-4 py-2 border">Senior Javascript Developer</td>
                  <td class="px-4 py-2 border">Edinburgh</td>
                  <td class="px-4 py-2 border">22</td>
                  <td class="px-4 py-2 border">2012/03/29</td>
                  <td class="px-4 py-2 border">$433,060</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 border">Airi Satou</td>
                  <td class="px-4 py-2 border">Accountant</td>
                  <td class="px-4 py-2 border">Tokyo</td>
                  <td class="px-4 py-2 border">33</td>
                  <td class="px-4 py-2 border">2008/11/28</td>
                  <td class="px-4 py-2 border">$162,700</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 border">Brielle Williamson</td>
                  <td class="px-4 py-2 border">Integration Specialist</td>
                  <td class="px-4 py-2 border">New York</td>
                  <td class="px-4 py-2 border">61</td>
                  <td class="px-4 py-2 border">2012/12/02</td>
                  <td class="px-4 py-2 border">$372,000</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 border">Airi Satou</td>
                  <td class="px-4 py-2 border">Accountant</td>
                  <td class="px-4 py-2 border">Tokyo</td>
                  <td class="px-4 py-2 border">33</td>
                  <td class="px-4 py-2 border">2008/11/28</td>
                  <td class="px-4 py-2 border">$162,700</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 border">Brielle Williamson</td>
                  <td class="px-4 py-2 border">Integration Specialist</td>
                  <td class="px-4 py-2 border">New York</td>
                  <td class="px-4 py-2 border">61</td>
                  <td class="px-4 py-2 border">2012/12/02</td>
                  <td class="px-4 py-2 border">$372,000</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 border">Airi Satou</td>
                  <td class="px-4 py-2 border">Accountant</td>
                  <td class="px-4 py-2 border">Tokyo</td>
                  <td class="px-4 py-2 border">33</td>
                  <td class="px-4 py-2 border">2008/11/28</td>
                  <td class="px-4 py-2 border">$162,700</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 border">Brielle Williamson</td>
                  <td class="px-4 py-2 border">Integration Specialist</td>
                  <td class="px-4 py-2 border">New York</td>
                  <td class="px-4 py-2 border">61</td>
                  <td class="px-4 py-2 border">2012/12/02</td>
                  <td class="px-4 py-2 border">$372,000</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 border">Airi Satou</td>
                  <td class="px-4 py-2 border">Accountant</td>
                  <td class="px-4 py-2 border">Tokyo</td>
                  <td class="px-4 py-2 border">33</td>
                  <td class="px-4 py-2 border">2008/11/28</td>
                  <td class="px-4 py-2 border">$162,700</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 border">Brielle Williamson</td>
                  <td class="px-4 py-2 border">Integration Specialist</td>
                  <td class="px-4 py-2 border">New York</td>
                  <td class="px-4 py-2 border">61</td>
                  <td class="px-4 py-2 border">2012/12/02</td>
                  <td class="px-4 py-2 border">$372,000</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 border">Airi Satou</td>
                  <td class="px-4 py-2 border">Accountant</td>
                  <td class="px-4 py-2 border">Tokyo</td>
                  <td class="px-4 py-2 border">33</td>
                  <td class="px-4 py-2 border">2008/11/28</td>
                  <td class="px-4 py-2 border">$162,700</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 border">Brielle Williamson</td>
                  <td class="px-4 py-2 border">Integration Specialist</td>
                  <td class="px-4 py-2 border">New York</td>
                  <td class="px-4 py-2 border">61</td>
                  <td class="px-4 py-2 border">2012/12/02</td>
                  <td class="px-4 py-2 border">$372,000</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 border">Airi Satou</td>
                  <td class="px-4 py-2 border">Accountant</td>
                  <td class="px-4 py-2 border">Tokyo</td>
                  <td class="px-4 py-2 border">33</td>
                  <td class="px-4 py-2 border">2008/11/28</td>
                  <td class="px-4 py-2 border">$162,700</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 border">Brielle Williamson</td>
                  <td class="px-4 py-2 border">Integration Specialist</td>
                  <td class="px-4 py-2 border">New York</td>
                  <td class="px-4 py-2 border">61</td>
                  <td class="px-4 py-2 border">2012/12/02</td>
                  <td class="px-4 py-2 border">$372,000</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 border">Airi Satou</td>
                  <td class="px-4 py-2 border">Accountant</td>
                  <td class="px-4 py-2 border">Tokyo</td>
                  <td class="px-4 py-2 border">33</td>
                  <td class="px-4 py-2 border">2008/11/28</td>
                  <td class="px-4 py-2 border">$162,700</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 border">Brielle Williamson</td>
                  <td class="px-4 py-2 border">Integration Specialist</td>
                  <td class="px-4 py-2 border">New York</td>
                  <td class="px-4 py-2 border">61</td>
                  <td class="px-4 py-2 border">2012/12/02</td>
                  <td class="px-4 py-2 border">$372,000</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 border">Airi Satou</td>
                  <td class="px-4 py-2 border">Accountant</td>
                  <td class="px-4 py-2 border">Tokyo</td>
                  <td class="px-4 py-2 border">33</td>
                  <td class="px-4 py-2 border">2008/11/28</td>
                  <td class="px-4 py-2 border">$162,700</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 border">Brielle Williamson</td>
                  <td class="px-4 py-2 border">Integration Specialist</td>
                  <td class="px-4 py-2 border">New York</td>
                  <td class="px-4 py-2 border">61</td>
                  <td class="px-4 py-2 border">2012/12/02</td>
                  <td class="px-4 py-2 border">$372,000</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 border">Airi Satou</td>
                  <td class="px-4 py-2 border">Accountant</td>
                  <td class="px-4 py-2 border">Tokyo</td>
                  <td class="px-4 py-2 border">33</td>
                  <td class="px-4 py-2 border">2008/11/28</td>
                  <td class="px-4 py-2 border">$162,700</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 border">Brielle Williamson</td>
                  <td class="px-4 py-2 border">Integration Specialist</td>
                  <td class="px-4 py-2 border">New York</td>
                  <td class="px-4 py-2 border">61</td>
                  <td class="px-4 py-2 border">2012/12/02</td>
                  <td class="px-4 py-2 border">$372,000</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 border">Airi Satou</td>
                  <td class="px-4 py-2 border">Accountant</td>
                  <td class="px-4 py-2 border">Tokyo</td>
                  <td class="px-4 py-2 border">33</td>
                  <td class="px-4 py-2 border">2008/11/28</td>
                  <td class="px-4 py-2 border">$162,700</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 border">Brielle Williamson</td>
                  <td class="px-4 py-2 border">Integration Specialist</td>
                  <td class="px-4 py-2 border">New York</td>
                  <td class="px-4 py-2 border">61</td>
                  <td class="px-4 py-2 border">2012/12/02</td>
                  <td class="px-4 py-2 border">$372,000</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 border">Airi Satou</td>
                  <td class="px-4 py-2 border">Accountant</td>
                  <td class="px-4 py-2 border">Tokyo</td>
                  <td class="px-4 py-2 border">33</td>
                  <td class="px-4 py-2 border">2008/11/28</td>
                  <td class="px-4 py-2 border">$162,700</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 border">Brielle Williamson</td>
                  <td class="px-4 py-2 border">Integration Specialist</td>
                  <td class="px-4 py-2 border">New York</td>
                  <td class="px-4 py-2 border">61</td>
                  <td class="px-4 py-2 border">2012/12/02</td>
                  <td class="px-4 py-2 border">$372,000</td>
                </tr>


                <!-- Add more rows as needed -->
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- Kontak -->
  <section class="my-16 overflow-hidden" id="contact">
    <div class="px-4 py-12 sm:mx-12 md:mx-12 lg:mx-32">
      <div class="grid gap-0 grid-col-span-12 md:gap-6">
        <div class="col-span-12">
          <div class="text-center mb-14 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
            <h4 class="text-2xl text-blue-700 uppercase">Kontak Kami</h4>
          </div>
          <div class="grid grid-cols-12 gap-0 sm:gap-8">
            <div class="col-span-12 mb-4 lg:col-span-5 lg:mb-0 wow fadeInLeft" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
              <div class="h-full md:shadow-[0_0_6px_0px_rgba(0,0,0,0.3)] p-4 md:px-12 md:py-16 rounded-3xl">
                <form>
                  <div class="mb-3">
                    <label for="name" class="block mb-3 ">
                      Nama
                    </label>
                    <input type="text" name="name" id="name" placeholder="Masukan nama anda..." class=" transition-all delay-75 w-full rounded-md border border-[#e0e0e0] bg-white py-[6px] px-3 text-base text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                  </div>
                  <div class="mb-3">
                    <label for="email" class="block mb-3">
                      Email
                    </label>
                    <input type="email" name="email" id="email" placeholder="Masukan email anda..." class="transition-all delay-75 w-full rounded-md border border-[#e0e0e0] bg-white py-[6px] px-3 text-base text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                  </div>
                  <div class="mb-3">
                    <label for="subject" class="block mb-3">
                      Subjek
                    </label>
                    <input type="subject" name="subject" id="subject" placeholder="Masukan Subjek..." class="transition-all delay-75 w-full rounded-md border border-[#e0e0e0] bg-white py-[6px] px-3 text-base text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                  </div>
                  <div class="mb-3">
                    <label for="message" class="block mb-3">
                      Pesan
                    </label>
                    <textarea class="transition-all delay-75 w-full rounded-md border border-[#e0e0e0] bg-white py-[6px] px-3 text-base font-normal text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" id="exampleCheck1" placeholder="Pesan yang anda..."></textarea>
                  </div>
                  <button type="submit" class="bg-slate-600 text-[16px] text-white rounded-sm w-full p-2">Kirim</button>
                </form>
              </div>
            </div>
            <div class="col-span-12 lg:col-span-7 wow fadeInRight" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInRight;">
              <div class="shadow-lg" id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.675510832069!2d117.116894!3d-0.4847758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67fc3e0b64cbf%3A0x58abfe8a1a69d679!2sPT%20Tanaya%20Artha%20Gautama!5e0!3m2!1sid!2sid!4v1711371907889!5m2!1sid!2sid" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div class="mt-6">
                <ul class="flex flex-col space-y-4">
                  <li class="flex items-center space-x-4">
                    <span>
                      <svg class="text-slate-800" fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 395.71 395.71" xml:space="preserve">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                          <g>
                            <path d="M197.849,0C122.131,0,60.531,61.609,60.531,137.329c0,72.887,124.591,243.177,129.896,250.388l4.951,6.738 c0.579,0.792,1.501,1.255,2.471,1.255c0.985,0,1.901-0.463,2.486-1.255l4.948-6.738c5.308-7.211,129.896-177.501,129.896-250.388 C335.179,61.609,273.569,0,197.849,0z M197.849,88.138c27.13,0,49.191,22.062,49.191,49.191c0,27.115-22.062,49.191-49.191,49.191 c-27.114,0-49.191-22.076-49.191-49.191C148.658,110.2,170.734,88.138,197.849,88.138z"></path>
                          </g>
                        </g>
                      </svg>
                    </span>
                    <span class="text-[12px]">
                      JL. MT. Haryono, Perum Mediterania Cluster Greece, Kel. Air Putih, Kec. Samarinda Ulu, Kota Samarinda,
                      Kalimantan Timur
                    </span>
                  </li>
                  <li class="flex items-center space-x-2">
                    <span>
                      <svg fill="#000000" width="28px" height="28px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                          <title>phone</title>
                          <path d="M0 10.375c0 0.938 0.344 1.969 0.781 3.063s1 2.125 1.438 2.906c1.188 2.063 2.719 4.094 4.469 5.781s3.813 3.094 6.125 3.938c1.344 0.531 2.688 1.125 4.188 1.125 0.75 0 1.813-0.281 2.781-0.688 0.938-0.406 1.781-1.031 2.094-1.781 0.125-0.281 0.281-0.656 0.375-1.094 0.094-0.406 0.156-0.813 0.156-1.094 0-0.156 0-0.313-0.031-0.344-0.094-0.188-0.313-0.344-0.563-0.5-0.563-0.281-0.656-0.375-1.5-0.875-0.875-0.5-1.781-1.063-2.563-1.469-0.375-0.219-0.625-0.313-0.719-0.313-0.5 0-1.125 0.688-1.656 1.438-0.563 0.75-1.188 1.438-1.625 1.438-0.219 0-0.438-0.094-0.688-0.25s-0.5-0.281-0.656-0.375c-2.75-1.563-4.594-3.406-6.156-6.125-0.188-0.313-0.625-0.969-0.625-1.313 0-0.406 0.563-0.875 1.125-1.375 0.531-0.469 1.094-1.031 1.094-1.719 0-0.094-0.063-0.375-0.188-0.781-0.281-0.813-0.656-1.75-0.969-2.656-0.156-0.438-0.281-0.75-0.313-0.906-0.063-0.094-0.094-0.219-0.125-0.375s-0.094-0.281-0.125-0.406c-0.094-0.281-0.25-0.5-0.406-0.625-0.156-0.063-0.531-0.156-0.906-0.188-0.375 0-0.813-0.031-1-0.031-0.094 0-0.219 0-0.344 0.031h-0.406c-1 0.438-1.719 1.313-2.25 2.344-0.5 1.031-0.813 2.188-0.813 3.219z"></path>
                        </g>
                      </svg>
                    </span>
                    <div class="flex flex-col text-[12px]">
                      <span class="m-0">> (0541) – 6522627</span>
                      <span class="mt-2">> +62811583222</span>
                    </div>
                  </li>
                  <li class="flex items-center space-x-4">
                    <span>
                      <svg fill="#000000" version="1.1" baseProfile="tiny" id="Layer_1" xmlns:x="&amp;ns_extend;" xmlns:i="&amp;ns_ai;" xmlns:graph="&amp;ns_graphs;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" width="24px" height="24px" viewBox="0 0 42.00 42.00" xml:space="preserve" stroke="#000000" stroke-width="0.00042000000000000007">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                          <path d="M40.5,31.5v-18c0,0-18.2,12.7-19.97,13.359C18.79,26.23,0.5,13.5,0.5,13.5v18c0,2.5,0.53,3,3,3h34 C40.029,34.5,40.5,34.061,40.5,31.5z M40.471,9.971c0-1.821-0.531-2.471-2.971-2.471h-34c-2.51,0-3,0.78-3,2.6l0.03,0.28 c0,0,18.069,12.44,20,13.12C22.57,22.71,40.5,10.1,40.5,10.1L40.471,9.971z"></path>
                        </g>
                      </svg>
                    </span>
                    <span class="text-[12px]"><a class="text-sky-600 hover:underline" href="mailto:info@qti.co.id">contact@tanaya.id</a></span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- !Footer -->
  <footer class="py-8 text-white bg-slate-600">
    <div class="md:mx-32">
      <div class="grid grid-cols-12">
        <div class="col-span-12 md:col-span-5">
          <div class="footer-logo">
            <a href="#home" class="block px-4">
              <img src="https://qti.co.id/images/logo-putih.png" class="px-4">
            </a>
          </div>
        </div>
        <div class="col-span-12 m-4 md:col-span-2 md:m-0">
          <ul class="flex flex-col justify-center text-sm">
            <li class="mb-4"><a href="#home">Beranda</a></li>
            <li class="mb-4"><a href="#about-us">Tentang Kami</a></li>
            <li class="mb-4"><a href="#our-service">Produk & Layanan</a></li>
            <li class="mb-4"><a href="#our-client">Project</a></li>
            <li class="mb-4"><a href="#contact">Kontak</a></li>
          </ul>
        </div>
        <div class="col-span-12 mx-4 md:col-span-5 md:m-0">
          <div class="flex flex-col space-y-4">
            <h4 class="text-2xl ">Kantor Pusat Perusahaan</h4>
            <ul class="flex flex-col space-y-4 text-sm">
              <li class="flex items-center space-x-4">
                <span>
                  <svg fill="#ffffff" height="24px" width="24px" version="1.1" id="Filled_Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                      <g id="Location-Filled">
                        <path d="M12,1C7.58,1,4,4.58,4,9c0,7.08,8,14,8,14s8-6.92,8-14C20,4.58,16.42,1,12,1z M12,12c-1.66,0-3-1.34-3-3s1.34-3,3-3 s3,1.34,3,3S13.66,12,12,12z"></path>
                      </g>
                    </g>
                  </svg>
                </span>
                <span>
                  JL. MT. Haryono, Perum Mediterania Cluster Greece, Kel. Air Putih, Kec. Samarinda Ulu, Kota Samarinda,
                  Kalimantan Timur
                </span>
              </li>
              <li class="flex items-center space-x-4">
                <span>
                  <svg fill="#ffffff" width="28px" height="28px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                      <title>phone</title>
                      <path d="M0 10.375c0 0.938 0.344 1.969 0.781 3.063s1 2.125 1.438 2.906c1.188 2.063 2.719 4.094 4.469 5.781s3.813 3.094 6.125 3.938c1.344 0.531 2.688 1.125 4.188 1.125 0.75 0 1.813-0.281 2.781-0.688 0.938-0.406 1.781-1.031 2.094-1.781 0.125-0.281 0.281-0.656 0.375-1.094 0.094-0.406 0.156-0.813 0.156-1.094 0-0.156 0-0.313-0.031-0.344-0.094-0.188-0.313-0.344-0.563-0.5-0.563-0.281-0.656-0.375-1.5-0.875-0.875-0.5-1.781-1.063-2.563-1.469-0.375-0.219-0.625-0.313-0.719-0.313-0.5 0-1.125 0.688-1.656 1.438-0.563 0.75-1.188 1.438-1.625 1.438-0.219 0-0.438-0.094-0.688-0.25s-0.5-0.281-0.656-0.375c-2.75-1.563-4.594-3.406-6.156-6.125-0.188-0.313-0.625-0.969-0.625-1.313 0-0.406 0.563-0.875 1.125-1.375 0.531-0.469 1.094-1.031 1.094-1.719 0-0.094-0.063-0.375-0.188-0.781-0.281-0.813-0.656-1.75-0.969-2.656-0.156-0.438-0.281-0.75-0.313-0.906-0.063-0.094-0.094-0.219-0.125-0.375s-0.094-0.281-0.125-0.406c-0.094-0.281-0.25-0.5-0.406-0.625-0.156-0.063-0.531-0.156-0.906-0.188-0.375 0-0.813-0.031-1-0.031-0.094 0-0.219 0-0.344 0.031h-0.406c-1 0.438-1.719 1.313-2.25 2.344-0.5 1.031-0.813 2.188-0.813 3.219z"></path>
                    </g>
                  </svg>
                </span>
                <div class="flex flex-col">
                  <span class="m-0">> (0541) – 6522627</span>
                  <span class="mt-2">> +62811583222</span>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="text-[12px] border-t-[1px] mt-4 text-center pt-4">
        © Copyright 2024. All Rights Reserved.
      </div>
    </div>
  </footer>
  <script src="https://qti.co.id/vendor/jquery/jquery.min.js"></script>
  <script src="https://qti.co.id/vendor/popper.js/popper.js"></script>
  <script src="https://qti.co.id/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://qti.co.id/vendor/swiper/js/swiper.min.js"></script>
  <script src="https://qti.co.id/vendor/smooth-scroll/smooth-scroll.min.js"></script>
  <script src="https://qti.co.id/vendor/wow/wow.min.js"></script>
  <!-- ! Data Table -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable({
        // Add any customization options here
        // scrollX:true
      });
    });
  </script>
  @vite('resources/js/index.js')
  <script>
    new WOW().init();
  </script>
</body>

</html>