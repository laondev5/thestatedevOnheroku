@extends('layout.visitorApp')

@section('content')

<section class=" bg-[#5091F1] pt-[25px] h-[60vh] md:h-[30vh] lg:h-[73vh] overflow-hidden">
    <div class="container mx-auto flex items-center justify-center lg:justify-between gap-4 ">
        <div class="  ml-4 flex flex-col items-center lg:items-start justify-center lg:justify-start lg:mb-[20rem]">
            <h1 class="text-white text-3xl font-semibold text-center lg:text-start">Building awesome </h1>
            <h1 class="text-5xl text-[#0B2347] my-4 font-bold text-center lg:text-start">Digital Experience</h1>
            <p class="text-md font-semibold text-white text-center lg:text-start">
              We offer inspiring events, collaboration opportunities, 
              incubation and acceleration programs and business consulting services
            </p>
            <!-- button -->
              <div class="flex gap-x-4 items-center mt-12 mb-4">
                          
                              <button @click="callModal=true" class="py-3   lg:mb-0 text-lg rounded-[15px] px-6 hover:bg-[#0B2347] focus:outline-none text-[#0B2347] bg-white hover:text-white font-semibold
                              transition-all duration-300 ease-in-out">Give us a call</button>
                          

                          <!-- second button -->
                          
                              <button @click="showModal=true" class="py-3   lg:mb-0 text-lg rounded-[15px] px-6 bg-[#0B2347] focus:outline-none  text-white hover:bg-white font-semibold hover:text-[#0B2347] hover:border-4
                              hover:border-[#0B2347] transition-all duration-300 ease-in-out">Explore</button>
                          
                          <!-- end of second button -->
              </div>
            <!--end button -->
        </div>

        <!-- hero image section -->
          <div class=" hidden lg:flex">
            <img src="images/hero_image.png" alt="" class="w-[800px] lg:w-[1700px] ml-8 md:mt-24 lg:mt-0" >
          </div>
        <!--end hero image section -->
    </div>
</section>

<section class="bg-white" >
  <div class="container mx-auto">
      <div class="flex w-[65%] mx-auto my-[76px]">
          <div class=" h-20 flex-grow w-[955px]  place-items-center border-r-4 border-[#0B2347] flex flex-col items-center justify-center md:items-end md:justify-end">
           <div class=" mb-2 mr-2">
           <div>
              <h1 class="text-end flex justify-end font-bold text-2xl text-[#0B2347]">Best solution</h1>
            </div>
            <div>
              <h1 class="text-end font-bold text-2xl text-[#0B2347]">For you business</h1>
            </div>
           </div>
          </div>
          
          <div class=" h-20   place-items-center hidden md:flex">
            <p class="ml-2">
            We provide world-class services and solution to help customers meet there goals and work globaly to provide a  modern, tech and professional services. are what we do best
            </p>
          </div>
      </div>

      {{--card section--}}
      <div class="w-[85%] mx-auto flex  jutify-center flex-wrap justify-center md:justify-between mb-[103px]">
        <div class="w-[250px] md:w-[350px] h-[250px] md:h-[350px] lg:w-[433px] lg:h-[433px] shadow-lg hover:bg-blue-100/10 transition-all ease-linear duration-300 shadow-blue-400/10 "></div>
        <div class="w-[250px] md:w-[350px] h-[250px] hd:w-[350px] lg:w-[433px] lg:h-[433px] shadow-lg hover:bg-blue-100/10 transition-all ease-linear duration-300 shadow-blue-400/10 "></div>
      </div>
      {{--end card section--}}
      <div class=" flex items-center justify-center mb-[45px]">
        <h1 class="text-2xl font-bold text-[#0B2347]">What we do</h1>
      </div>
  </div>
</section>
<section class="bg-[#FCFCFC] py-4" id="service">
    <div class='container mx-auto pt-4 flex items-center justify-center md:justify-between'>
      <div class="grid grid-cols-1 md:grid-cols-2 justify-around">
      <div class="flex-1 p-4">
          {{--title element--}}
            <div class="relative flex items-center justify-center border-b-[#5091F1] border-b-4 w-[80%] h-[50px]  overflow-hidden ">
                <div class="absolute  -left-2 bottom-3 w-0 h-0 border-b-[#5091F1] border-b-[50px] border-r-transparent
                border-r-[20px] border-l-transparent border-l-[20px] rotate-[70deg]"></div>
                <h1 class="text-lg font-bold text-[#0B2347]">Web development and design</h1>
            </div>
            {{--end title element--}}
            {{-- text element--}}
              <div class="w-[70%] ml-4 mt-4">
                <p>
                We build different types of web technoly 

                and expirience providing the best the web have to 
                offer with out state of the art equipmment and 
                incredible developer.
                </p>
                <h1 class="hidden md:flex text-lg font-bold text-[#0B2347] mt-12">What we love to do :</h1>
                  <div class="hidden md:flex items-center gap-6 w-[60%] ml-4">
                    <div class=" w-[15px] h-[15px] rounded-full bg-[#0B2347]"></div>
                    <h1 class="text-purple-300 font-semibold text-left">Website</h1>
                  </div>
                  <div class="hidden md:flex items-center gap-6 w-[60%] ml-4">
                    <div class=" w-[15px] h-[15px] rounded-full bg-[#0B2347]"></div>
                    <h1 class="text-purple-300 font-semibold">Web Application</h1>
                  </div>
                  <div class="hidden md:flex items-center gap-6 w-[60%] ml-4">
                    <div class=" w-[15px] h-[15px] rounded-full bg-[#0B2347]"></div>
                    <h1 class="text-purple-300 font-semibold">Progressive web app</h1>
                  </div>
                  <div class="hidden md:flex items-center gap-6 w-[60%] ml-4">
                    <div class=" w-[15px] h-[15px] rounded-full bg-[#0B2347]"></div>
                    <h1 class="text-purple-300 font-semibold">Training and mentorship</h1>
                  </div>
                  
              </div>
              <a href="/web" class="">
                      <button class="py-3  mt-4  lg:mb-0 text-lg rounded-[15px] px-6 bg-[#0B2347] focus:outline-none  text-white hover:bg-white font-semibold hover:text-[#0B2347] hover:border-4
                      hover:border-[#0B2347] transition-all duration-300 ease-in-out">Get Started</button>
                  </a>
            {{--end text element--}}
        </div>
        <div class="flex-1 py-4">
          <img src="images/web.png" alt="">
        </div>
      </div>
    </div>
</section>
<section class="bg-white py-4">
  <div class="container mx-auto pt-4 flex items-center justify-center md:justify-between">
    <div class="flex flex-col-reverse md:flex-row justify-evenly">
        <div class="flex-1 py-4">
            <img src="images/mobile.png" alt="">
            </div>
            <div class="flex-1 p-4">
        {{--title element--}}
            <div class="relative flex items-center justify-center border-b-[#5091F1] border-b-4 w-[80%] h-[50px]  overflow-hidden ">
                <div class="absolute  -left-2 bottom-3 w-0 h-0 border-b-[#5091F1] border-b-[50px] border-r-transparent
                border-r-[20px] border-l-transparent border-l-[20px] rotate-[70deg]"></div>
                <h1 class="text-lg font-bold text-[#0B2347]">Mobile App development and design</h1>
            </div>
            {{--end title element--}}
            {{-- text element--}}
            <div class="w-[70%] ml-4 mt-4">
                <p>
                We build different types of mobile application for both ios, android window  
                out expireince developers provide you with state of the art and app with the latest and trending techology
                that meet you and your business needs.
                </p>
                <h1 class="text-lg hidden md:flex font-bold text-[#0B2347] mt-12">What we love to do :</h1>
                <div class="hidden md:flex items-center gap-6 w-[60%] ml-4">
                    <div class=" w-[15px] h-[15px] rounded-full bg-[#0B2347]"></div>
                    <h1 class="text-purple-300 font-semibold text-left">ios</h1>
                </div>
                <div class="hidden md:flex items-center gap-6 w-[60%] ml-4">
                    <div class=" w-[15px] h-[15px] rounded-full bg-[#0B2347]"></div>
                    <h1 class="text-purple-300 font-semibold">android</h1>
                </div>
                <div class="hidden md:flex items-center gap-6 w-[60%] ml-4">
                    <div class=" w-[15px] h-[15px] rounded-full bg-[#0B2347]"></div>
                    <h1 class="text-purple-300 font-semibold">microsoft</h1>
                </div>
                <div class="hidden md:flex items-center gap-6 w-[60%] ml-4">
                    <div class=" w-[15px] h-[15px] rounded-full bg-[#0B2347]"></div>
                    <h1 class="text-purple-300 font-semibold">Training and mentorship</h1>
                </div>
                
            </div>
            <a href="/mobile" class="mt-4">
                    <button class="py-3 mt-4  lg:mb-0 text-lg rounded-[15px] px-6 bg-[#0B2347] focus:outline-none  text-white hover:bg-white font-semibold hover:text-[#0B2347] hover:border-4
                    hover:border-[#0B2347] transition-all duration-300 ease-in-out">Get Started</button>
                </a>
            {{--end text element--}}
        </div>
    </div>
       
  </div>
</section>
<section class="bg-[#FCFCFC] py-4">
    <div class='container mx-auto pt-4 flex items-center justify-center md:justify-between'>
    <div class="grid grid-cols-1 md:grid-cols-2 justify-evenly">
    <div class="flex-1 p-4">
          {{--title element--}}
            <div class="relative flex items-center justify-center border-b-[#5091F1] border-b-4 w-[80%] h-[50px]  overflow-hidden ">
                <div class="absolute  -left-2 bottom-3 w-0 h-0 border-b-[#5091F1] border-b-[50px] border-r-transparent
                border-r-[20px] border-l-transparent border-l-[20px] rotate-[70deg]"></div>
                <h1 class="text-lg font-bold text-[#0B2347]">PC softwares</h1>
            </div>
            {{--end title element--}}
            {{-- text element--}}
              <div class="w-[70%] ml-4 mt-4">
                <p>
                We build different types of web technoly 

                and expirience providing the best the web have to 
                offer with out state of the art equipmment and 
                incredible developer.
                </p>
                <h1 class="hidden md:block text-lg font-bold text-[#0B2347] mt-12">What we love to do :</h1>
                  <div class="hidden md:flex items-center gap-6 w-[60%] ml-4">
                    <div class=" w-[15px] h-[15px] rounded-full bg-[#0B2347]"></div>
                    <h1 class="text-purple-300 font-semibold text-left">mac book</h1>
                  </div>
                  <div class="hidden md:flex items-center gap-6 w-[60%] ml-4">
                    <div class=" w-[15px] h-[15px] rounded-full bg-[#0B2347]"></div>
                    <h1 class="text-purple-300 font-semibold">Windows</h1>
                  </div>
                  <div class="hidden md:flex items-center gap-6 w-[60%] ml-4">
                    <div class=" w-[15px] h-[15px] rounded-full bg-[#0B2347]"></div>
                    <h1 class="text-purple-300 font-semibold">Liniks</h1>
                  </div>
                  <div class="hidden md:flex items-center gap-6 w-[60%] ml-4">
                    <div class=" w-[15px] h-[15px] rounded-full bg-[#0B2347]"></div>
                    <h1 class="text-purple-300 font-semibold">Training and mentorship</h1>
                  </div>
                  
              </div>
              <a href="/pc" class="">
                      <button class="py-3  mt-4  lg:mb-0 text-lg rounded-[15px] px-6 bg-[#0B2347] focus:outline-none  text-white hover:bg-white font-semibold hover:text-[#0B2347] hover:border-4
                      hover:border-[#0B2347] transition-all duration-300 ease-in-out">Get Started</button>
                  </a>
            {{--end text element--}}
        </div>
        <div class="flex-1 py-4">
          <img src="images/pc app.png" alt="">
        </div>
    </div>
        
    </div>
</section>
<section class="bg-white py-4">
  <div class=
        'container mx-auto pt-4 flex items-center justify-center md:justify-between'>
        <div class="flex flex-col-reverse md:flex-row justify-evenly">
        <div class="flex-1 py-4">
          <img src="images/hub.png" alt="">
        </div>
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
        </div>
        
  </div>
</section>
<section class=" w-full pt-4">
  <div id="carouselExampleSlidesOnly" class="carousel slide relative " data-bs-ride="carousel">
    <div class="carousel-inner relative w-full overflow-hidden">
      <div class="carousel-item active relative float-left w-full ">
        <img
          src="images/slide-1.png"
          class="block w-full bg-cover"
          alt="Wild Landscape"
        />
      </div>
      <div class="carousel-item relative float-left w-full ">
        <img
          src="images/slide-2.png"
          class="block w-full bg-cover"
          alt="Camera"
        />
      </div>
      <div class="carousel-item relative float-left w-full ">
        <img
          src="images/slide-3.png"
          class="block w-full bg-cover"
          alt="Exotic Fruits"
        />
      </div>
    </div>
  </div>
</section>

<!-- meet the team section-->
<section class="my-8">
  <div class="container mx-auto">
    <h1 class="text-3xl font-bold mt-8 mb-16 text-center">Meet the team</h1>
  <div class=" flex flex-wrap justify-evenly mb-[103px]">

    @foreach ($teams as $team)
    <div class="w-[170px] md:w-[230px] h-[170px] md:h-[230px] lg:w-[350px] lg:h-[350px] shadow-lg shadow-blue-400/10 hover:bg-blue-100/10 transition-all ease-linear duration-300 " >
      <div class="flex items-center justify-center w-[100%] py-8">
        <div class="rounded-full w-[150px] h-[150px]">
          <img src="{{ $team->image }}" alt="" class="w-[100%] h-[100%] bg-cover">
        </div>
      </div>
      <div class="w-[90%] mx-auto">
        <h1 class="text-2xl font-bold text-blue-900 pb-3 text-center">{{ $team->name }}</h1>
        <h3 class="italic text-blue-300 text-lg font-semibold text-center pb-4">{{ $team->title }}</h3>
        <p class="text-center">{{ $team->description }}</p>
      </div>
    </div>
    @endforeach
        
        
      </div>
  </div>

</section>


<section class="my-8" id="faq">
  <div class="container mx-auto">
  <h1 class="text-3xl font-bold mt-8 mb-16 text-center">Do you have any question</h1>
    <div class="w-[60%] mx-auto">
        <!--accordion-->

        @foreach ( $faqs as $faq )
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item border-t-0 border-l-0 border-r-0 rounded-b-md bg-gray-100 bg-opacity-20 ">
            <h2 class="accordion-header mb-0" id="flush-headingOne">
              <button class="accordion-button
            relative
            flex
            items-center
            w-full
            py-4
            px-5
            text-base text-gray-800 text-left
            bg-gray-100
            border-0
            font-semibold
            rounded-t-md
            transition
            focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                aria-expanded="false" aria-controls="flush-collapseOne">
                {{ $faq->question }}
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse border-0 collapse show"
              aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body py-4 px-5">
                {{ $faq->answer }}
              </div>
            </div>
          </div>
        @endforeach

 
</div>
    </div>
  </div>


</section>
<section class="bg-gray-100 bg-opacity-20 py-4" id="contact_us">
  <div class="container mx-auto">
    <h1 class="text-3xl font-bold mt-8 mb-16 text-center">Get in Touch</h1>
    <div class="flex  flex-col md:flex-row ">
        <div class="flex-1">
          <div class="py-3">
            <h1 class="text-2xl font-bold text-[#0B2347] text-center md:text-left">Give us a call or email us</h1>
          </div>
          <h1 class="text-md my-4 text-center md:text-left">No 4 road G, Barnawa GRA, Kaduna <br/>
            2055 Limestone Rd, STE 200-C Wilminton, DE 19898, United State
          </h1>
          <h1 class="text-md my-4 text-center md:text-left">09099589351, 07034218070</h1>
          <h1 class="text-md my-4 text-center md:text-left">@thestatedev@info.com</h1>
          <div class="flex gap-4 items-center justify-center lg:justify-start">
            <h1 class="text-md">Follow us :</h1>
            <a href="#"><div><img src="images/facebook icon.svg" alt=""></div></a>
            <a href="#"><div><img src="images/inst icon.svg" alt=""></div></a>
            <a href="#"><div><img src="images/linkedin icon.svg" alt=""></div></a>
          </div>
        </div>

        <!--contact us-->
        <div class="flex-1">
          <div class="block p-6 ml-16 rounded-lg shadow-lg bg-white max-w-md">
            <form action="{{ route('contact') }}"
                  method="POST"
                  enctype="multipart/form-data">
                  @csrf
              <div class="form-group mb-6">
                <input type="text" name="name" class="form-control block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-gray-700
                  bg-white bg-clip-padding
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
                  placeholder="Name">
              </div>
              <div class="form-group mb-6">
                <input type="email" name="email" class="form-control block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-gray-700
                  bg-white bg-clip-padding
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput8"
                  placeholder="Email address">
              </div>
              <div class="form-group mb-6">
                <textarea
                name="message"
                class="
                  form-control
                  block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-gray-700
                  bg-white bg-clip-padding
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                "
                id="exampleFormControlTextarea13"
                rows="3"
                placeholder="Message"
              ></textarea>
              </div>
              
              <button type="submit" class="
                w-full
                px-6
                py-2.5
                bg-blue-600
                text-white
                font-medium
                text-xs
                leading-tight
                uppercase
                rounded
                shadow-md
                hover:bg-blue-700 hover:shadow-lg
                focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                active:bg-blue-800 active:shadow-lg
                transition
                duration-150
                ease-in-out">Send</button>
            </form>
          </div>
        </div>
    </div>
  </div>

</section>

@endsection