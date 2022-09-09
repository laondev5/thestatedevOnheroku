@extends('layout.adminApp')

@section('content')

<div class="px-4 my-4" x-data="{faq:false}">
  <button @click="faq=true" class="flex gap-x-3 py-2 px-6 rounded-md text-white bg-green-500 transition-all ease-in-out duration-300 hover:bg-green-800 cursor-pointer">
        Add a Question
        <span></span>
  </button> 
  
  <div class="mt-4">
     {{--table--}}
  <div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <table class="min-w-full">
            <thead class="bg-white border-b">
              <tr>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  S/N
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Question
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Answer
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Edit
                </th>
              </tr>
            </thead>
            <tbody>
                @foreach ( $faqs as $faq )
                <tr class="bg-gray-100 border-b">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                       {{ $faq->id }} 
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      {{ $faq->question }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      {{ $faq->answer }}
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

   {{-- faq model --}}
   <div x-show="faq" class="absolute top-0 left-0 bg-gray-400/60 w-full flex items-center justify-center h-screen z-20">
    <div  class=" w-[50%] mx-auto bg-white rounded-md shadow-md">
        <div @click="faq=false" class="absolute top-4 right-4 text-2xl font-semibold">
            <i class="fa fa-times" aria-hidden="true"></i> 
        </div>
        <form action="{{ route('admin.storeFaq') }}"
                method="POST"
                enctype="multipart/form-data"
                class="w-[95%] mx-auto">
                @csrf

                <div class="py-4">
                    <label for="question" class="block py-2">Question</label>
                    <input type="text" required name="question" placeholder="Question" class="py-2 px-3 focus:outline-none border-none font-semibold bg-gray-200 rounded-md w-[90%]">
                </div>

                <div class="py-4">
                    <label for="answer" class="block py-2">Answer</label>
                    <textarea name="answer" id="" class="py-2 px-3 focus:outline-none border-none font-semibold bg-gray-200 rounded-md w-[90%]"></textarea>
                </div>

                <button class="py-2 px-6 rounded-md focus:outline-none bg-green-600 hover:bg-green-800 border-none text-white">
                    Add
                </button>
            </form>
    </div>
</div>
{{-- end of faq model --}}


</div>

   

@endsection