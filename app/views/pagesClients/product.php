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
    <!--Home start-->
    <!--Filter start-->
    <div class="w-full md:w-2/3 shadow p-5 rounded-lg bg-white mt-10">
        <div class="relative">
          <div class="absolute flex items-center ml-2 h-full">
            <svg class="w-4 h-4 fill-current text-primary-gray-dark" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M15.8898 15.0493L11.8588 11.0182C11.7869 10.9463 11.6932 10.9088 11.5932 10.9088H11.2713C12.3431 9.74952 12.9994 8.20272 12.9994 6.49968C12.9994 2.90923 10.0901 0 6.49968 0C2.90923 0 0 2.90923 0 6.49968C0 10.0901 2.90923 12.9994 6.49968 12.9994C8.20272 12.9994 9.74952 12.3431 10.9088 11.2744V11.5932C10.9088 11.6932 10.9495 11.7869 11.0182 11.8588L15.0493 15.8898C15.1961 16.0367 15.4336 16.0367 15.5805 15.8898L15.8898 15.5805C16.0367 15.4336 16.0367 15.1961 15.8898 15.0493ZM6.49968 11.9994C3.45921 11.9994 0.999951 9.54016 0.999951 6.49968C0.999951 3.45921 3.45921 0.999951 6.49968 0.999951C9.54016 0.999951 11.9994 3.45921 11.9994 6.49968C11.9994 9.54016 9.54016 11.9994 6.49968 11.9994Z"></path>
            </svg>
          </div>
      
          <input type="text" placeholder="Search by listing, location, bedroom number..." class="px-8 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
            </div>
      
          <div class="flex items-center justify-between mt-4">
            <p class="font-medium">
              Filters
            </p>
      
            <button class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm font-medium rounded-md">
              Reset Filter
            </button>
          </div>
      
          <div>
            <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 mt-4">
              <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                <option value="">All Type</option>
                <option value="for-rent">For Rent</option>
                <option value="for-sale">For Sale</option>
              </select>
      
              <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                <option value="">Furnish Type</option>
                <option value="fully-furnished">Fully Furnished</option>
                <option value="partially-furnished">Partially Furnished</option>
                <option value="not-furnished">Not Furnished</option>
              </select>
      
              <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                <option value="">Any Price</option>
                <option value="1000">RM 1000</option>
                <option value="2000">RM 2000</option>
                <option value="3000">RM 3000</option>
                <option value="4000">RM 4000</option>
              </select>
      
              <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                <option value="">Floor Area</option>
                <option value="200">200 sq.ft</option>
                <option value="400">400 sq.ft</option>
                <option value="600">600 sq.ft</option>
                <option value="800 sq.ft">800</option>
                <option value="1000 sq.ft">1000</option>
                <option value="1200 sq.ft">1200</option>
              </select>
      
              <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                <option value="">Bedrooms</option>
                <option value="1">1 bedroom</option>
                <option value="2">2 bedrooms</option>
                <option value="3">3 bedrooms</option>
                <option value="4">4 bedrooms</option>
                <option value="5">5 bedrooms</option>
              </select>
      
              <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                <option value="">Bathrooms</option>
                <option value="1">1 bathroom</option>
                <option value="2">2 bathrooms</option>
                <option value="3">3 bathrooms</option>
                <option value="4">4 bathrooms</option>
                <option value="5">5 bathrooms</option>
              </select>
      
              <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                <option value="">Bathrooms</option>
                <option value="1">1 space</option>
                <option value="2">2 space</option>
                <option value="3">3 space</option>
              </select>
            </div>
          </div>
        </div>
    <!--Filter end-->

    
    <div class="categorie">
        <h1 class="m-6 text-center">Product</h1>
        <div class="container flex flex-wrap gap-y-8 justify-evenly">
          <div class="cl w-[220px] h-[320px] bg-slate-100 text-center">
            <h3 class="mt-8">smartphone</h3>
            <img src="../../../public/assets/image/mouse/m5.png" class="w-[200px] h-[110px] mt-[40px]" alt="">
            <p class="mt-4">name_product</p>
              <span>$120</span> <br>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[10px]" >Acheter</button></a>
          </div>
          <div class="cl w-[220px] h-[320px] bg-slate-100 text-center">
            <h3 class="mt-8">Ordinateur</h3>
            <img src="../../../public/assets/image/mouse/m6.png" class="w-[200px] h-[110px] mt-[40px]" alt="">
            <p class="mt-4">name_product</p>
              <span>$120</span> <br>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[10px]" >Acheter</button></a>
          </div>
          <div class="cl w-[220px] h-[320px] bg-slate-100 text-center">
            <h3 class="mt-8">Cables</h3>
            <img src="../../../public/assets/image/mouse/m3.png" class="w-[200px] h-[110px] mt-[40px]" alt="">
            <p class="mt-4">name_product</p>
              <span>$120</span> <br>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[10px]" >Acheter</button></a>
          </div>
          <div class="cl w-[220px] h-[320px] bg-slate-100 text-center">
            <h3 class="mt-8">Audio players</h3>
            <img src="../../../public/assets/image/mouse/m4.png" class="w-[200px] h-[110px] mt-[40px]" alt="">
            <p class="mt-4">name_product</p>
              <span>$120</span> <br>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[10px]" >Acheter</button></a>
          </div>
          <div class="cl w-[220px] h-[320px] bg-slate-100 text-center">
            <h3 class="mt-8">Montre</h3>
            <img src="../../../public/assets/image/monitor/m1.png" class="w-[220px] h-[100px] mt-[40px]" alt="">
            <p class="mt-4">name_product</p>
              <span>$120</span> <br>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[10px]" >Acheter</button></a>
          </div>
          <div class="cl w-[220px] h-[320px] bg-slate-100 text-center">
            <h3 class="mt-8 ">smartphone</h3>
            <img src="../../../public/assets/image/monitor/m2.png" class="w-[220px] h-[100px] mt-[40px]" alt="">
            <p class="mt-4">name_product</p>
            <span>$120</span> <br>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[10px] " >Acheter</button></a>
          </div>
          <div class="cl w-[220px] h-[320px] bg-slate-100 text-center">
            <h3 class="mt-8">Ordinateur</h3>
            <img src="../../../public/assets/image/monitor/m3.png" class="w-[220px] h-[100px] mt-[40px]" alt="">
            <p class="mt-4">name_product</p>
            <span>$120</span> <br>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[10px]" >Acheter</button></a>
          </div>
          <div class="cl w-[220px] h-[320px] bg-slate-100 text-center">
            <h3 class="mt-8">Cables</h3>
            <img src="../../../public/assets/image/monitor/m4.png" class="w-[220px] h-[100px] mt-[40px]" alt="">
            <p class="mt-4">name_product</p>
            <span>$120</span> <br>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[10px]" >Acheter</button></a>
          </div>
          <div class="cl w-[220px] h-[320px] bg-slate-100 text-center">
            <h3 class="mt-8">Audio players</h3>
            <img src="../../../public/assets/image/keyboard/k1.png" class="w-[200px] h-[100px] mt-[40px]" alt="">
            <p class="mt-4">name_product</p>
            <span>$120</span> <br>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[10px]" >Acheter</button></a>
          </div>
          <div class="cl w-[220px] h-[320px] bg-slate-100 text-center">
            <h3 class="mt-8">Montre</h3>
            <img src="../../../public/assets/image/keyboard/k2.png" class="w-[200px] h-[100px] mt-[40px]" alt="">
            <p class="mt-4">name_product</p>
            <span>$120</span> <br>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[10px]" >Acheter</button></a>
          </div>
          <div class="cl w-[220px] h-[320px] bg-slate-100 text-center">
            <h3 class="mt-8">Audio players</h3>
            <img src="../../../public/assets/image/keyboard/k3.png" class="w-[200px] h-[100px] mt-[40px]" alt="">
            <p class="mt-4">name_product</p>
            <span>$120</span> <br>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[10px]" >Acheter</button></a>
          </div>
          <div class="cl w-[220px] h-[320px] bg-slate-100 text-center">
            <h3 class="mt-8">Montre</h3>
            <img src="../../../public/assets/image/keyboard/k4.png" class="w-[200px] h-[100px] mt-[40px]" alt="">
            <p class="mt-4">name_product</p>
            <span>$120</span> <br>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[10px]" >Acheter</button></a>
          </div>
          <div class="cl w-[220px] h-[320px] bg-slate-100 text-center">
            <h3 class="mt-8">Audio players</h3>
            <img src="../../../public/assets/image/desktop/d1.png" class="w-[200px] h-[100px] mt-[40px]" alt="">
            <p class="mt-4">name_product</p>
            <span>$120</span> <br>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[10px]" >Acheter</button></a>
          </div>
          <div class="cl w-[220px] h-[320px] bg-slate-100 text-center">
            <h3 class="mt-8">Montre</h3>
            <img src="../../../public/assets/image/desktop/d2.png" class="w-[200px] h-[100px] mt-[40px]" alt="">
            <p class="mt-4">name_product</p>
            <span>$120</span> <br>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[10px]" >Acheter</button></a>
          </div>
          <div class="cl w-[220px] h-[320px] bg-slate-100 text-center">
            <h3 class="mt-8">Audio players</h3>
            <img src="../../../public/assets/image/desktop/d3.png" class="w-[200px] h-[100px] mt-[40px]" alt="">
            <p class="mt-4">name_product</p>
            <span>$120</span> <br>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[10px]" >Acheter</button></a>
          </div>
          <div class="cl w-[220px] h-[320px] bg-slate-100 text-center">
            <h3 class="mt-8">Montre</h3>
            <img src="../../../public/assets/image/desktop/d4.png" class="w-[200px] h-[100px] mt-[40px]" alt="">
            <p class="mt-4">name_product</p>
            <span>$120</span> <br>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[10px]" >Acheter</button></a>
          </div>
          <div class="cl w-[220px] h-[320px] bg-slate-100 text-center">
            <h3 class="mt-8">Audio players</h3>
            <img src="../../../public/assets/image/headphone/h1.png" class="w-[200px] h-[100px] mt-[40px]" alt="">
            <p class="mt-4">name_product</p>
            <span>$120</span> <br>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[10px]" >Acheter</button></a>
          </div>
          <div class="cl w-[220px] h-[320px] bg-slate-100 text-center">
            <h3 class="mt-8">Montre</h3>
            <img src="../../../public/assets/image/headphone/h2.png" class="w-[200px] h-[100px] mt-[40px]" alt="">
            <p class="mt-4">name_product</p>
            <span>$120</span> <br>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[10px]" >Acheter</button></a>
          </div>
          <div class="cl w-[220px] h-[320px] bg-slate-100 text-center">
            <h3 class="mt-8">Audio players</h3>
            <img src="../../../public/assets/image/headphone/h3.png" class="w-[200px] h-[100px] mt-[40px]" alt="">
            <p class="mt-4">name_product</p>
            <span>$120</span> <br>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[10px]" >Acheter</button></a>
          </div>
          <div class="cl w-[220px] h-[320px] bg-slate-100 text-center">
            <h3 class="mt-8">Montre</h3>
            <img src="../../../public/assets/image/headphone/h4.png" class="w-[200px] h-[100px] mt-[40px]" alt="">
            <p class="mt-4">name_product</p>
            <span>$120</span> <br>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[10px]" >Acheter</button></a>
          </div>
          <div class="cl w-[220px] h-[320px] bg-slate-100 text-center">
            <h3 class="mt-8">Audio players</h3>
            <img src="../../../public/assets/image/pc/p1.png" class="w-[200px] h-[100px] mt-[40px]" alt="">
            <p class="mt-4">name_product</p>
            <span>$120</span> <br>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[10px]" >Acheter</button></a>
          </div>
          <div class="cl w-[220px] h-[320px] bg-slate-100 text-center">
            <h3 class="mt-8">Montre</h3>
            <img src="../../../public/assets/image/pc/p2.png" class="w-[200px] h-[100px] mt-[40px]" alt="">
            <p class="mt-4">name_product</p>
            <span>$120</span> <br>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[10px]" >Acheter</button></a>
          </div>
          <div class="cl w-[220px] h-[320px] bg-slate-100 text-center">
            <h3 class="mt-8">Audio players</h3>
            <img src="../../../public/assets/image/pc/p3.png" class="w-[200px] h-[100px] mt-[40px]" alt="">
            <p class="mt-4">name_product</p>
            <span>$120</span> <br>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[10px]" >Acheter</button></a>
          </div>
          <div class="cl w-[220px] h-[320px] bg-slate-100 text-center">
            <h3 class="mt-8">Montre</h3>
            <img src="../../../public/assets/image/pc/p4.png" class="w-[200px] h-[100px] mt-[40px]" alt="">
            <p class="mt-4">name_product</p>
            <span>$120</span> <br>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[10px]" >Acheter</button></a>
          </div>
          <div class="cl w-[220px] h-[320px] bg-slate-100 text-center">
            <h3 class="mt-8">Audio players</h3>
            <img src="../../../public/assets/image/cartmere/cm1.png" class="w-[200px] h-[100px] mt-[40px]" alt="">
            <p class="mt-4">name_product</p>
            <span>$120</span> <br>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[10px]" >Acheter</button></a>
          </div>
          <div class="cl w-[220px] h-[320px] bg-slate-100 text-center">
            <h3 class="mt-8">Montre</h3>
            <img src="../../../public/assets/image/cartmere/cm2.png" class="w-[200px] h-[100px] mt-[40px]" alt="">
            <p class="mt-4">name_product</p>
            <span>$120</span> <br>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[10px]" >Acheter</button></a>
          </div>
          <div class="cl w-[220px] h-[320px] bg-slate-100 text-center">
            <h3 class="mt-8">Audio players</h3>
            <img src="../../../public/assets/image/cartmere/cm3.png" class="w-[200px] h-[100px] mt-[40px]" alt="">
            <p class="mt-4">name_product</p>
            <span>$120</span> <br>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[10px]" >Acheter</button></a>
          </div>
          <div class="cl w-[220px] h-[320px] bg-slate-100 text-center">
            <h3 class="mt-8">Montre</h3>
            <img src="../../../public/assets/image/cartmere/cm4.png" class="w-[200px] h-[100px] mt-[40px]" alt="">
            <p class="mt-4">name_product</p>
            <span>$120</span> <br>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[10px]" >Acheter</button></a>
          </div>
          <div class="cl w-[220px] h-[320px] bg-slate-100 text-center">
            <h3 class="mt-8">Audio players</h3>
            <img src="../../../public/assets/image/controller/c1.png" class="w-[200px] h-[100px] mt-[40px]" alt="">
            <p class="mt-4">name_product</p>
            <span>$120</span> <br>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[10px]" >Acheter</button></a>
          </div>
          <div class="cl w-[220px] h-[320px] bg-slate-100 text-center">
            <h3 class="mt-8">Montre</h3>
            <img src="../../../public/assets/image/controller/c2.png" class="w-[200px] h-[100px] mt-[40px]" alt="">
            <p class="mt-4">name_product</p>
            <span>$120</span> <br>
            <a href="product.php"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[10px]" >Acheter</button></a>
          </div>
          <!-- <div class="cl w-[170px] h-[200px] bg-slate-400"></div> -->
        </div>
        
    </div>
    <!--multiple page start-->
<div class="mt-11 text-center">
    <nav aria-label="Page navigation example">
        <ul class="inline-flex items-center -space-x-px">
        <li>
            <a href="#" class="block px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
            <span class="sr-only">Previous</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
            </a>
        </li>
        <li>
            <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
        </li>
        <li>
            <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
        </li>
        <li>
            <a href="#" aria-current="page" class="z-10 px-3 py-2 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
        </li>
        <li>
            <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
        </li>
        <li>
            <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
        </li>
        <li>
            <a href="#" class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
            <span class="sr-only">Next</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
            </a>
        </li>
        </ul>
    </nav>
</div>
  
    <!--multiple page end-->
    <!--Home end-->
    <!--Footer start-->
<footer class="p-4 bg-white rounded-lg shadow md:px-6 md:py-8 dark:bg-gray-900 mt-[100px]">
  <div class="sm:flex sm:items-center sm:justify-between">
      <a href="index.html" class="flex items-center mb-4 sm:mb-0">
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