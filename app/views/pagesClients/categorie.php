<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="assets/js/main.js"></script>
    <title>ElectroMaroc</title>
</head>
<body>
    <!--header start-->
        
<nav class="bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900  w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
  <div class="container flex flex-wrap items-center justify-between mx-auto">
  <a href="index.php" class="flex items-center">
      <img src="../../../public/assets/image/Untitled_design_1_-removebg-preview.png" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo">
      <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white text-gray-500">Aquos</span>
  </a>
  <div class="flex md:order-2">
    <a href="login.php"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</button></a>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="index.php" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
      </li>
      <li>
        <a href="categorie.php" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">categorie</a>
      </li>
      <li>
        <a href="product.php" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Produits</a>
      </li>
      <li>
        <a href="about.php" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
      </li>
      <li>
        <a href="contact.php" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
      </li>
    </ul>
  </div>
  </div>
</nav>

    <!--header end-->
    <!--Slide start-->   
    <div id="indicators-carousel" class="relative bg-gray-200" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <img src="../../../public/assets/image/cartmere/cm1.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 " alt="">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="../../../public/assets/image/controller/c1.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="../../../public/assets/image/desktop/d1.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="../../../public/assets/image/headphone/h1.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="../../../public/assets/image/mouse/m6.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-black sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-black sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
      </div>
    <!--slide end-->
    <!--categorie start-->
        <div class="categorie">
        <h1 class="m-6">Shop our categorie</h1>
        <div class="container flex gap-0.5 justify-evenly">
          <div class="cl w-[190px] h-[250px] bg-slate-100 text-center bg-gradient-to-r from-cyan-500 to-blue-500 relative">
              <img src="../../../public/assets/image/controller/c2.png" alt="" class=" absolute w-[200px] h-[100px] mt-20">
              <h3 class="mt-8">Controller</h3>
              <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[140px]" >view</button></a>
          </div>
          <div class="cl w-[190px] h-[250px] bg-slate-100 text-center bg-gradient-to-r from-cyan-500 to-blue-500 relative">
            <img src="../../../public/assets/image/controller/c2.png" alt="" class=" absolute w-[200px] h-[100px] mt-20">
            <h3 class="mt-8">Ordinateur</h3>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[140px]" >view</button></a>
          </div>
          <div class="cl w-[190px] h-[250px] bg-slate-100 text-center bg-gradient-to-r from-cyan-500 to-blue-500 relative">
            <img src="../../../public/assets/image/controller/c2.png" alt="" class=" absolute w-[200px] h-[100px] mt-20">
            <h3 class="mt-8">Cables</h3>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[140px]" >view</button></a>
          </div>
          <div class="cl w-[190px] h-[250px] bg-slate-100 text-center bg-gradient-to-r from-cyan-500 to-blue-500 relative">
            <img src="../../../public/assets/image/controller/c2.png" alt="" class=" absolute w-[200px] h-[100px] mt-20">
            <h3 class="mt-8">Audio players</h3>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[140px]" >view</button></a>
          </div>
          <div class="cl w-[190px] h-[250px] bg-slate-100 text-center bg-gradient-to-r from-cyan-500 to-blue-500 relative">
            <img src="../../../public/assets/image/controller/c2.png" alt="" class=" absolute w-[200px] h-[100px] mt-20">
            <h3 class="mt-8">Montre</h3>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[140px]" >view</button></a>
          </div>
          <!-- <div class="cl w-[170px] h-[200px] bg-slate-400"></div> -->
        </div>
    </div>
    <!--categorie end-->
  
    <!--Footer start-->
<footer class="p-4 bg-white rounded-lg shadow md:px-6 md:py-8 dark:bg-gray-900 mt-[100px]">
  <div class="sm:flex sm:items-center sm:justify-between">
      <a href="index.php" class="flex items-center mb-4 sm:mb-0">
          <img src="../../../public/assets/image/Untitled_design_1_-removebg-preview.png" class="mr-3 h-8" alt="Flowbite Logo" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
      </a>
      <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-500 sm:mb-0 dark:text-gray-400">
          <li>
              <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
          </li>
          <li>
              <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
          </li>
          <li>
              <a href="#" class="mr-4 hover:underline md:mr-6 ">Licensing</a>
          </li>
          <li>
              <a href="#" class="hover:underline">Contact</a>
          </li>
      </ul>
  </div>
  <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
  <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
  </span>
</footer>
    <!--Footer end-->
</body>
</html>