@extends('layout.adminApp')

@section('content')

<div class="px-4 my-4">

    <div class="p-4">
        <h1 class="text-3xl font-bold cursor-pointer text-center">News Letter subscribers</h1>
    </div>
  

  {{--table--}}
  <div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full">
          <thead class="bg-white border-b">
            <tr>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                #
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Email
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Send
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Delete
              </th>
            </tr>
          </thead>
          
          <tbody>
            @foreach ($subs as $sub )

            <tr class="bg-gray-100 border-b">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                {{ $sub->id }}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{ $sub->email }}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                <form action="#">
                    <button type="submit" class="py-2 px-6 bg-blue-600 hover:bg-blue-800 rounded-md font-bold hover:text-white focus:outline-none border-none">
                        Send
                    </button>
                </form>
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                <form action="#">
                    <button type="submit" class="py-2 px-6 bg-red-600 hover:bg-red-800 rounded-md font-bold hover:text-white focus:outline-none border-none">
                        Delete
                    </button>
                </form>
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