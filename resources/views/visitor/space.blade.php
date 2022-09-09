@extends('layout.visitorApp')

@section('content')

<section class=" bg-[#5091F1] pt-[25px] h-[60vh] md:h-[30vh] lg:h-[73vh] overflow-hidden">
    <div class="container mx-auto pt-4">
        <div class="flex items-center justify-between">
            <div class="ml-4 flex flex-col items-center lg:items-start justify-center lg:justify-start">
                <h1 class="text-white text-3xl font-semibold text-center lg:text-start">Are you looking for a </h1>
                <h1 class="text-5xl text-[#0B2347] my-4 font-bold text-center lg:text-start">work space?</h1>
                <p class="text-md text-gray-200 w-[80%] text-center">We have put together the best environment and equipmment to enhance the <span class="font-semibold text-[#0B2347]">learning</span> 
                    and <span class="font-semibold text-[#0B2347]">working condition</span> of everyone that walk through our door
                </p>
                <button @click="softModal=true" class="mt-6 w-36 py-3 px-6 rounded-lg bg-[#0B2347] hover:bg-white text-white hover:text-[#0B2347] transition-all ease-in-out duration-300 shadow-md shadow-blue-900/40">
                    Book now
                </button>
            </div>
            <div class="hidden lg:flex items-center justify-center mr-24">
                <img src="images/space-2.png" alt="" class="w-[750px] h-[400px] mt-12">
            </div>
        </div>
    </div>

</section>
<section class=" w-full  h-[60vh]">
  <div id="carouselExampleSlidesOnly" class="carousel slide relative " data-bs-ride="carousel">
    <div class="carousel-inner relative w-full overflow-hidden h-[60vh]">
      <div class="carousel-item active relative float-left w-full h-[60vh]">
        <img
          src="images/hud-fun-1.jpeg"
          class="block w-full "
          alt="Wild Landscape"
        />
      </div>
      <div class="carousel-item relative float-left w-full h-[60vh]">
        <img
          src="images/hub-fun-3.jpeg"
          class="block w-full "
          alt="Camera"
        />
      </div>
      <div class="carousel-item relative float-left w-full h-[60vh]">
        <img
          src="images/hub-fun-5.jpeg"
          class="block w-full bg-cover"
          alt="Exotic Fruits"
        />
      </div>
      <div class="carousel-item relative float-left w-full h-[60vh]">
        <img
          src="images/hub-fun-7.jpeg"
          class="block w-full bg-cover"
          alt="Exotic Fruits"
        />
      </div>
      <div class="carousel-item relative float-left w-full h-[60vh]">
        <img
          src="images/hub-fun-8.jpeg"
          class="block w-full bg-cover"
          alt="Exotic Fruits"
        />
      </div>
    </div>
  </div>
</section>

