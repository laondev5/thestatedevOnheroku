@extends('layout.adminApp')

@section('content')

<div class="py-8 px-4" x-data="{teamModal:false}">

    <button @click="teamModal=true" class="flex gap-x-3 py-2 px-6 rounded-md text-white bg-green-500 transition-all ease-in-out duration-300 hover:bg-green-800 cursor-pointer">
        Add a User
        <span></span>
    </button> 

    <div x-show="teamModal" class="w-full py-6 flex-col items-center justify-center absolute top-0 left-0 bg-gray-300/40">
        {{-- error --}}
        
        <div class="pb-4 w-[70%] ">
            @if ($errors->any())
                <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                    Something went wrong..
                </div>
                <ul class="rounded-b py-2 px-4 bg-red-300 text-red-700">
                     @foreach ($errors->all() as $error )
                         <li>
                             {{ $error }}
                         </li>
                     @endforeach
                </ul>
                
            @endif
        </div>
        {{-- end of error --}}
        <div class="my-4 w-[50%] mx-auto bg-white shadow-lg rounded-md py-4 relative overflow-y-scroll">
            <div @click="teamModal=false" class="absolute top-4 right-4 text-2xl font-semibold">
                <i class="fa fa-times" aria-hidden="true"></i> 
            </div>
            <form action="{{ route('storeTeam') }}"
             
            method="POST"
            enctype="multipart/form-data"
            class="mt-6 w-[86%] mx-auto">
            @csrf
            @method('POST')

                    

                    {{-- mane input --}}
                    <div class="py-2">
                        <label for="name" class="block text-lg font-semibold ">
                        Full Name
                        </label>
                        <input type="text" name="name" placeholder="Enter Name" class="bg-gray-300 py-2 px-4 text-md font-semibold focus:outline-none border-none rounded-sm w-[90%]">
                    </div>

                    {{-- end of name input --}}

                    {{-- email input --}}
                    <div class="py-2">
                        <label for="email" class="block  text-lg font-semibold ">
                        Email
                        </label>
                        <input type="email" name="email" placeholder="Enter Email" class="bg-gray-300 py-2 px-4 text-md font-semibold focus:outline-none border-none rounded-sm w-[90%]">
                    </div>
                    {{-- end of email input --}}

                    {{-- position input --}}
                    <div class="py-2">
                        <label for="position" class="block  text-lg font-semibold ">
                        Job Role
                        </label>
                        <input type="text" name="title" placeholder="Enter Position" class="bg-gray-300 py-2 px-4 text-md font-semibold focus:outline-none border-none rounded-sm w-[90%]">
                    </div>
                    {{-- end of position input --}}

                    {{-- phone number input --}}
                    
                    <div class="py-2">
                        <label for="p_number" class="block text-lg font-semibold ">
                        Phone Number
                        </label>
                        <input type="number" name="p_number" placeholder="Phone Number" class="bg-gray-300 py-2 px-4 text-md font-semibold focus:outline-none border-none rounded-sm w-[90%]">
                    </div>
                    {{-- end of phone number input --}}

                    {{-- image input --}}
                        <input type="file" name="image" class="my-2 py-2 px-4 focus:outline-none border-none bg-white shadow-md rounded-md">
                    {{-- end of image input --}}

                    {{-- description input --}}
                    <div class="py-2">
                        <label for="name" class="block  text-lg font-semibold ">
                        Description
                        </label>
                        <textarea name="description" id="" class="bg-gray-300 py-2 px-4 text-md font-semibold focus:outline-none border-none rounded-sm w-[90%]" ></textarea>
                    </div>
                    {{-- end of description input --}}

                    <button type="submit" class="py-2 px-6 rounded-md bg-green-500 hover:bg-green-700 text-lg font-bold"> Create</button>

    </form> 
        </div>
    </div>

      {{--table--}}
  <div class="flex flex-col">
    <div class="overflow-x-hidden sm:-mx-6 lg:-mx-8">
      <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <table class="min-w-full ">
            <thead class="bg-white border-b">
              <tr>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Name
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Email
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Title
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Phone Number
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                    Image
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                    Description
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                    Edit
                </th>
              </tr>
            </thead>
            <tbody>
                @foreach ( $teams as $team )
                <tr class="bg-gray-100 border-b">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{ $team->name }}
                        </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      {{ $team->email }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      {{ $team->title }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      {{ $team->p_number }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        <img src="{{ asset( $team->image_path) }}" alt="" class="rounded-full h-[150px] w-[150px]">
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $team->description }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        <div class="flex gap-4 items-center py-2">
                           <button class="py-2 px-6 rounded-md focus:outline-none bg-blue-600 hover:bg-blue-800 border-none text-white">
                               Edit
                           </button>
   
                           <button class="py-2 px-6 rounded-md focus:outline-none bg-red-600 hover:bg-red-800 border-none text-white">
                               Delete
                           </button>
   
                        </div>
                       </td>
                  </tr>  
                @endforeach
              
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection