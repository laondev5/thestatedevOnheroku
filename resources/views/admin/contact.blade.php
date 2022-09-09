@extends('layout.adminApp')

@section('content')

<div class="px-4 my-4">
  

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
                Name
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Email
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Message
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Edit
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ( $contacts as $contact )
                
            @endforeach
            <tr class="bg-gray-100 border-b">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                {{ $contact->id }}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{ $contact->name }}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{ $contact->email }}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{ $contact->message }}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
               <div class="flex gap-4 items-center pt-2">
                <button class="py-2 px-6 rounded-md focus:outline-none bg-blue-600 hover:bg-blue-800 border-none text-white">
                    Edit
                </button>

                <button class="py-2 px-6 rounded-md focus:outline-none bg-red-600 hover:bg-red-800 border-none text-white">
                    Delete
                </button>
               </div>
              </td>
            </tr>
           
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>

@endsection