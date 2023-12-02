<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="stylesheet" />
    <link rel="icon" href="/imgs/logo.png" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />


        <!-- Styles -->
        <style>
        /* html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}} */
        


        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">






    <header>
      <div class="headerbar">
        <div class="main-bar">
          <div id="logo">
            <img src="./imgs/milklogo.png" alt="" /><sub class="milk-logo"
              >Milky</sub
            >
          </div>
          <nav class="navbar">
            <a href="#home">HOME</a>
            <a href="#about">ABOUT</a>
            <a href="#services">SERVICES</a>
            <a href="#product">PRODUCT</a>
            <a href="#pages">PAGES</a>
            <a href="#contact">CONTACT</a>
          </nav>
        </div>
      </div>
      <button class="login"> <a href="{{ route('login') }}"> Login</button>
      <div id="menu" class="fas fa-bars"></div>
    </header><br><br><br><br>
   <div class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
         </div>


    <!-- home section -->
    <section style="background-image: url('{{ asset('imgs/cowbc01.jpg') }}');background-size: cover;" class="home" id="home">
      <div class="home-text">
        <h2 class="text-h2">welcome to our dairy farm</h2>
        <br />
        <h1 class="text-h1">
          The Farm of <br />
          Dairy products
        </h1>
        <br />
        <div>
          <button class="home-button1"> <a href="{{ route('login') }}"> Explore more</button>
          <figcaption class="home-figcap">
            If it’s your first time <br />
            visting us:
          </figcaption>
        </div>
        <button class="home-button2"> <a href="{{ route('login') }}"> Register Now</button>
      </div>
    </section>



    <!-- about section -->
    <section class="about" id="about">
      <h1 class="about-h1">ABOUT US</h1>
      <br />
      <div class="about-container">
        <div class="about-left">
          <img class="img-absolute" src="./imgs/childmilk04.jpg" alt="" />
          <div class="about-left-top">
            <div>
              <img class="about-img" src="./imgs/babymilk01.jpg" alt="" />
            </div>
            <div>
              <img class="about-img" src="./imgs/drinkmilk02.jpg" alt="" />
            </div>
          </div>
          <div class="about-left-buttom">
            <div>
              <img class="about-img" src="./imgs/cowmilk05.jpg" alt="" />
            </div>
            <div>
              <img class="about-img" src="./imgs/childmilk03.jpg" alt="" />
            </div>
          </div>
        </div>
        <div class="about-right">
          <p>
            Welcome to Milky, a modern and efficient agricultural venture
            dedicated to the sustainable management of livestock and the
            production of high-quality milk products.
          </p>
          <div class="about-right-buttom">
            <div class="left">
              <h1>Dedicated Services</h1>
              <br />
              Committed to excellence, we offer personalized and reliable
              services, ensuring the optimal health of our livestock and the
              production of premium-quality milk products for our valued
              customers in our business. <br /><br />
            </div>
            <div class="right">
              <h1>Organic Products</h1>
              <br />
              Pure and sustainable, our organic products embody nature's
              essence, delivering a healthy and eco-friendly choice for
              conscious consumers. <br />
            </div>
          </div>
          <div class="about-right-button">
            <div><button>Explore more</button></div>
            <div><button>Explore more</button></div>
          </div>
        </div>
      </div>
    </section>



    <!-- services section  -->
    <section class="services" id="services">
      <center>
        <h1 class="services-h1">SERVICES</h1>
        <br />
        <h2 class="header-h2">Services That We Offer</h2>
        <p class="header-p">For Entrepreneurs</p>
        <br />
      </center>
      <div class="div-top">
        <div class="service">
          <center>
            <img src="./imgs/cowmilk02.jpg" alt="" /><br /><br />
            <h3>
              Innovations in Dairy for <br />
              a Longer Future
            </h3>
            <br />
            <p>
              Show Me, Don’t Tell Me. Dairy Innovations for a Sustainable
              Future,” a new webinar from the National Dairy Council, features
              dairy farmers and innovators of all sizes and geographies
              discussing how they are constantly adopting new ...
            </p>
            <br />
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
          </center>
        </div>
        <div class="service">
          <center>
            <img src="./imgs/cupmilk02.jpg" alt="" /><br /><br />
            <h3>Breeding G Veterinary</h3>
            <br />
            <p>
              Striving for excellence, our breeding program focuses on
              cultivating superior genetic lines, while our dedicated veterinary
              care ensures the well-being and health of our animals, maintaining
              the highest standards in agriculture
            </p>
            <br /><br />
            <center>
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </center>
          </center>
        </div>
        <div class="service">
          <center>
            <img class="" src="./imgs/cupmilk02.jpg" alt="" /><br /><br />
            <h3>Breeding G Veterinary</h3>
            <br />
            <p>
              With tender care and expertise, we prioritize the well-being of
              our livestock, creating a stress-free environment for optimal milk
              product on. Our milking process combines precision and compassion,
              delivering top-quality dairy products
            </p>
            <br />
          </center>
          <center><i class="fa fa-arrow-right" aria-hidden="true"></i></center>
        </div>
      </div>
      <div class="div-mid">
          <div class="dairy-pro">
            <div><img src="./imgs/dairyprod01.jpg" alt="" /></div>
            <div>
              <h1>
                We Sell Best <br />
                Dairy Products
              </h1><br>
              <p>
                Indulge in unparalleled <br> quality; we offer the <br> finest dairy
                products, <br> meticulously crafted for <br> an exquisite taste
                experience.
              </p><br><br>
              <button>Read more!</button>
            </div>
          </div>
          <div class="fresh-milk">
            <div><img src="./imgs/freshmilk01.jpg" alt="" /></div>
            <div>
              <h1>
                We Deliver Fresh <br />
                Mild Worldwide
              </h1><br>
              <p>
                Global freshness at <br> your doorstep – experience <br> the finest,
                farm-to-table <br> milk delivered worldwide.
              </p><br>
              <button>Read more!</button>
            </div>
          </div>
        </div>
      <div class="div-bootom">
        <center>
          <h1 style="letter-spacing: 3px;">GALLERY</h1><br>
          <h4 style="letter-spacing: 3px; word-spacing: 10px;">THIS IS A PICTURE OF OUR FAVORITE BRANDS PRODUCT</h2>
        </center>
        <div class="galery">
          <img src="./imgs/dairymilk02.jpg" alt="" />
          <img src="./imgs/contmilk00.jpg" alt="" />
          <img src="./imgs/childmilk03.jpg" alt="" />
        </div>
        <div class="galery">
          <img src="./imgs/shopmilk02.jpg" alt="" />
          <img src="./imgs/drinkmilk02.jpg" alt="" />
          <img src="./imgs/contmilk05.jpg" alt="" />
        </div>
      </div>
    </section>


    <!-- product section  -->
    <section class="product" id="product">
    <div class="up-products">
      <center>
        <header>
          <h1>OUR PRODUCTS</h1><br>
          <h3>Our Dairy Products For <br> Healthy Living</h3>
        </header><br><br>
      </center>
      <div class="products">
        <div>
          <img src="./imgs/cupmilk03.jpg" alt="">
          <center> <figcaption>
             <h6>Pure Milk</h6>
            <p>$ 19.00</p>
        </figcaption></center>
        </div>
        <div>
          <img src="./imgs/contmilk02.jpg " alt="">
          <center><figcaption>
       <h6>Fresh meat</h6>
            <p>$ 34.00</p>
        </figcaption> </center>
        </div>
        <div>
          <img src="./imgs/measurmilk02.jpg" alt="">
          <center><figcaption>
        <h6>Dairy product</h6>
            <p>$ 24.00</p>
        </figcaption> <center>
        </div>
        
        <div>
          <img src="./imgs/cupmilk05.jpg" alt="">
        <center><figcaption>
        <h6>Organic Food</h6>
            <p>$ 44.00</p>
        </figcaption>
        </center>
        </div>
      </div><br><br>
      
        <div class="left-right-i">
            <div><i class="fa fa-angle-left"></i></div>
            <div><i class="fa fa-angle-right"></i></div>
        </div>
   
      </div>
      <div class="team">
        <center>
          <header>
            <h1 >OUR TEAM</h1><br>
            <h3>experienced Team Members</h3>
          </header><br><br>
        </center>
        <div class="team-members">
          <img src="./imgs/vetcow01.jpg" alt="">
          <img src="./imgs/vetcow02.jpg" alt="">
          <img src="./imgs/dairymilk01.jpg" alt="">
        </div>
      </div>
    </section>



    <!-- pages section  -->
    <section class="pages" id="pages">
      <!-- <h1>pages section</h1> -->
    </section>



    <!-- contact section  -->
    <section class="contact" id="contact">
      <h1>Testimonial</h1>
      <h2>What People Say About Our Dairy Farm</h2>
      <div class="div-mid">
          <div class="dairy-pro">
            <div><img src="./imgs/dairyprod01.jpg" alt="" /></div>
            <div>
              <p>
              Client feedback is invaluable for continuous improvement, providing insights into satisfaction and areas for enhancement in our products or services.
              </p><br><br>
              <h6>Hobie Kelly</h6>
              <p>Professional</p>
            </div>
          </div>
          <div class="fresh-milk">
            <div><img src="./imgs/freshmilk01.jpg" alt="" /></div>
            <div>
              <p>
              Client feedback is invaluable for continuous improvement, providing insights into satisfaction and areas for enhancement in our products or services.
              </p><br>
              <h6>Any Clistelle</h6>
              <p>Professional</p>
            </div>
          </div>
        </div>

    </section>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>
