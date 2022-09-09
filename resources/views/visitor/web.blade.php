@extends('layout.visitorApp')

@section('content')

<section class=" bg-[#5091F1] pt-[25px] h-[60vh] md:h-[30vh] lg:h-[73vh] overflow-hidden">
    <div class="container mx-auto pt-4">
        <div class="flex items-center justify-between">
            <div class="ml-4 flex flex-col items-center lg:items-start justify-center lg:justify-start ">
                <h1 class="text-white text-3xl font-semibold text-center lg:text-start">Kick Start your Carrier as a</h1>
                <h1 class="text-5xl text-[#0B2347] my-4 font-bold text-center lg:text-start">Web developer</h1>
                <p class="text-md text-gray-200 w-[80%] text-center">We have put together the best environment and equipmment to enhance the <span class="font-semibold text-[#0B2347]">learning</span> 
                    and <span class="font-semibold text-[#0B2347]">development</span> of everyone that walk through our door
                </p>
                <button @click="enrollModal=true" class="mt-6 w-36 py-3 px-6 rounded-lg bg-[#0B2347] hover:bg-white text-white hover:text-[#0B2347] transition-all ease-in-out duration-300 shadow-md shadow-blue-900/40">
                    Enroll now
                </button>
            </div>
            <div class="hidden lg:flex items-center justify-center mr-24">
                <img src="images/enroll.png" alt="" class="w-[750px] h-[400px] mt-12">
            </div>
        </div>
    </div>

</section>

<section>
    <div class="contaimer mx-24 py-8">
        <h1 class="text-center text-2xl font-bold text-[#0B2347]">Choose a plan</h1>
        <p class="text-center text-md text-gray-400">What would you like us to build for you</p>
        <div class="mt-8 flex flex-wrap justify-evenly py-4">
            <!-- basic plan-->
            <div  @click="webModal" class="w-[290px] px-3 py-6 rounded-sm shadow-lg shadow-blue-500/5 hover:animate-bounce hover:bg-red-200 transition-all ease-linear duration-500">
                <h1 class="text-2xl font-bold text-center text-red-600 mb-4">Basic</h1>
                <ul class="text-lg font-semibold text-[#0B2347] py-4 gap-4 text-center">
                    
                    <li>1 month free hosting</li>
                    <li>free domain name</li>
                    <li>no data base</li>
                </ul>
                <p class="text-md font-bold text-red-600 text-center">Duration <span class="text-lg font-bold">2 weeks</span></p>
                <h1 class="text-center font-semibold text-2xl text-[#0B2347]">#30,000</h1>
                <h1 class="text-center font-semibold text-md text-gray-500 line-through">#80,000</h1>
            </div>

             <!-- standard plan-->
             <div  @click="webModal" class="w-[290px] px-3 py-6 rounded-sm shadow-lg shadow-blue-500/5 hover:animate-bounce hover:bg-blue-200 transition-all ease-linear duration-500">
                <h1 class="text-2xl font-bold text-center text-blue-600 mb-4">Standard</h1>
                <ul class="text-lg font-semibold text-[#0B2347] py-4 gap-4 text-center">
                    
                    <li>1 month free hosting</li>
                    <li>free domain name</li>
                    <li>30gb data base storage</li>
                    <li>web application</li>
                    <li>back end</li>
                </ul>
                <p class="text-md font-bold text-blue-600 text-center">Duration <span class="text-lg font-bold">2 weeks</span></p>
                <h1 class="text-center font-semibold text-2xl text-[#0B2347]">#50,000</h1>
                <h1 class="text-center font-semibold text-md text-gray-500 line-through">#80,000</h1>
            </div>

            <!-- standard plan-->
            <div @click="webModal" class="w-[290px] px-3 py-6 rounded-sm shadow-lg shadow-blue-500/5 hover:animate-bounce hover:bg-green-200 transition-all ease-linear duration-500">
                <h1 class="text-2xl font-bold text-center text-green-600 mb-4">Premium</h1>
                <ul class="text-lg font-semibold text-[#0B2347] py-4 gap-4 text-center">
                    
                    <li>1 month free hosting</li>
                    <li>free domain name</li>
                    <li>unlimite data base storage</li>
                    <li>web application</li>
                    <li>PWA</li>
                    <li>back end</li>
                </ul>
                <p class="text-md font-bold text-green-600 text-center">Duration <span class="text-lg font-bold">2 weeks</span></p>
                <h1 class="text-center font-semibold text-2xl text-[#0B2347]">#100,000</h1>
                <h1 class="text-center font-semibold text-md text-gray-500 line-through">#200,000</h1>
            </div>
        </div>
    </div>
</section>

@endsection