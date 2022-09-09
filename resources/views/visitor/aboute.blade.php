@extends('layout.visitorApp')

@section('content')

<section class="w-full h-[60%]">
    <div
      id="carouselDarkVariant"
      class="carousel slide carousel-fade carousel-dark relative"
      data-bs-ride="carousel"
    >
      <!-- Indicators -->
      <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
        <button
          data-bs-target="#carouselDarkVariant"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          data-bs-target="#carouselDarkVariant"
          data-bs-slide-to="1"
          aria-label="Slide 1"
        ></button>
        <button
          data-bs-target="#carouselDarkVariant"
          data-bs-slide-to="2"
          aria-label="Slide 1"
        ></button>
      </div>
  
      <!-- Inner -->
      <div class="carousel-inner relative w-full overflow-hidden">
        <!-- Single item -->
        <div class="carousel-item active relative float-left w-full h-[70vh]">
          <img
            src="images/slide-4.jpg"
            class="block w-full"
            alt="Motorbike Smoke"
          />
          <div class="carousel-caption hidden md:block absolute text-center">
            <h5 class="text-xl">First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
  
        <!-- Single item -->
        <div class="carousel-item relative float-left w-full h-[70vh]">
          <img
            src="images/slide-5.jpg"
            class="block w-full"
            alt="Mountaintop"
          />
          <div class="carousel-caption hidden md:block absolute text-center">
            <h5 class="text-xl">Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
  
        <!-- Single item -->
        <div class="carousel-item relative float-left w-full h-[70vh]">
          <img
            src="images/hub-fun-4.jpeg"
            class="block w-full"
            alt="Woman Reading a Book"
          />
          <div class="carousel-caption hidden md:block absolute text-center">
            <h5 class="text-xl">Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <!-- Inner -->
  
      <!-- Controls -->
      <button
        class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
        type="button"
        data-bs-target="#carouselDarkVariant"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
        type="button"
        data-bs-target="#carouselDarkVariant"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  
  </section>
  
  <section>
      <div class="container mx-auto py-4 flex flex-col items-center justify-center mt-8">
          <h1 class="text-center text-3xl font-semibold text-[#0B2347] my-4">Our vision</h1>
          <div class="w-[60%] items-center my-4">
          <p class="text-center  text-md  text-gray-400">
           <span class="text-lg font-semibold text-[#0B2347]">Our vision</span> is to be a powerhouse in Africa when it comes to I.C.T solutions, using the strength of community to improve the lives of people and the environment through technology. 
          Using established inputs and methods, we have strategically positioned ourselves to supply all areas of needed professional, information, communication, and technology solutions. This has helped us to provide great service to a wide spectrum of clientele, including individuals, organizations, and government(s).
  
          </p>
          </div>
  
      </div>
  </section>
  <section class="bg-gray-100 bg-opacity-20 py-4">
      <div class="container mx-auto">
          <div class="flex items-center gap-16 my-8">
              <div class="hidden  lg:flex gap-4">
                  <img src="images/wwd-1.jpg" alt="" class="w-[250px] h-[400px] mb-8">
                  <img src="images/wwd-2.jpg" alt="" class="w-[250px] h-[400px] mt-8">
              </div>
              <div class="w-[55%]">
                  <h1 class="text-center md:text-left text-4xl font-semibold text-[#0B2347] my-4">WHO ARE WE? </h1>
                  <p class="text-center md:text-left text-md text-gray-400">
                  The StateDev Ltd was founded in 2020 in Delaware USA and in Kaduna Nigeria in 2021 by an enthusiastic and experienced team in the field of information technology, communication, business management and marketing. Since then, The StateDev Ltd has shown a steady growth and has established a notable presence in the fields of consulting, ICT applications & solutions and the production of multimedia content for social media marketing.
                  Client satisfaction and high-quality services come first in our business model. Technology solutions, in our opinion, do not have to be out-of-the-box. We understand that different people and organizations require different types of technology to suit their needs. We operate with flexibility, focusing on customizable solutions that are tailored to your specific requirements (s). After all, that is why technology exists in the first place: to satisfy your requirements. We have a unique crop of open-minded developers based on this principle. 
  
                  </p>
              </div>
          </div>
      </div>
  </section>
  
  <section class="py-4">
      <div class="container mx-auto">
          <div class="flex items-center gap-16 my-8">
              
              <div class="w-[55%]">
                  <h1 class="text-center md:text-left text-4xl font-semibold text-[#0B2347] my-4">About Us</h1>
                  <p class=" text-center md:text-left text-md text-gray-400">
                  The StateDev Hub is a conducive work space and community built for anyone who requires office space with access to 24/7 electricity, free super internet, a cafe, a business and gaming lounge, and much more.
  
                  We offer inspiring events, collaboration opportunities, incubation and acceleration programs and business-consulting services. 
  
                  It attracts a diverse range of people, from government representatives and multinational CEOs to social activists and artists. 
  `
                  Situated in the heart of Barnawa GRA, Kaduna, It features a coworking area, two dedicated private offices, gaming lounge, café, two training halls with the capacity to take 20 and 40 participants respectively a swimming pool and Gazebo/ lounge. Our meeting rooms, corporate lounges, coworking spaces, and office space are all fully equipped. 
  
                  Friendly, knowledgeable employees organize all the services and details so that people may be more productive and maintain their attention on what's crucial.
   
  
                  </p>
              </div>
              <div class="hidden  lg:flex gap-4 ">
                  <img src="images/about.jpg" alt="" class=" w-[500px]  mb-8">
                  
              </div>
          </div>
      </div>
  </section>

@endsection