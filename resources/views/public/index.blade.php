<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Restoran Maul</title>
    <link rel="stylesheet" href="index.css" />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <img src="assets/img/bg.png" class="absolute" />
    <img src="assets/img/bg2.png" class="absolute top-[100px] left-[830px]" />
    <img src="assets/img/bg3.png" class="absolute top-[1100px]" />
    <img src="assets/img/bg4.png" class="absolute top-[1500px] left-[830px]" />
    <header class="con">
      <nav class="flex justify-between">
        <div class="flex">
          <img src="assets/img/logo.png" class="w-9 h-7" />
          <h1 class="py-1 ml-1 text-xs">MaemMamam</h1>
          <ul class="flex ml-6 gap-10 py-1 text-sm ml-16">
            <li class="text-[#FF9900]"><a href="">Home</a></li>
            <li><a href="">Menu</a></li>
            <li><a href="">Community</a></li>
          </ul>
        </div>
        <div class="flex">
          <div class="mr-5">
            <img class="absolute ml-1" src="assets/img/notice.png" />
            <img class="pt-2" src="assets/img/chart.png " />
          </div>
          <div class="flex">
            @if (Route::has('login'))
            @auth
            <button type="button" class="mb-0 mr-12"><a href="{{ url('/dashboard') }}"></a> Dashboard</button>
            @else
            <button type="button" class="mb-0 mr-12"><a href="{{ route('login') }}">Login</a></button>
            <img class="absolute pt-4 ml-14" src="assets/img/user.png " />
            @if (Route::has('register'))
            <button type="button" class="bg-[#FF9900] py-2 px-8 rounded-full">
             <a href="{{ route('register') }}">Register</a> 
            </button>
              @endif
            @endauth
            @endif
          </div>
        </div>
      </nav>
      <div class="py-5"></div>
      <div class="absolute pt-48">
        <h2 class="text-sm text-[#FF9900] ml-[100px] ml-0">Best Product</h2>
        <h1 class="pt-3 ml-[100px] ml-0 text-4xl pb-5">
          <span class="font-bold">Hamburger</span> <br />Best in The Universe
        </h1>
        <p class="text-[#DDDDDD] text-sm pb-5 w-[400px]">
          Lörem ipsum ir dons det pren bokstav. Presav velavis dirar. Semidonde
          pregon. Teråse seligt sapt intrant.
        </p>
        <div class="flex gap-5">
          <button type="button" class="bg-[#FF9900] py-2 px-8 rounded-full">
            Order Now
          </button>
          <div
            class="flex gap-3 border-solid border-2 border-gray-600 py-2 px-5 rounded-full"
          >
            <a href="#">View Menu</a>
            <span class="pt-2"><img src="assets/img/arr.png " /></span>
          </div>
        </div>
        <div class="flex gap-2 pt-10 ml-4">
          <span
            class="rounded-full h-2 w-2 flex items-center justify-center bg-[#FF9900]"
          ></span>
          <span
            class="rounded-full h-2 w-2 flex items-center justify-center bg-gray-500"
          ></span>
          <span
            class="rounded-full h-2 w-2 flex items-center justify-center bg-gray-500"
          ></span>
        </div>
      </div>
      <div>
        <div class="text-center mt-8">
          <a class="w-[160px] text-center bg-[#151515] py-2 px-6 rounded-full"
            >Restaurant 🍕</a
          >
        </div>
        <h1 class="text-center pt-5 font-bold text-6xl">
          Makes You Satisfied With <br />What You
          <span class="text-[#FF9900]">Ordered</span>
        </h1>
        <img
          src="assets/img/burger.png"
          class="relative mx-auto -top-8 xl:w-[600px] left-[60px]"
        />
      </div>
    </header>
    <section class="con">
      <div class="partnership">
            @include('layouts.company')
        </div>
      </div>
      <div class="flex gap-20">
        <div class="pt-48">
          <h1 class="text-[#FF9900] text-sm">About Us</h1>
          <h1 class="font-bold text-2xl pt-5">MaemMamam</h1>
          <p class="text-[#DDDDDD] text-sm pt-5 mb-10">
            We were founded in 1948 after the war and the world began to be safe
            we decided to open a small restaurant on the side of the road for
            the youth and the surrounding community, until finally we had the
            capital to create the only largest restaurant and so far we have
            opened 10 branches in Indonesia.
          </p>
          <button
            type="button"
            class="border-solid border-2 border-gray-600 py-2 px-8 rounded-full"
          >
            Read More
          </button>
        </div>
        <img src="assets/img/burger2.png" class="w-[490px] pt-20" />
      </div>
      <div class="flex pt-48">
        <img src="assets/img/burger3.png" class="w-[590px]" />
        <div class="pt-20 pl-5">
          <h3 class="text-sm text-[#FF9900]">MaemMamam Restaurant</h3>
          <h1 class="pt-5 text-4xl font-bold">
            Fast food and fill your stomach
          </h1>
          <p class="text-[#DDDDDD] pt-5 mb-14 text-sm">
            we are a fast food company and we make everyone enjoy any food we
            serve them because we serve the best for them all.
          </p>
          <div class="flex gap-5">
            <button class="py-2 px-6 bg-[#FF9900] rounded-full">
              Shop Now
            </button>
            <div
              class="flex gap-3 border-solid border-2 border-gray-600 py-2 px-5 rounded-full"
            >
              <a href="#">About Us</a>
              <span class="pt-2"><img src="assets/img/arr.png " /></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="con">
      <div class="pt-20">
        <h3 class="text-xs text-[#FF9900] pb-2">Popular menu</h3>
        <h1 class="text-3xl">Best Popular Menu</h1>
        <p>
          Find the food you want to buy and get the prize, made from the best
          ingredients we choose
        </p>
        <button
          class="absolute right-40 border-solid border-2 border-gray-600 py-2 px-8 rounded-full"
        >
          View more
        </button>
      </div>
      <div class="flex gap-4 mt-16">
        @include('layouts.produk')
        <div class="bg-[#16130D]">
          <div class="flex gap-2 p-3">
            <img class="mt-1 h-[15px] w-[15px]" src="assets/img/star.png" />
            <p>2.1</p>
          </div>
          <img src="assets/img/food1.png" class="m-4 w-[222px] h-[185px]" />
          <h3 class="pt-4 pl-4">Best Spaggheti</h3>
          <div class="flex justify-between pl-4 pb-4 pt-1 pr-4 text-sm">
            <p>With Saus Hots</p>
            <h4>$ 20.00</h4>
          </div>
        </div>
        <div class="bg-[#16130D]">
          <div class="flex gap-2 p-3">
            <img class="mt-1 h-[15px] w-[15px]" src="assets/img/star.png" />
            <p>2.1</p>
          </div>
          <img src="assets/img/food2.png" class="m-4 w-[222px] h-[185px]" />
          <h3 class="pt-4 pl-4">Best Spaggheti</h3>
          <div class="flex justify-between pl-4 pb-4 pt-1 pr-4 text-sm">
            <p>With Saus Hots</p>
            <h4>$ 20.00</h4>
          </div>
        </div>
        <div class="bg-[#16130D]">
          <div class="flex gap-2 p-3">
            <img class="mt-1 h-[15px] w-[15px]" src="assets/img/star.png" />
            <p>2.1</p>
          </div>
          <img src="assets/img/food3.png" class="m-4 w-[222px] h-[185px]" />
          <h3 class="pt-4 pl-4">Best Spaggheti</h3>
          <div class="flex justify-between pl-4 pb-4 pt-1 pr-4 text-sm">
            <p>With Saus Hots</p>
            <h4>$ 20.00</h4>
          </div>
        </div>
        <div class="bg-[#16130D]">
          <div class="flex gap-2 p-3">
            <img class="mt-1 h-[15px] w-[15px]" src="assets/img/star.png" />
            <p>2.1</p>
          </div>
          <img src="assets/img/food4.png" class="m-4 w-[222px] h-[185px]" />
          <h3 class="pt-4 pl-4">Best Spaggheti</h3>
          <div class="flex justify-between pl-4 pb-4 pt-1 pr-4 text-sm">
            <p>With Saus Hots</p>
            <h4>$ 20.00</h4>
          </div>
        </div>
      </div>
      <div class="flex gap-4 mt-6">
        <div class="bg-[#16130D]">
          <div class="flex gap-2 p-3">
            <img class="mt-1 h-[15px] w-[15px]" src="assets/img/star.png" />
            <p>2.1</p>
          </div>
          <img src="assets/img/food1.png" class="m-4 w-[222px] h-[185px]" />
          <h3 class="pt-4 pl-4">Best Spaggheti</h3>
          <div class="flex justify-between pl-4 pb-4 pt-1 pr-4 text-sm">
            <p>With Saus Hots</p>
            <h4>$ 20.00</h4>
          </div>
        </div>
        <div class="bg-[#16130D]">
          <div class="flex gap-2 p-3">
            <img class="mt-1 h-[15px] w-[15px]" src="assets/img/star.png" />
            <p>2.1</p>
          </div>
          <img src="assets/img/food2.png" class="m-4 w-[222px] h-[185px]" />
          <h3 class="pt-4 pl-4">Best Spaggheti</h3>
          <div class="flex justify-between pl-4 pb-4 pt-1 pr-4 text-sm">
            <p>With Saus Hots</p>
            <h4>$ 20.00</h4>
          </div>
        </div>
        <div class="bg-[#16130D]">
          <div class="flex gap-2 p-3">
            <img class="mt-1 h-[15px] w-[15px]" src="assets/img/star.png" />
            <p>2.1</p>
          </div>
          <img src="assets/img/food3.png" class="m-4 w-[222px] h-[185px]" />
          <h3 class="pt-4 pl-4">Best Spaggheti</h3>
          <div class="flex justify-between pl-4 pb-4 pt-1 pr-4 text-sm">
            <p>With Saus Hots</p>
            <h4>$ 20.00</h4>
          </div>
        </div>
        <div class="bg-[#16130D]">
          <div class="flex gap-2 p-3">
            <img class="mt-1 h-[15px] w-[15px]" src="assets/img/star.png" />
            <p>2.1</p>
          </div>
          <img src="assets/img/food4.png" class="m-4 w-[222px] h-[185px]" />
          <h3 class="pt-4 pl-4">Best Spaggheti</h3>
          <div class="flex justify-between pl-4 pb-4 pt-1 pr-4 text-sm">
            <p>With Saus Hots</p>
            <h4>$ 20.00</h4>
          </div>
        </div>
      </div>
    </section>
    <section class="con py-40">
      <div
        class="mx-auto border-solid border-2 border-white-600 rounded-lg py-20"
      >
        <div>
          <h1 class="text-center text-[#FF9900] mt-10 pb-2">Order now</h1>
          <h2 class="text-center text-[#FFFFFF] text-2xl font-extrabold">
            Order Now And Take a Giveaway
          </h2>
          <h3 class="text-center text-[#FFFFFF] text-lg mt-6">
            Order and get the prize, we will give a gift to those of you who are
            lucky to get something<br />interesting from us
          </h3>
          <h1 class="text-center text-[#FF9900] text-xs mt-10 pb-2">
            <button
              type="button"
              class="py-2 px-6 bg-[#FF9900] rounded-full text-white"
            >
              Order now
            </button>
          </h1>
        </div>
      </div>
    </section>
    <footer class="con py-20">
      <div class="flex">
        <div class="w-1/2 mr-20">
          <div class="flex">
            <img src="assets/img/logo.png" class="w-9 h-7" />
            <a class="ml-2 mb-12">MaemMamam</a>
          </div>
          <p>
            We were founded in 1948 after the war and the world began to be safe
            we decided to open a small restaurant on the side of the road for
            the youth and the surrounding community.
          </p>
          <div class="flex mt-5">
            <a href="#">
              <img class="mr-5 w-[7px] h-[14px]" src="assets/img/fb.png " />
            </a>
            <a href="#">
              <img class="mr-5 w-[18px] h-[14px]" src="assets/img/tw.png " />
            </a>
            <a href="#">
              <img class="mr-5 w-[16px] h-[15px]" src="assets/img/lk.png " />
            </a>
            <a href="#">
              <img class="mr-5 w-[16px] h-[19px]" src="assets/img/ig.png " />
            </a>
          </div>
        </div>
        <div class="w-1/6 pt-20">
          <h4>Navigation</h4>
          <ul>
            <li><a class="text-[#969696]" href="#">Home</a></li>
            <li><a class="text-[#969696]" href="#">Info</a></li>
            <li><a class="text-[#969696]" href="#">News</a></li>
            <li><a class="text-[#969696]" href="#">About Us</a></li>
            <li><a class="text-[#969696]" href="#">Contact</a></li>
          </ul>
        </div>
        <div class="w-1/4 pt-20 mr-8">
          <h3>Address</h3>
          <p class="text-[#969696] text-sm">
            Jl. Al-Muwahhiddin, Karangtengah, Cibadak, Kab. Sukabumi. Sukabumi
            43351
          </p>
        </div>
        <div class="w-1/4 pt-20">
          <h3>Contact</h3>
          <div class="flex py-3">
            <img class="mr-3 w-[20px] h-[20px]" src="assets/img/phone.png " />
            <p class="text-[#969696]">(0266) 532510</p>
          </div>
          <div class="flex">
            <img class="mr-3 w-[20px] h-[20px]" src="assets/img/email.png " />
            <p class="text-[#969696]">smkn1_cibadak@yahoo.co.id</p>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
