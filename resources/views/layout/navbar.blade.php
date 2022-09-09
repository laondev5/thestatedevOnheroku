
<header class="bg-[#5091F1]  shadow-md z-10 sticky top-0">
    <nav class="container mx-auto flex flex-col lg:flex-row lg:items-center lg:justify-between relative py-[5px]">
        <!-- togglr button -->
            <div @click="mobileNav = !mobileNav" class="absolute top-4 right-4 lg:hidden cursor-pointer text-white">
                
                <i :class="mobileNav ? 'fa fa-times' : 'fa fa-bars'" aria-hidden="true"></i>
            </div>
        <!-- end toggle button -->

        <!-- logo area -->
        <a href="/">
        <div>
            <img src="images/STATEDEV_LOGO.png" alt="" class="w-[70px] h-[70px]">
        </div>
        </a>
        <!-- end logo area -->

        <!-- nave items -->
        <div :class="{'hidden': !mobileNav}" class="lg:inline-block">
                <div  class="flex gap-4 lg:items-center items-start flex-col lg:flex-row font-semibold text-md">
                    <a href="/" class="py-2 px-4 hover:bg-[#0B2347] rounded-lg text-white hover:text-white transition-all duration-300 ease-in-out">Home</a>
                    <a href="/about" class="py-2 px-4 hover:bg-[#0B2347] rounded-lg text-white hover:text-white transition-all duration-300 ease-in-out">About</a>
                    <a href="/#contact_us" class="py-2 px-4 hover:bg-[#0B2347] rounded-lg text-white hover:text-white transition-all duration-300 ease-in-out">Get in Touch</a>
                    <a href="/#faq" class="py-2 px-4 hover:bg-[#0B2347] rounded-lg text-white hover:text-white transition-all duration-300 ease-in-out">FAQs</a>
                    <a href="/#service" class="py-2 px-4 hover:bg-[#0B2347] rounded-lg text-white hover:text-white transition-all duration-300 ease-in-out">Services</a>

                    <!-- button section -->
                    
                        <button @click="showModal=true" class="py-3 ml-4 mb-4 lg:mb-0 text-lg rounded-[15px] px-6 bg-[#0B2347] focus:outline-none lg:ml-[20rem] text-white hover:bg-white hover:text-[#0B2347] hover:border-4
                        hover:border-[#0B2347] transition-all duration-300 ease-in-out">Get Started</button>
                   
                    <!-- end button section -->
                </div>
        </div>
        <!-- end nav items -->
    </nav>

    <!--modal-->
    <div x-show="showModal" class="sticky top-0">
        <div  class="z-10 w-full h-screen bg-gray-200 bg-opacity-40 flex items-center justify-center absolute top-0 left-0 overflow-y-scroll">
            <div class="bg-white w-[70%] pb-8 rounded-sm shadow-lg relative mt-[550px] mb-[100px] md:mt-0">
            <div @click="showModal=false" class="absolute top-4 right-4 text-2xl font-semibold">
                    <i class="fa fa-times" aria-hidden="true"></i> 
            </div>
            <div class="py-8 mt-4">
                <h1 class="text-center text-3xl font-bold mb-4">What would you like to do ?</h1>

                <div class="flex gap-6 flex-wrap justify-evenly items-center p-4">
                    <a href="/web">
                        <div class=" hover:animate-bounce py-4 px-2 bg-white  shadow-lg  shadow-blue-400/10 w-[180px]  hover:bg-[#5091F1] transition ease-in-out duration-600">
                            <div class="flex items-center justify-center p-2">
                                <img src="images/web-page.svg" alt="" class="w-[70px] h-[70px]">
                            </div>
                            <h1 class="text-center text-[#0B2347] text-2xl font-semibold">
                                Web development and design
                            </h1>
                        </div>
                    </a>
                    <a href="/mobile">
                        <div class=" hover:animate-bounce py-4 px-2 bg-white shadow-lg  shadow-blue-400/10 w-[180px] hover:bg-[#5091F1] transition ease-in-out duration-600">
                            <div class="flex items-center justify-center p-2">
                                    <img src="images/mobile-outlined.svg" alt="" class="w-[70px] h-[70px]">
                            </div>
                                <h1 class="text-center text-[#0B2347] text-2xl font-semibold">
                                    Mobile App eevelopment and design
                                </h1>
                        </div>
                    </a>
                    <a href="/pc">
                        <div class=" hover:animate-bounce py-4 px-2 bg-white shadow-lg  shadow-blue-400/10 w-[180px] hover:bg-[#5091F1] transition ease-in-out duration-600">
                            <div class="flex items-center justify-center p-2">
                                    <img src="images/application-web.svg" alt="" class="w-[70px] h-[70px]">
                            </div>
                                <h1 class="text-center text-[#0B2347] text-2xl font-semibold">
                                    software developmeny and design
                                </h1>
                        </div>
                    </a>
                    <a href="/space">
                    <div class="hover:animate-bounce py-4 px-2 bg-white shadow-lg  shadow-blue-400/10 w-[180px] hover:bg-[#5091F1] transition ease-in-out duration-600 ">
                        <div class="flex items-center justify-center p-2">
                                <img src="images/office.svg" alt="" class="w-[70px] h-[70px]">
                        </div>
                                <h1 class="text-center text-[#0B2347] text-2xl font-semibold">
                                        work space
                                </h1>
                    </div>
                        </div>
                    </a>
                </div>

            </div>
            </div>
        </div>
    </div>

     <!--call modal-->
       
     <div  x-show="callModal" class="z-10  w-full h-screen bg-gray-200 bg-opacity-40 flex items-center justify-center absolute top-0 left-0 overflow-y-scroll">
           <div class="bg-white w-[70%] pb-8 rounded-sm shadow-lg relative">
           <div @click="callModal=false" class="absolute top-4 right-4 text-2xl font-semibold">
                   <i class="fa fa-times" aria-hidden="true"></i> 
           </div>
           <div class="py-8 mt-4">
               <h1 class="text-center text-3xl font-bold mb-4">would you like to talk to us ?</h1>
   
               <div class="flex items-center justify-center ">
                   <img src="images/call.svg" alt="" class="w-[120px] h-[120px]">
               </div>
               <div class="flex flex-wrap justify-evenly items-center">
                   <div class=" hover:animate-bounce py-3 px-6 rounded-full shadow-lg  shadow-blue-400/10 flex gap-6 my-8 hover:bg-[#5091F1] transition-all ease-in-out duration-300">
                       <img src="images/phone-call-fill.svg" alt="" class="w-8 h-8">
                       <h1 class="text-lg font-semibold cursor-pointer">Make a call</h1>
                   </div>
                   <div class="hover:animate-bounce py-3 px-6 rounded-full shadow-lg  shadow-blue-400/10 flex gap-6 my-8 hover:bg-[#5091F1] transition-all ease-in-out duration-300">
                       <img src="images/email-new.svg" alt="" class="w-8 h-8">
                       <h1 class="text-lg font-semibold cursor-pointer">Send us an email</h1>
                   </div>
                   <div class="hover:animate-bounce py-3 px-6 rounded-full shadow-lg shadow-blue-400/10 flex gap-6 my-8 hover:bg-[#5091F1] transition-all ease-in-out duration-300">
                       <img src="images/whatsapp-icon.svg" alt="" class="w-8 h-8">
                       <h1 class="text-lg font-semibold cursor-pointer">Lets talk on whatsapp</h1>
                   </div>
               </div>
           </div>
           </div>
       </div>

       <!--enroll modal-->
       <div x-show="enrollModal" class="sticky top-0 flex items-center justify-center ">
        
            <div class="bg-white w-[90%]  pb-3 rounded-sm shadow-lg relative mt-[130px] mb-8 md:mt-0">
                <div @click="enrollModal=false" class="absolute top-4 right-4 text-2xl font-semibold">
                        <i class="fa fa-times" aria-hidden="true"></i> 
                </div>
                <div class="py-6 mt-4">
                    <h1 class="text-center text-3xl font-bold mb-3">What would you like to learn web development?</h1>
                    
                    <div class="flex gap-6 flex-wrap justify-evenly items-center px-4 pb-4">
                        <!--web design-->

                        <div @click="webModal" class="w-[220px] px-3 py-6 rounded-sm shadow-lg shadow-blue-500/5 hover:animate-bounce hover:bg-red-200 transition-all ease-linear duration-500">
                            <h1 class="text-2xl font-bold text-center text-red-600 mb-4">Wed Design</h1>
                            <ul class="text-lg font-semibold text-[#0B2347] py-4 gap-4 text-center">
                                <li>WordPress</li>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>Javascript</li>
                            </ul>
                            <p class="text-md font-bold text-red-600 text-center">Duration <span class="text-lg font-bold">3 Months</span></p>
                            <h1 class="text-center font-semibold text-2xl text-[#0B2347]">#30,000</h1>
                            <h1 class="text-center font-semibold text-md text-gray-500 line-through">#80,000</h1>
                        </div>
                        <!--end of web design-->

                        <!--frontend web development-->
                        <div @click="webModal" class="w-[220px] px-3 py-6 rounded-sm shadow-lg shadow-blue-500/5 hover:animate-bounce hover:bg-blue-200 transition-all ease-linear duration-500">
                            <h1 class="text-2xl font-bold text-center text-blue-600 mb-4">frontend web development</h1>
                            <ul class="text-lg font-semibold text-[#0B2347] py-4 gap-4 text-center">
                                <li>WordPress</li>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>Javascript</li>
                                <li>React</li>
                            </ul>
                            <p class="text-md font-bold text-blue-600 text-center">Duration <span class="text-lg font-bold">4 Months</span></p>
                            <h1 class="text-center font-semibold text-2xl text-[#0B2347]">#50,000</h1>
                            <h1 class="text-center font-semibold text-md text-gray-500 line-through">#100,000</h1>
                        </div> 
                        <!-- end of frontend web development-->

                        <!--backend web development-->
                        <div @click="webModal" class="w-[220px] px-3 py-6 rounded-sm shadow-lg shadow-blue-500/5 hover:animate-bounce hover:bg-green-200 transition-all ease-linear duration-500">
                            <h1 class="text-2xl font-bold text-center text-green-600 mb-4">Backend web development</h1>
                            <ul class="text-lg font-semibold text-[#0B2347] py-4 gap-4 text-center">
                                
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>Javascript</li>
                                <li>PHP</li>
                                <li>Laravel</li>
                            </ul>
                            <p class="text-md font-bold text-green-600 text-center">Duration <span class="text-lg font-bold">4 Months</span></p>
                            <h1 class="text-center font-semibold text-2xl text-[#0B2347]">#50,000</h1>
                            <h1 class="text-center font-semibold text-md text-gray-500 line-through">#100,000</h1>
                        </div> 
                        <!-- end of backend web development-->

                        <!--fullstack web development-->
                        <div @click="webModal" class="w-[220px] px-3 py-6 rounded-sm shadow-lg shadow-blue-500/5 hover:animate-bounce hover:bg-purple-200 transition-all ease-linear duration-500">
                            <h1 class="text-2xl font-bold text-center text-purple-600 mb-4">fullstack web development</h1>
                            <ul class="text-lg font-semibold text-[#0B2347] py-4 gap-4 text-center">
                                <li>WordPress</li>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>Javascript</li>
                                <li>PHP</li>
                                <li>React</li>
                                <li>Laravel</li>
                                
                            </ul>
                            <p class="text-md font-bold text-purple-600 text-center">Duration <span class="text-lg font-bold">8 Months</span></p>
                            <h1 class="text-center font-semibold text-2xl text-[#0B2347]">#150,000</h1>
                            <h1 class="text-center font-semibold text-md text-gray-500 line-through">#300,000</h1>
                        </div> 
                        <!-- end of fullstackend web development-->
                        
                    </div>
                    
    
                </div>
            
            </div>
      
       </div>

       <!--mobile modal-->
       <div x-show="mobileModal" class="sticky top-0 flex items-center justify-center ">
        
            <div class="bg-white w-[90%]  pb-3 rounded-sm shadow-lg relative mt-[130px] mb-8 md:mt-0">
                <div @click="mobileModal=false" class="absolute top-4 right-4 text-2xl font-semibold">
                        <i class="fa fa-times" aria-hidden="true"></i> 
                </div>
                <div class="py-6 mt-4">
                    <h1 class="text-center text-3xl font-bold mb-3">What would you like to learn mobile development?</h1>
                    
                    <div class="flex gap-6 flex-wrap justify-evenly items-center px-4 pb-4">
                        <!--web design-->

                        <div @click="mbModal" class="w-[220px] px-3 py-6 rounded-sm shadow-lg shadow-blue-500/5 hover:animate-bounce hover:bg-red-200 transition-all ease-linear duration-500">
                            <h1 class="text-2xl font-bold text-center text-red-600 mb-4">Android</h1>
                            <ul class="text-lg font-semibold text-[#0B2347] py-4 gap-4 text-center">
                                <li>javascript</li>
                                <li>Laravel</li>
                                <li>Tailwind</li>
                                <li>Java</li>
                            </ul>
                            <p class="text-md font-bold text-red-600 text-center">Duration <span class="text-lg font-bold">3 Months</span></p>
                            <h1 class="text-center font-semibold text-2xl text-[#0B2347]">#70,000</h1>
                            <h1 class="text-center font-semibold text-md text-gray-500 line-through">#120,000</h1>
                        </div>
                        <!--end of web design-->

                        <!--frontend web development-->
                        <div @click="mbModal" class="w-[220px] px-3 py-6 rounded-sm shadow-lg shadow-blue-500/5 hover:animate-bounce hover:bg-blue-200 transition-all ease-linear duration-500">
                            <h1 class="text-2xl font-bold text-center text-blue-600 mb-4">  IOS</h1>
                            <ul class="text-lg font-semibold text-[#0B2347] py-4 gap-4 text-center">
                                <li>Swift</li>
                                <li>Laravel</li>
                                <li>Tailwind</li>
                                <li>Javascript</li>
                                
                            </ul>
                            <p class="text-md font-bold text-blue-600 text-center">Duration <span class="text-lg font-bold">4 Months</span></p>
                            <h1 class="text-center font-semibold text-2xl text-[#0B2347]">#80,000</h1>
                            <h1 class="text-center font-semibold text-md text-gray-500 line-through">#140,000</h1>
                        </div> 
                        <!-- end of frontend web development-->

                        <!--backend web development-->
                        <div @click="mbModal" class="w-[220px] px-3 py-6 rounded-sm shadow-lg shadow-blue-500/5 hover:animate-bounce hover:bg-green-200 transition-all ease-linear duration-500">
                            <h1 class="text-2xl font-bold text-center text-green-600 mb-4">IOS and Android</h1>
                            <ul class="text-lg font-semibold text-[#0B2347] py-4 gap-4 text-center">
                                
                                <li>React Native</li>
                                <li>Laravel</li>
                                <li>Javascript</li>
                                <li>Flutter</li>
                                <li>node</li>
                            </ul>
                            <p class="text-md font-bold text-green-600 text-center">Duration <span class="text-lg font-bold">6 Months</span></p>
                            <h1 class="text-center font-semibold text-2xl text-[#0B2347]">#100,000</h1>
                            <h1 class="text-center font-semibold text-md text-gray-500 line-through">#200,000</h1>
                        </div> 
                        <!-- end of backend web development-->

                       
                    </div>
                    
    
                </div>
            
            </div>
      
       </div>

       <!--pc modal-->
       <div x-show="softModal" class="sticky top-0 flex items-center justify-center ">
        
            <div class="bg-white w-[90%]  pb-3 rounded-sm shadow-lg relative mt-[130px] mb-8 md:mt-0">
                <div @click="softModal=false" class="absolute top-4 right-4 text-2xl font-semibold">
                        <i class="fa fa-times" aria-hidden="true"></i> 
                </div>
                <div class="py-6 mt-4">
                    <h1 class="text-center text-3xl font-bold mb-3">What would you like to learn software engineering?</h1>
                    
                    <div class="flex gap-6 flex-wrap justify-evenly items-center px-4 pb-4">
                        <!--web design-->

                        <div @click="pcModal" class="w-[220px] px-3 py-6 rounded-sm shadow-lg shadow-blue-500/5 hover:animate-bounce hover:bg-red-200 transition-all ease-linear duration-500">
                            <h1 class="text-2xl font-bold text-center text-red-600 mb-4">Window</h1>
                            <ul class="text-lg font-semibold text-[#0B2347] py-4 gap-4 text-center">
                                <li>c#</li>
                                <li>C++</li>
                                <li>javascript</li>
                                <li>Java</li>
                            </ul>
                            <p class="text-md font-bold text-red-600 text-center">Duration <span class="text-lg font-bold">6 Months</span></p>
                            <h1 class="text-center font-semibold text-2xl text-[#0B2347]">#120,000</h1>
                            <h1 class="text-center font-semibold text-md text-gray-500 line-through">#160,000</h1>
                        </div>
                        <!--end of web design-->

                        <!--frontend web development-->
                        <div @click="pcModal" class="w-[220px] px-3 py-6 rounded-sm shadow-lg shadow-blue-500/5 hover:animate-bounce hover:bg-blue-200 transition-all ease-linear duration-500">
                            <h1 class="text-2xl font-bold text-center text-blue-600 mb-4">  mac os</h1>
                            <ul class="text-lg font-semibold text-[#0B2347] py-4 gap-4 text-center">
                                <li>Swift</li>
                                <li>c#</li>
                                <li>C++</li>
                                <li>Javascript</li>
                                
                            </ul>
                            <p class="text-md font-bold text-blue-600 text-center">Duration <span class="text-lg font-bold">6 Months</span></p>
                            <h1 class="text-center font-semibold text-2xl text-[#0B2347]">#130,000</h1>
                            <h1 class="text-center font-semibold text-md text-gray-500 line-through">#180,000</h1>
                        </div> 
                        <!-- end of frontend web development-->

                        <!--backend web development-->
                        <div @click="pcModal" class="w-[220px] px-3 py-6 rounded-sm shadow-lg shadow-blue-500/5 hover:animate-bounce hover:bg-green-200 transition-all ease-linear duration-500">
                            <h1 class="text-2xl font-bold text-center text-green-600 mb-4">mac and windowa</h1>
                            <ul class="text-lg font-semibold text-[#0B2347] py-4 gap-4 text-center">
                                
                                <li>Swift</li>
                                <li>c#</li>
                                <li>C++</li>
                                <li>Javascript</li>
                                <li>Java</li>
                            </ul>
                            <p class="text-md font-bold text-green-600 text-center">Duration <span class="text-lg font-bold">6 Months</span></p>
                            <h1 class="text-center font-semibold text-2xl text-[#0B2347]">#180,000</h1>
                            <h1 class="text-center font-semibold text-md text-gray-500 line-through">#200,000</h1>
                        </div> 
                        <!-- end of backend web development-->

                       
                    </div>
                    
    
                </div>
            
            </div>
      
       </div>
       
</header>