<section class="bg-white py-4">
  <div class=
        'container mx-auto pt-4 flex items-center justify-center md:justify-between'>
        <div class="grid grid-cols-1 md:grid-cols-2 justify-evenly">
        <div class="flex-1 py-4">
          <img src="images/hub.png" alt="">
        </div>
        <div class="flex-1 p-4">
      
            <div class="relative flex items-center justify-center border-b-[#5091F1] border-b-4 w-[80%] h-[50px]  overflow-hidden ">
                <div class="absolute  -left-2 bottom-3 w-0 h-0 border-b-[#5091F1] border-b-[50px] border-r-transparent
                border-r-[20px] border-l-transparent border-l-[20px] rotate-[70deg]"></div>
                <h1 class="text-lg font-bold text-[#0B2347]">Private Office</h1>
            </div>
            {{--end title element--}}
            {{-- text element--}}
              <div class="w-[70%] ml-4 mt-4">
                <p>
                We offer a very condusive and confortable private office  with mazimum security and 
                technology to enhance the performance and quality if work. 
                </p>
                <h1 class="hidden md:block text-lg font-bold text-[#0B2347] mt-12">Features :</h1>
                  <div class="hidden md:flex items-center gap-6 w-[60%] ml-4">
                    <div class=" w-[15px] h-[15px] rounded-full bg-[#0B2347]"></div>
                    <h1 class="text-purple-300 font-semibold text-left">24/7 light</h1>
                  </div>
                  <div class="hidden md:flex items-center gap-6 w-[60%] ml-4">
                    <div class=" w-[15px] h-[15px] rounded-full bg-[#0B2347]"></div>
                    <h1 class="text-purple-300 font-semibold">sound prof</h1>
                  </div>
                  <div class="hidden md:flex items-center gap-6 w-[60%] ml-4">
                    <div class=" w-[15px] h-[15px] rounded-full bg-[#0B2347]"></div>
                    <h1 class="text-purple-300 font-semibold">stable internet</h1>
                  </div>
                  
                  <a href="/space" class="mt-4">
                      <button class="py-3 mt-4  lg:mb-0 text-lg rounded-[15px] px-6 bg-[#0B2347] focus:outline-none  text-white hover:bg-white font-semibold hover:text-[#0B2347] hover:border-4
                      hover:border-[#0B2347] transition-all duration-300 ease-in-out">Book a space</button>
                  </a>
              </div>
        
        </div>
        </div>
        
  </div>
</section>

<section class="bg-white py-4">
  <div class='container mx-auto pt-4 flex items-center justify-center md:justify-between'>
      <div class="grid grid-cols-1 md:grid-cols-2 justify-evenly">
      <div class="flex-1 p-4">
      
      <div class="relative flex items-center justify-center border-b-[#5091F1] border-b-4 w-[80%] h-[50px]  overflow-hidden ">
          <div class="absolute  -left-2 bottom-3 w-0 h-0 border-b-[#5091F1] border-b-[50px] border-r-transparent
          border-r-[20px] border-l-transparent border-l-[20px] rotate-[70deg]"></div>
          <h1 class="text-lg font-bold text-[#0B2347]">Work space</h1>
      </div>
      {{--end title element--}}
      {{-- text element--}}
        <div class="w-[70%] ml-4 mt-4">
          <p>
          We offer i very condusive and confortable working space with mazimum security and 
          noise. We also have a privet office and meeting room made with your comfort in mind
          </p>
          <h1 class="hidden md:block text-lg font-bold text-[#0B2347] mt-12">What we love to do :</h1>
            <div class="hidden md:flex items-center gap-6 w-[60%] ml-4">
              <div class=" w-[15px] h-[15px] rounded-full bg-[#0B2347]"></div>
              <h1 class="text-purple-300 font-semibold text-left">Work Space</h1>
            </div>
            <div class="hidden md:flex items-center gap-6 w-[60%] ml-4">
              <div class=" w-[15px] h-[15px] rounded-full bg-[#0B2347]"></div>
              <h1 class="text-purple-300 font-semibold">Meeting room</h1>
            </div>
            <div class="hidden md:flex items-center gap-6 w-[60%] ml-4">
              <div class=" w-[15px] h-[15px] rounded-full bg-[#0B2347]"></div>
              <h1 class="text-purple-300 font-semibold">privet office</h1>
            </div>
            <div class="hidden md:flex items-center gap-6 w-[60%] ml-4">
              <div class=" w-[15px] h-[15px] rounded-full bg-[#0B2347]"></div>
              <h1 class="text-purple-300 font-semibold">Gaming room</h1>
            </div>
            <a href="/space" class="mt-4">
                <button class="py-3 mt-4  lg:mb-0 text-lg rounded-[15px] px-6 bg-[#0B2347] focus:outline-none  text-white hover:bg-white font-semibold hover:text-[#0B2347] hover:border-4
                hover:border-[#0B2347] transition-all duration-300 ease-in-out">Get Started</button>
            </a>
        </div>
  
  </div>
        <div class="flex-1 py-4">
          <img src="images/hub.png" alt="">
        </div>
        
      </div>
        
  </div>
</section>

@endsection