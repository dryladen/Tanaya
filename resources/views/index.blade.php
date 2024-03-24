<html lang="en" class="scroll-smooth">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tanaya</title>
  @vite('resources/css/app.css')
  @vite('resources/css/style.css')
  <link rel="stylesheet" href="https://qti.co.id/vendor/swiper/css/swiper.css">
  <link rel="stylesheet" href="https://qti.co.id/vendor/animate.css/animate.min.css">
  <link href="https://qti.co.id/css/app.css" rel="stylesheet">
</head>

<body class="font-popp">
  <!-- ! Navbar -->
  <header class="md:px-20 lg:px-32 px-4 h-[70px] bg-slate-50 fixed z-10 w-full flex flex-wrap items-center py-2 shadow-md">
    <div class="flex-1 flex justify-between items-center">
      <a href="#" class="text-4xl font-bold">Tanaya</a>
    </div>
    <!-- Strip bar -->
    <label for="menu-toggle" class="pointer-cursor md:hidden block">
      <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
        <title>menu</title>
        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
      </svg>
    </label>
    <input class="hidden" type="checkbox" id="menu-toggle" />
    <div class="hidden md:flex md:items-end md:w-auto w-full text-sm " id="menu">
      <nav>
        <ul class="md:flex items-center text-[14px] justify-evenly text-gray-600 pt-4 md:pt-0">
          <li>
            <a class="md:p-2 py-3 px-0 block" href="#home">Home</a>
          </li>
          <li>
            <a class="md:p-2 py-3 px-0 block" href="#about-us">About Us</a>
          </li>
          <li>
            <a class="md:p-2 py-3 px-0 block" href="#our-service">Product and Services</a>
          </li>
          <li>
            <a class="md:p-2 py-3 px-0 block" href="#our-client">Our Client</a>
          </li>
          <li>
            <a class="md:p-2 py-3 px-0 block" href="#our-partner">Technology Partner</a>
          </li>
          <li>
            <a class="md:p-2 py-3 px-0 block" href="#contact">Contact Us</a>
          </li>
          <li>
            <a class="md:p-2 py-3 px-0 block" href="Company_Profil_QTI.pdf" target="_blank" title="Unduh Company Profile">
              <img src="download-icon.png" alt="">
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- Carousel -->
  <section class="overflow-hidden pt-8 mb-12" id="home">
    <div class="blue-box"></div>
    <div class="flex items-center md:mx-20 lg:mx-32 ">
      <div class="slider-header ">
        <div class="swiper-container swiper-container-initialized swiper-container-horizontal" id="swiper-with-pagination">
          <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
            <div class="swiper-slide swiper-slide-active h-64">
              <div class="grid grid-cols-12">
                <div class="col-span-12 sm:col-span-6 lg:col-span-6 xl:col-span-4 mb-4 lg:mb-0 wow slideInLeft w-full" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: slideInLeft;">
                  <h4 class="text-blue-700 text-2xl mb-2">Welcome to</h4>
                  <h1 class="text-[54px] leading-[67.2px] text-slate-800 ">Quantus <br> Telematika <br> Indonesia</h1>
                  <div class="mt-12">
                    <a href="#about-us" class="bg-blue-700 text-white p-1 px-4 rounded-full">Explore</a>
                  </div>
                </div>
                <div class="col-span-12 sm:col-span-6 lg:col-span-6 xl:col-span-8 items-center flex wow slideInRight w-full" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: slideInRight;">
                  <img src="https://qti.co.id/images/slider/data1.png" class="md:w-[450px] lg:w-full px-4">
                </div>
              </div>
            </div>
            <div class="swiper-slide swiper-slide-next">
              <div class="grid grid-cols-12">
                <div class="col-span-12 sm:col-span-4">
                  <img src="https://qti.co.id/images/slider/logo-analitiq.png" class="img-fluid">
                  <p class="mt-3">analitiQ is an analytics platform for monitoring your business on social media with high performance dashboard.</p>
                  <a href="#about-us" class="mt-3 block w-fit bg-blue-700 text-white p-1 px-4 rounded-full">Details</a>
                </div>
                <div class="col-span-12 sm:col-span-8 grid place-items-end">
                  <img src="https://qti.co.id/images/slider/analytics.png" width="500">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="grid grid-cols-12">
                <div class="col-span-12 sm:col-span-4">
                  <h4 class="text-2xl">Indonesian Covid-19 Data Integration</h4>
                  <p class="mt-3">Detail Tracking, Monitoring and Projection of Indonesian Covid-19 data from multiple sources (BNPB, Johns Hopkins, Online News, and Social Media). Visualizing R0, CFR and Spatial data into graphical representation.</p>
                  <a href="#about-us" class="mt-3 block w-fit bg-blue-700 text-white p-1 px-4 rounded-full">Details</a>
                </div>
                <div class="col-span-12 sm:col-span-8 grid place-items-end">
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
  <section class="overflow-hidden" id="about-us">
    <div class="object-about">
      <img src="https://qti.co.id/images/objek-left.png">
    </div>
    <div class="overflow-hidden mx-32 py-12 mb-12">
      <div class="grid grid-cols-12 gap-8">
        <div class="lg:col-span-5 text-center wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
          <img src="https://qti.co.id/images/about.png" class="img-fluid">
        </div>
        <div class="col-span-7">
          <div class="mb-4 wow fadeInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
            <h4 class="text-blue-700 uppercase text-2xl">About Us</h4>
            <p class="text-justify">Is an IT software startup, with innovation as the company driver, the main ingredient of QTI IT system solution. We take our organization as a slim, engineering-oriented structure. Eliminate as much as communication barrier to provide effective control and collaboration.</p>
            <p class="text-justify">Some of our engineers have been in the industry for over 15 years; QTI engineers experienced the bolts and nuts of complicated IT systems, over-hyped IT jargons, unrealistic targets and ups and downs of IT business. These experiences made us values street-smart engineering, and avoid shortcuts.</p>
          </div>
          <div class="wow fadeInRight" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInRight;">
            <h4 class="text-blue-700 uppercase text-2xl">Our Manifesto</h4>
            <p class="text-justify">We like to think that QTI as a server for our partner's needs to improve and enhance their businesses. QTI's balanced IT system solutions is our business value proposition.</p>
            <p class="text-justify">We take our partner's business process improvement as a target achievement. To provide a game changer IT system solution to our partners is something that we take as our mandatory achievement, and a profound satisfaction. From ground-up, with bottom-up approach, digs deep to understand our partner's needs and objectives is our approach in our engineering efforts in IT system development.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="overflow-hidden px-2 md:px-32 py-12 mb-12" id="our-service">
    <div class="object-service">
      <img src="https://qti.co.id/images/objek-right.png">
    </div>
    <div class="py-5">
      <div class="row">
        <div class="col-span-12">
          <div class="text-center wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
            <h4 class="text-blue-700 uppercase text-2xl">PRODUCT AND SERVICES</h4>
            <p>We don't want to push our ideas, we simply want to make what you want.</p>
          </div>
          <div class="content-service">
            <ul class="flex wow fadeInDown" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
              <li>
                <a data-toggle="tab" href="#menu1" class="active flex flex-col items-center">
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="84" height="86" viewBox="0 0 84 86">
                      <g id="Group_5" data-name="Group 5" transform="translate(-656 -1590)">
                        <path id="icons_dashboard" d="M50.541,116.83H46.6a3.937,3.937,0,0,0,0,7.874h3.937a3.937,3.937,0,0,0,0-7.874Zm15.748-3.937H62.352a3.949,3.949,0,0,0-3.937,3.937v3.937a3.949,3.949,0,0,0,3.937,3.937h3.937a3.949,3.949,0,0,0,3.937-3.937V116.83A3.949,3.949,0,0,0,66.289,112.893Zm15.748-7.874H78.1a3.949,3.949,0,0,0-3.937,3.937v11.811A3.949,3.949,0,0,0,78.1,124.7h3.937a3.949,3.949,0,0,0,3.937-3.937V108.956A3.949,3.949,0,0,0,82.037,105.019Zm1.969-19.685H71.013a1.969,1.969,0,0,0-1.378,3.346l3.74,3.74c-7.284,8.268-17.717,14.567-28.741,14.567a1.969,1.969,0,0,0,0,3.937c13.189,0,25.394-3.74,34.252-12.992l3.543,3.543a1.969,1.969,0,0,0,3.346-1.378V87.3a1.629,1.629,0,0,0-1.772-1.969Z" transform="translate(642.565 1539.454)" fill="#000"></path>
                        <path id="globe" d="M148.15,128a20.15,20.15,0,1,0,20.15,20.15A20.15,20.15,0,0,0,148.15,128Zm15.493,17.911h-5.754a31.614,31.614,0,0,0-2.642-11.709A15.672,15.672,0,0,1,163.643,145.911Zm-14.485,17.911h-2.015c-2.037-1.276-4.478-6.179-4.791-13.433h11.6c-.4,7.209-2.754,12.112-4.791,13.433Zm-6.717-17.911c.4-7.209,2.754-12.112,4.791-13.433h1.925c2.037,1.276,4.478,6.179,4.791,13.433ZM141.053,134.2a31.613,31.613,0,0,0-2.642,11.709h-5.754A15.672,15.672,0,0,1,141.053,134.2Zm-8.4,16.187h5.754a31.613,31.613,0,0,0,2.642,11.709A15.672,15.672,0,0,1,132.657,150.389Zm22.59,11.709a31.613,31.613,0,0,0,2.642-11.709h5.754a15.672,15.672,0,0,1-8.4,11.709Z" transform="translate(540.665 1468.908)" fill="#000"></path>
                        <g id="Rectangle_12" data-name="Rectangle 12" transform="translate(656 1590)" fill="none" stroke="#000" stroke-width="4">
                          <rect width="84" height="86" rx="11" stroke="none"></rect>
                          <rect x="2" y="2" width="80" height="82" rx="9" fill="none"></rect>
                        </g>
                      </g>
                    </svg>
                  </span>
                  Performance Dashboard
                </a>
              </li>
              <li>
                <a data-toggle="tab" href="#menu2" class="flex flex-col items-center">
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="84" height="86" viewBox="0 0 84 86">
                      <g id="Group_6" data-name="Group 6" transform="translate(713 -1648)">
                        <g id="Rectangle_13" data-name="Rectangle 13" transform="translate(-713 1648)" fill="none" stroke="#000" stroke-width="4">
                          <rect width="84" height="86" rx="11" stroke="none"></rect>
                          <rect x="2" y="2" width="80" height="82" rx="9" fill="none"></rect>
                        </g>
                        <path id="document" d="M248.678,137.427a1.339,1.339,0,0,0-.289-.561l-6.91-7.571a1.75,1.75,0,0,0-.545-.363,1.642,1.642,0,0,0-.776-.132h-13.2A1.925,1.925,0,0,0,225,130.691v27.674a2.144,2.144,0,0,0,1.957,2.138h20.07a1.981,1.981,0,0,0,1.75-2.138V138.212A3.046,3.046,0,0,0,248.678,137.427Zm-7.744-4.78,4.788,5.243h-4.788Zm-13.292,25.222V131.45h10.65V138.2a2.421,2.421,0,0,0,2.32,2.336h5.523v17.338Z" transform="translate(-892.405 1553.569)"></path>
                        <path id="document-2" data-name="document" d="M248.678,137.427a1.339,1.339,0,0,0-.289-.561l-6.91-7.571a1.75,1.75,0,0,0-.545-.363,1.642,1.642,0,0,0-.776-.132h-13.2A1.925,1.925,0,0,0,225,130.691v27.674a2.144,2.144,0,0,0,1.957,2.138h20.07a1.981,1.981,0,0,0,1.75-2.138V138.212A3.046,3.046,0,0,0,248.678,137.427Zm-7.744-4.78,4.788,5.243h-4.788Zm-13.292,25.222V131.45h10.65V138.2a2.421,2.421,0,0,0,2.32,2.336h5.523v17.338Z" transform="translate(-917.446 1534.316)"></path>
                        <g id="Group_4" data-name="Group 4" transform="translate(-1111 187)">
                          <path id="Subtraction_1" data-name="Subtraction 1" d="M23.582,24.725H6.208A2.971,2.971,0,0,0,6.5,23.433a3.007,3.007,0,0,0-.353-1.414H23.582a1.353,1.353,0,0,1,0,2.705ZM1.261,21.437V1.353a1.353,1.353,0,1,1,2.705,0V20.469a3,3,0,0,0-2.7.966Z" transform="translate(427 1494.067)"></path>
                          <g id="Ellipse_1" data-name="Ellipse 1" transform="translate(426 1489)" fill="none" stroke="#000" stroke-width="2">
                            <circle cx="3.5" cy="3.5" r="3.5" stroke="none"></circle>
                            <circle cx="3.5" cy="3.5" r="2.5" fill="none"></circle>
                          </g>
                          <g id="Ellipse_2" data-name="Ellipse 2" transform="translate(450 1514)" fill="none" stroke="#000" stroke-width="2">
                            <circle cx="3.5" cy="3.5" r="3.5" stroke="none"></circle>
                            <circle cx="3.5" cy="3.5" r="2.5" fill="none"></circle>
                          </g>
                          <g id="Ellipse_3" data-name="Ellipse 3" transform="translate(427 1514)" fill="none" stroke="#000" stroke-width="2">
                            <circle cx="3.5" cy="3.5" r="3.5" stroke="none"></circle>
                            <circle cx="3.5" cy="3.5" r="2.5" fill="none"></circle>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </span>
                  e-Government
                </a>
              </li>
              <li>
                <a data-toggle="tab" href="#menu3" class="flex flex-col items-center">
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="84" height="86" viewBox="0 0 84 86">
                      <g id="Group_7" data-name="Group 7" transform="translate(713 -1846)">
                        <g id="Rectangle_14" data-name="Rectangle 14" transform="translate(-713 1846)" fill="none" stroke="#000" stroke-width="4">
                          <rect width="84" height="86" rx="11" stroke="none"></rect>
                          <rect x="2" y="2" width="80" height="82" rx="9" fill="none"></rect>
                        </g>
                        <path id="service_manege" data-name="service manege" d="M34.778,21.083h3.629a4.653,4.653,0,0,0,0-9.307H34.778a4.653,4.653,0,0,0,0,9.307Zm-.824-4.653a.8.8,0,0,1,.8-.8h3.629a.8.8,0,1,1,0,1.6H34.756A.813.813,0,0,1,33.955,16.429ZM31.817,27.406a4.653,4.653,0,1,0,0,9.307h3.629a4.653,4.653,0,1,0,0-9.307Zm-.8,4.653a.8.8,0,0,1,.8-.8h3.629A.724.724,0,0,1,36,31.5a.809.809,0,0,1,.245.579.8.8,0,0,1-.8.8H31.817A.832.832,0,0,1,31.016,32.06Zm-8.973-4.386h3.629a4.653,4.653,0,1,0,0-9.307H22.043a4.653,4.653,0,0,0,0,9.307Zm-.8-4.653a.8.8,0,0,1,.8-.8h3.629a.8.8,0,1,1,0,1.6H22.043A.8.8,0,0,1,21.241,23.02ZM37.495,39.964c-.334,0-1.2,0-5.967,2.026-.646-2.16-1.024-2.561-1.247-2.783-.846-.846-11.823-6.813-14.985-6.813-2.85,0-13.693,2.583-13.8,2.605A1.9,1.9,0,0,0,0,36.869v9.574a1.915,1.915,0,0,0,1.915,1.915h8.171c1.959,1.113,10.643,5.923,16.187,6.88a1.577,1.577,0,0,0,.312.022c2.249,0,13.582-4.809,17.434-9.04a1.984,1.984,0,0,0,.49-1.291c.022-3.206-2.471-4.965-7.014-4.965ZM3.852,38.405c4.431-1,9.975-2.16,11.444-2.16,1.514,0,9.953,4.253,12.157,5.655.134.334.334.957.534,1.67-.067.022-.156.067-.223.089l-5.277-3.407a1.922,1.922,0,0,0-1.046-.312H18.926a1.913,1.913,0,0,0-1.336.6,1.991,1.991,0,0,0-.534,1.38,1.916,1.916,0,0,0,1.893,1.87h1.937l5.678,3.674a1.948,1.948,0,0,0,1.848.134,75.079,75.079,0,0,1,9.129-3.785,5.128,5.128,0,0,1,2.917.557c-3.518,3.05-12.023,6.724-13.782,7.058-5.5-1.069-15.007-6.568-15.1-6.635a1.829,1.829,0,0,0-.957-.267H3.852V38.405Z" transform="translate(-690.509 1855.081)"></path>
                      </g>
                    </svg>
                  </span>
                  IT Manage Service
                </a>
              </li>
              <li>
                <a data-toggle="tab" href="#menu4" class="flex flex-col items-center">
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="84" height="86" viewBox="0 0 84 86">
                      <g id="Group_8" data-name="Group 8" transform="translate(711 -1982)">
                        <g id="Rectangle_15" data-name="Rectangle 15" transform="translate(-711 1982)" fill="none" stroke="#000" stroke-width="4">
                          <rect width="84" height="86" rx="11" stroke="none"></rect>
                          <rect x="2" y="2" width="80" height="82" rx="9" fill="none"></rect>
                        </g>
                        <path id="monitor" d="M49.371,85.333H2.147A2.147,2.147,0,0,0,0,87.48v30.052a2.147,2.147,0,0,0,2.147,2.147H19.319v4.293H16.1a1.073,1.073,0,0,0-1.073,1.073v2.147a1.073,1.073,0,0,0,1.073,1.073H35.419a1.073,1.073,0,0,0,1.073-1.073v-2.147a1.073,1.073,0,0,0-1.073-1.073H32.2v-4.293H49.371a2.147,2.147,0,0,0,2.147-2.147V87.48A2.147,2.147,0,0,0,49.371,85.333Zm-2.147,30.052H4.293V89.626H47.225Z" transform="translate(-695 1918.333)"></path>
                        <path id="Union_3" data-name="Union 3" d="M9.857,22.1H.411a.4.4,0,1,1,0-.809H2.464V20.074a.815.815,0,0,1,.822-.809.408.408,0,0,0,.41-.4,1.61,1.61,0,0,1,.657-1.295,1.583,1.583,0,0,1,.8-.324L6.662,19.1a.412.412,0,0,0,.32.166.815.815,0,0,1,.821.809.408.408,0,0,0,.411.4,1.232,1.232,0,0,1,1.162.809H9.82l-.008-.032h.411A2.039,2.039,0,0,0,8.58,19.67a1.635,1.635,0,0,0-1.388-1.214L5.66,16.586a.412.412,0,0,0-.32-.153,2.493,2.493,0,0,0-1.232.324V15.623A2.038,2.038,0,0,1,6.16,13.6l2.465-2.428h2.053l1.232-1.214a2.038,2.038,0,0,1,2.054,2.023v.4a3.7,3.7,0,0,1,3.327,2.068.4.4,0,0,0-.189.162.4.4,0,0,0-.037.344,3.167,3.167,0,0,1,.185,1.068v.4a.4.4,0,0,0,.119.287l2.464,2.428a.413.413,0,0,0,.292.117.346.346,0,0,0,.156-.032.454.454,0,0,0,.135-.085l.53.522v1.618h1.642a.4.4,0,1,1,0,.809Zm8.214-5.831v-.239a3.9,3.9,0,0,0-.078-.785,2.033,2.033,0,0,1,1.721,2v.643ZM4.231,10.7l-.581-.572a.4.4,0,0,1,0-.572l6.189-6.1L11,4.606,4.812,10.7a.415.415,0,0,1-.581,0Zm10.1-3.439A8.107,8.107,0,0,0,13.1,5.706L9.167,1.833a.4.4,0,0,1,0-.575L10.329.118a.415.415,0,0,1,.579,0l2.234,2.2a8.031,8.031,0,0,1,2.419,5.75V9.287ZM12.507.83l.146-.143a.83.83,0,0,1,1.161,0,.8.8,0,0,1,0,1.144l-.145.143Z" transform="translate(-680 2009.675)"></path>
                      </g>
                    </svg>
                  </span>
                  Mining Production Monitoring System
                </a>
              </li>
              <li>
                <a data-toggle="tab" href="#menu5" class="flex flex-col items-center">
                  <span>
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="84" height="86" viewBox="0 0 84.000000 86.000000" preserveAspectRatio="xMidYMid meet">

                      <g transform="translate(0.000000,86.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                        <path d="M75 851 c-11 -5 -31 -21 -45 -36 l-25 -27 0 -359 0 -359 33 -32 32 -33 350 0 350 0 32 33 33 32 0 360 0 360 -33 32 -32 33 -338 2 c-185 1 -346 -2 -357 -6z m673 -37 c49 -13 52 -38 52 -384 0 -358 -2 -372 -61 -384 -40 -8 -617 -8 -647 0 -49 13 -52 38 -52 384 0 339 4 372 47 383 27 7 635 8 661 1z"></path>
                        <path d="M501 636 c-15 -18 -3 -46 20 -46 25 0 35 26 19 45 -15 19 -24 19 -39 1z"></path>
                        <path d="M605 592 c-9 -6 -35 -56 -35 -67 0 -3 7 -5 15 -5 9 0 20 12 26 27 12 31 8 56 -6 45z"></path>
                        <path d="M637 550 l-15 -40 -104 0 -103 0 -24 35 c-13 19 -28 35 -34 35 -11 0 -202 -101 -230 -122 -11 -9 -16 -20 -11 -31 6 -16 30 -17 283 -17 l277 0 27 83 c15 46 27 86 27 90 0 4 -17 7 -38 7 -36 0 -40 -3 -55 -40z m37 -46 c-9 -27 -20 -52 -24 -57 -3 -4 -113 -6 -244 -5 l-238 3 85 48 c47 26 90 47 96 47 5 0 18 -13 28 -30 l17 -30 127 0 126 0 16 42 c23 57 31 43 11 -18z"></path>
                        <path d="M513 550 c-2 -26 1 -30 24 -30 21 0 24 3 19 23 -3 12 -6 25 -6 30 0 4 -8 7 -17 7 -13 0 -19 -9 -20 -30z"></path>
                        <path d="M170 375 c0 -13 34 -15 250 -15 216 0 250 2 250 15 0 13 -34 15 -250 15 -216 0 -250 -2 -250 -15z"></path>
                        <path d="M220 285 c0 -51 3 -65 15 -65 12 0 15 14 15 65 0 51 -3 65 -15 65 -12 0 -15 -14 -15 -65z"></path>
                        <path d="M406 313 c-11 -71 -8 -93 14 -93 15 0 20 7 20 28 0 42 -12 102 -20 102 -4 0 -10 -17 -14 -37z"></path>
                        <path d="M590 285 c0 -51 3 -65 15 -65 12 0 15 14 15 65 0 51 -3 65 -15 65 -12 0 -15 -14 -15 -65z"></path>
                        <path d="M190 195 c0 -13 32 -15 230 -15 198 0 230 2 230 15 0 13 -32 15 -230 15 -198 0 -230 -2 -230 -15z"></path>
                      </g>
                    </svg>
                  </span>
                  Simulator
                </a>
              </li>
            </ul>
            <div class="tab-content">
              <div id="menu1" class="tab-pane fade active show">
                <div class="grid grid-cols-12">
                  <div class="col-span-12 md:col-span-7 mb-4 lg:mb-0 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                    <p>Our partners love to work with us, because our understanding comes from blending in to their environment, directly meet their challenges, exposed to the nuts and bolts of their systems, and experienced their pains. Managed services are some other things we do, mostly because our partners choose to master the business, and trust us to taking care the rest.</p>
                    <p>Wait, Big Data? On a Reporting Dashboard System? Why?</p>
                    <p>Well, text-mining, reports streaming, on clustered NoSQL platform is what our partner needs. They need to address their operational challenges, and our solution t in. Our solution involves RDBMS to NoSQL integration and migration, thanks to Foreign Data Wrapper and Spark SQL, and many other open source solution, this system is currently Operational. We Open Source,</p>
                  </div>
                  <div class="md:col-span-5 wow fadeInRight" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInRight;">
                    <img src="https://qti.co.id/images/performance_d.png" class="img-fluid">
                  </div>
                </div>
              </div>
              <div id="menu2" class="tab-pane fade">
                <div class="grid grid-cols-12">
                  <div class="col-span-12 md:col-span-7 mb-4 lg:mb-0">
                    <p>E-government improves efficiency and the effectiveness of public service delivery, promotes regional development and helps authorities to use available resources to their best advantage, thus contributing to the economic sustainability of regions. Initial efforts undertaken with respect to E-government were mostly focused on the short term, on getting isolated services online and publishing information without providing for regular updates. Trends now point in the direction of an integrated united model, contributing to more efficient and effective public services</p>
                  </div>
                  <div class="md:col-span-5">
                    <img src="https://qti.co.id/images/egoverment.svg" class="img-fluid">
                  </div>
                </div>
              </div>
              <div id="menu3" class="tab-pane fade">
                <div class="grid grid-cols-12">
                  <div class="col-span-12 md:col-span-7 mb-4 lg:mb-0">
                    <p>Our partners love to work with us, because our understanding comes from blending in to their environment, directly meet their challenges, exposed to the nuts and bolts of their systems, and experienced their pains. Managed services are some other things we do, mostly because our partners choose to master the business, and trust us to taking care the rest.</p>
                  </div>
                  <div class="md:col-span-5">
                    <img src="https://qti.co.id/images/itmanaged.svg" class="img-fluid">
                  </div>
                </div>
              </div>
              <div id="menu4" class="tab-pane fade">
                <div class="grid grid-cols-12">
                  <div class="col-span-12 md:col-span-7 mb-4 lg:mb-0">
                    <p>To visualized Mining Production Key Performance Indicator for Management, and Operators.</p>
                    <p>Mining Production KPIs shall be visualized in dashboard-style manner, to achieve and informative data representation that able to provide snapshots of recent and updated KPI.</p>
                    <p>To provide a collaborative Mining Production Reporting System, by providing built-in interactive media (messaging, chat) To adapt current mining production reporting, and provide an alternative reporting media that is credible and secure.</p>
                    <p>Users activity on the system is recorded and tracked</p>
                    <p>Reports are validated</p>
                    <p>Reports can be exported to various formats (pdf, MS Word/Excel, CSV)</p>
                  </div>
                  <div class="md:col-span-5">
                    <img src="https://qti.co.id/images/mining.svg" class="img-fluid">
                  </div>
                </div>
              </div>
              <div id="menu5" class="tab-pane fade">
                <div class="grid grid-cols-12">
                  <div class="md:col-span-6 mb-4 lg:mb-0">
                    <ul class="list-unstyled">
                      <li class="media">
                        <img src="https://qti.co.id/images/simulator/simulator-kapal.png" width="120" class="mr-3" alt="...">
                        <div class="media-body">
                          <h5 class="text-xl mt-0 mb-1">Vessel Simulator</h5>
                          <!-- <p>All my girls vintage Chanel baby. So you can have your cake. Tonight, tonight, tonight, I'm walking on air. Slowly swallowing down my fear, yeah yeah. Growing fast into a bolt of lightning. So hot and heavy, 'Til dawn. That fairy tale ending with a knight in shining armor. Heavy is the head that wears the crown.</p> -->
                        </div>
                      </li>
                      <li class="media my-4">
                        <img src="https://qti.co.id/images/simulator/simulator-pesawat-tempur-dn-drone.png" width="120" class="mr-3" alt="...">
                        <div class="media-body">
                          <h5 class="text-xl mt-0 mb-1">Aircraft &amp; Drone Simulator</h5>
                          <!-- <p>Maybe a reason why all the doors are closed. Cause once you’re mine, once you’re mine. Be your teenage dream tonight. Heavy is the head that wears the crown. It's not even a holiday, nothing to celebrate. A perfect storm, perfect storm.</p> -->
                        </div>
                      </li>
                      <li class="media">
                        <img src="https://qti.co.id/images/simulator/simulator-tank.png" width="120" class="mr-3" alt="...">
                        <div class="media-body">
                          <h5 class="text-xl mt-0 mb-1">Tank Simulator</h5>
                          <p>- APC Simulator<br>
                            - Tank gunnery Simulator<br>
                            - Hybrid Tank Simulator</p>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="md:col-span-6">
                    <!-- <img src="https://qti.co.id/images/itmanaged.svg" class="img-fluid" /> -->
                    <ul class="list-unstyled">
                      <li class="media">
                        <img src="https://qti.co.id/images/simulator/simulator-menembak.png" width="120" class="mr-3" alt="...">
                        <div class="media-body">
                          <h5 class="text-xl mt-0 mb-1">MARS Small Arm Simulator</h5>
                          <!-- <p>All my girls vintage Chanel baby. So you can have your cake. Tonight, tonight, tonight, I'm walking on air. Slowly swallowing down my fear, yeah yeah. Growing fast into a bolt of lightning. So hot and heavy, 'Til dawn. That fairy tale ending with a knight in shining armor. Heavy is the head that wears the crown.</p> -->
                        </div>
                      </li>
                      <li class="media my-4">
                        <img src="https://qti.co.id/images/simulator/simulator-machine-gun.png" width="120" class="mr-3" alt="...">
                        <div class="media-body">
                          <h5 class="text-xl mt-0 mb-1">Machine Gun Stability Simulation</h5>
                          <!-- <p>Maybe a reason why all the doors are closed. Cause once you’re mine, once you’re mine. Be your teenage dream tonight. Heavy is the head that wears the crown. It's not even a holiday, nothing to celebrate. A perfect storm, perfect storm.</p> -->
                          <p>- Laser tracking stability<br>
                            - Gun IMU gyroscope sensor<br>
                            - 3DOF + Motion Platform
                          </p>
                        </div>
                      </li>
                      <li class="media">
                        <img src="https://qti.co.id/images/simulator/simulator-parasut.png" width="120" class="mr-3" alt="...">
                        <div class="media-body">
                          <h5 class="text-xl mt-0 mb-1">Parachute Simulator</h5>
                          <!-- <p>Are you brave enough to let me see your peacock? There’s no going back. This is the last time you say, after the last line you break. At the eh-end of it all.</p> -->
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="overflow-hidden h-96" id="our-client">
    <div class="object-client">
      <img src="https://qti.co.id/images/objek-left.png">
    </div>
    <div class="py-5 my-5">
      <div class="grid grid-cols-12">
        <div class="col-span-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
          <div class="text-center">
            <h4 class="text-blue-700 uppercase text-2xl mb-2">OUR CLIENT</h4>
          </div>
          <div class="flex items-center justify-center space-x-8 w-full mt-8">
            <div class="">
              <picture>
                <source media=" (min-width:992px)" srcset="https://qti.co.id/images/clients/kejaksaan.png">
                <source media="(min-width:1200px)" srcset="https://qti.co.id/images/clients/kejaksaan.png">
                <source media="(min-width:768px)" srcset="https://qti.co.id/images/clients/kejaksaan.png">
                <img src="https://qti.co.id/images/clients/kejaksaan.png" alt="Flowers" style="width:auto;">
              </picture>
            </div>
            <div>
              <picture>
                <source media="(min-width:992px)" srcset="https://qti.co.id/images/clients/mandiri.png">
                <source media="(min-width:1200px)" srcset="https://qti.co.id/images/clients/mandiri.png">
                <source media="(min-width:768px)" srcset="https://qti.co.id/images/clients/mandiri.png">
                <img src="https://qti.co.id/images/clients/mandiri.png" alt="Flowers" style="width:auto;">
              </picture>
            </div>
            <div>
              <picture>
                <source media="(min-width:992px)" srcset="https://qti.co.id/images/clients/bgr.png">
                <source media="(min-width:1200px)" srcset="https://qti.co.id/images/clients/bgr.png">
                <source media="(min-width:768px)" srcset="https://qti.co.id/images/clients/bgr.png">
                <img src="https://qti.co.id/images/clients/bgr.png" alt="Flowers" style="width:auto;">
              </picture>
            </div>
            <div>
              <picture>
                <source media="(min-width:992px)" srcset="https://qti.co.id/images/clients/peruri.png">
                <source media="(min-width:1200px)" srcset="https://qti.co.id/images/clients/peruri.png">
                <source media="(min-width:768px)" srcset="https://qti.co.id/images/clients/peruri.png">
                <img src="https://qti.co.id/images/clients/peruri.png" alt="Flowers" style="width:auto;">
              </picture>
            </div>
            <div>
              <picture>
                <source media="(min-width:992px)" srcset="https://qti.co.id/images/clients/pupuk.png">
                <source media="(min-width:1200px)" srcset="https://qti.co.id/images/clients/pupuk.png">
                <source media="(min-width:768px)" srcset="https://qti.co.id/images/clients/pupuk.png">
                <img src="https://qti.co.id/images/clients/pupuk.png" alt="Flowers" style="width:auto;">
              </picture>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="overflow-hidden" id="our-partner">
    <!-- <div class="object-client">
                <img src="https://qti.co.id/images/objek-left.png" />
            </div> -->
    <div class="py-12 my-12">
      <div class="grid grid-cols-12">
        <div class="col-span-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
          <div class="text-center">
            <h4 class="text-blue-700 uppercase text-2xl">TECHNOLOGY PARTNER</h4>
          </div>
          <div class="flex justify-center space-x-8 mt-8">
            <div>
              <picture>
                <source media="(min-width:892px)" srcset="https://qti.co.id/images/partner/Mirantis_logo.svg.png">
                <source media="(min-width:1200px)" srcset="https://qti.co.id/images/partner/Mirantis_logo.svg.png">
                <source media="(min-width:768px)" srcset="https://qti.co.id/images/partner/Mirantis_logo.svg.png">
                <img src="https://qti.co.id/images/partner/Mirantis_logo.svg.png" alt="Mirantis" style="width:auto;">
              </picture>
            </div>
            <div>
              <picture>
                <source media="(min-width:892px)" srcset="https://qti.co.id/images/partner/Westcon.png">
                <source media="(min-width:1200px)" srcset="https://qti.co.id/images/partner/Westcon.png">
                <source media="(min-width:768px)" srcset="https://qti.co.id/images/partner/Westcon.png">
                <img src="https://qti.co.id/images/partner/Westcon.png" alt="Westcon" style="width:auto;">
              </picture>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="overflow-hidden mb-12" id="contact">
    <div class="py-12 mx-32">
      <div class="grid grid-col-span-12 gap-6">
        <div class="col-span-12">
          <div class="text-center mb-14 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
            <h4 class="text-blue-700 uppercase text-2xl">CONTACT US</h4>
            <p>Here you can see our contact.</p>
          </div>
          <div class="grid grid-cols-12 gap-8">
            <div class="lg:col-span-5 col-span-12 mb-4 lg:mb-0 wow fadeInLeft" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
              <div class="h-full shadow-[0_0_8px_0px_rgba(0,0,0,0.3)] px-12 py-16 rounded-3xl">
                <form>
                  <div class="mb-3">
                    <label for="name" class="mb-3 block  ">
                      Name
                    </label>
                    <input type="text" name="name" id="name" placeholder="Your Name..." class=" transition-all delay-75 w-full rounded-md border border-[#e0e0e0] bg-white py-[6px] px-3 text-base text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                  </div>
                  <div class="mb-3">
                    <label for="email" class="mb-3 block">
                      Email
                    </label>
                    <input type="email" name="email" id="email" placeholder="Your Email..." class="transition-all delay-75 w-full rounded-md border border-[#e0e0e0] bg-white py-[6px] px-3 text-base text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                  </div>
                  <div class="mb-3">
                    <label for="subject" class="mb-3 block">
                      Subject
                    </label>
                    <input type="subject" name="subject" id="subject" placeholder="Your Subject..." class="transition-all delay-75 w-full rounded-md border border-[#e0e0e0] bg-white py-[6px] px-3 text-base text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                  </div>
                  <div class="mb-3">
                    <label for="message" class="mb-3 block">
                      Message
                    </label>
                    <textarea class="transition-all delay-75 w-full rounded-md border border-[#e0e0e0] bg-white py-[6px] px-3 text-base font-normal text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" id="exampleCheck1" placeholder="Your Message..."></textarea>
                  </div>
                  <button type="submit" class="bg-sky-600 text-[16px] text-white rounded-sm w-full p-2">Submit</button>
                </form>
              </div>
            </div>
            <div class="lg:col-span-7 col-span-12 wow fadeInRight" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInRight;">
              <div class="map" id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.2338543731194!2d107.6116097291422!3d-6.89832786829189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e731e91c9747%3A0x6269de9e0e18a3d9!2sJl.%20Badak%20Singa%20No.2%2C%20Lb.%20Siliwangi%2C%20Kecamatan%20Coblong%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040132!5e0!3m2!1sid!2sid!4v1595476498825!5m2!1sid!2sid" height="350" width="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
              <div class="footer-address address-contact">
                <h4 class="text-blue-700 text-2xl mb-2">Workshop</h4>
                <ul>
                  <li class="flex items-center space-x-2">
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
                    <span>Jl. Badak Singa No. 2, Bandung - Jawa Barat, 40114 - Indonesia</span>
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
                    <span>+6222 - 204 62622</span>
                  </li>
                  <li class="flex items-center space-x-2">
                    <span>
                      <svg fill="#000000" version="1.1" baseProfile="tiny" id="Layer_1" xmlns:x="&amp;ns_extend;" xmlns:i="&amp;ns_ai;" xmlns:graph="&amp;ns_graphs;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" width="24px" height="24px" viewBox="0 0 42.00 42.00" xml:space="preserve" stroke="#000000" stroke-width="0.00042000000000000007">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                          <path d="M40.5,31.5v-18c0,0-18.2,12.7-19.97,13.359C18.79,26.23,0.5,13.5,0.5,13.5v18c0,2.5,0.53,3,3,3h34 C40.029,34.5,40.5,34.061,40.5,31.5z M40.471,9.971c0-1.821-0.531-2.471-2.971-2.471h-34c-2.51,0-3,0.78-3,2.6l0.03,0.28 c0,0,18.069,12.44,20,13.12C22.57,22.71,40.5,10.1,40.5,10.1L40.471,9.971z"></path>
                        </g>
                      </svg>
                    </span>
                    <span><a class="text-sky-600 hover:underline" href="mailto:info@qti.co.id">info@qti.co.id</a></span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="mx-32">
      <div class="grid grid-cols-12">
        <div class="md:col-span-5">
          <div class="footer-logo">
            <a href="#home" class="smooth">
              <img src="https://qti.co.id/images/logo-putih.png" class="img-fluid">
            </a>
          </div>
        </div>
        <div class="md:col-span-2 my-4 md:my-0">
          <ul class="footer-menu justify-content-center">
            <li><a class="smooth" href="#home">Home</a></li>
            <li><a class="smooth" href="#about">About Us</a></li>
            <li><a class="smooth" href="#our-service">Our Service</a></li>
            <li><a class="smooth" href="#our-client">Our Client</a></li>
            <li><a class="smooth" href="#contact">Contact</a></li>
          </ul>
        </div>
        <div class="md:col-span-5">
          <div class="footer-address">
            <h4 class="text-2xl ">Corporate Headquarters</h4>
            <ul>
              <li class="flex items-center">
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
                <span>Jl. Badak Singa No. 2, Bandung - Jawa Barat, 40114 - Indonesia</span>
              </li>
              <li class="flex items-center">
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
                <span>+6222 - 204 62622</span>
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

  <script src="https://qti.co.id/js/index.js"></script>
  <script>
    new WOW().init();
  </script>


</body>

</html>