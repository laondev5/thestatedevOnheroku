@extends('layout.adminApp')

@section('content')

<div class="py-8 px-4">
    <div class="w-full py-6 flex-col items-center justify-center">
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
        <div class="my-4 w-[50%] mx-auto bg-white shadow-lg rounded-md">
            <form action="{{ route('admin.store') }}" method="Post" class="w-[90%] mx-auto py-4">
                @csrf
                <div class="pb-6">
                    <label for="name" class="blocl text-lg font-semibold">Name</label>
                    <input type="text" name="name" placeholder="Enter A Name" class="w-full py-2 px-4 focus:outline-none border-none bg-gray-100 rounded-sm">
                </div>
                <div class="pb-6">
                    <label for="email" class="blocl text-lg font-semibold">Email</label>
                    <input type="email" name="email" placeholder="Enter An Email" class="w-full py-2 px-4 focus:outline-none border-none bg-gray-100 rounded-sm">
                </div>
                <div class="pb-6">
                    <label for="password" class="blocl text-lg font-semibold">Password</label>
                    <input type="password" name="password" placeholder="Enter A Password" class="w-full py-2 px-4 focus:outline-none border-none bg-gray-100 rounded-sm">
                </div>
                
                <div class="pb-6 w-full flex items-center justify-center">
                    <button class="py-2 px-6 bg-green-500 hover:bg-green-700 rounded-sm text-white font-bold text-lg ">Create Admin</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection