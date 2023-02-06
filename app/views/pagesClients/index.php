    <?php include_once APPROOT . '/views/includes/header.php'; ?>
    <!--Home page start-->
    <!--Slide start-->   
      <div id="indicators-carousel" class="relative bg-gray-200" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <img src="<?=URLROOT?>/assets/image/pexels-karol-d-325153.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="<?=URLROOT?>/assets/image/pexels-fauxels-3183132.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="<?=URLROOT?>/assets/image/slide.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="<?=URLROOT?>/assets/image/pexels-fauxels-3183132.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="<?=URLROOT?>/assets/image/pexels-fauxels-3183132.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
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
<div class="categorie">
  <h1 class="m-6">Shop our categorie</h1>
  <div class="container flex gap-0.5 justify-evenly">
    <div class="cl w-[190px] h-[250px] bg-slate-100 text-center bg-gradient-to-r from-cyan-500 to-blue-500 relative">
        <img src="<?=URLROOT?>/assets/image/controller/c2.png" alt="" class=" absolute w-[200px] h-[100px] mt-20">
        <h3 class="mt-8">Controller</h3>
        <a href="product.html"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[140px]" >view</button></a>
    </div>
    <div class="cl w-[190px] h-[250px] bg-slate-100 text-center bg-gradient-to-r from-cyan-500 to-blue-500 relative">
      <img src="<?=URLROOT?>/assets/image/controller/c2.png" alt="" class=" absolute w-[200px] h-[100px] mt-20">
      <h3 class="mt-8">Ordinateur</h3>
      <a href="product.html"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[140px]" >view</button></a>
    </div>
    <div class="cl w-[190px] h-[250px] bg-slate-100 text-center bg-gradient-to-r from-cyan-500 to-blue-500 relative">
      <img src="<?=URLROOT?>/assets/image/controller/c2.png" alt="" class=" absolute w-[200px] h-[100px] mt-20">
      <h3 class="mt-8">Cables</h3>
      <a href="product.html"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[140px]" >view</button></a>
    </div>
    <div class="cl w-[190px] h-[250px] bg-slate-100 text-center bg-gradient-to-r from-cyan-500 to-blue-500 relative">
      <img src="<?=URLROOT?>/assets/image/controller/c2.png" alt="" class=" absolute w-[200px] h-[100px] mt-20">
      <h3 class="mt-8">Audio players</h3>
      <a href="product.html"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[140px]" >view</button></a>
    </div>
    <div class="cl w-[190px] h-[250px] bg-slate-100 text-center bg-gradient-to-r from-cyan-500 to-blue-500 relative">
      <img src="<?=URLROOT?>/assets/image/controller/c2.png" alt="" class=" absolute w-[200px] h-[100px] mt-20">
      <h3 class="mt-8">Montre</h3>
      <a href="product.html"><button class="rounded-lg bg-amber-400 w-20 h-10 mt-[140px]" >view</button></a>
    </div>
    <!-- <div class="cl w-[170px] h-[200px] bg-slate-400"></div> -->
  </div>
</div>

  <div class="services">
    <h1 class="m-6">service to help your shop</h1>
    <div class="container flex gap-0.5 justify-around">
          <div class="cl w-[350px] h-[350px] bg-slate-100 flex-col gap-x-2.5">
            <h1 class="mt-8 text-left ml-10">Frequently Asked Questions</h1>
            <p class="text-left ml-10"> Updates on safe shopping in <br> our store</p>
            <img class="w-[350px] h-[200px] mt-11" src="<?=URLROOT?>/assets/image/pexels-fauxels-3183132.jpg" alt="">
          </div>
          <div class="cl w-[350px] h-[250px] bg-slate-100 ">
            <h1 class="mt-8 text-left ml-10">Online Payments process</h1>
            <p class="text-left ml-10"> Updates on safe shopping in <br> our store</p>
            <img class="w-[350px] h-[200px] mt-11" src="<?=URLROOT?>/assets/image/pexels-fauxels-3183132.jpg" alt="">
          </div>
          <div class="cl w-[350px] h-[250px] bg-slate-100">
            <h1 class="mt-8 text-left ml-10">Home Delivery Options</h1>
            <p class="text-left ml-10"> Updates on safe shopping in <br> our store</p>
            <img class="w-[350px] h-[200px] mt-11" src="<?=URLROOT?>/assets/image/pexels-fauxels-3183132.jpg" alt="">
          </div>
      </div>
  </div>
    
    <!--Home page end-->
    <?php include_once APPROOT . '/views/includes/footer.php'; ?>
    