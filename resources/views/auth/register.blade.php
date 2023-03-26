@extends('layouts.app')


@section('body')
    class="bg-gray-200"
@endsection

@section('content')
    <!-- Register form that includes the name, npm, password  using tailwind css -->

    <div class="w-full max-w-sm mx-auto">

        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">

            <form  action="/register" method="POST">
                @csrf <!-- Cross Site Request Forgery -->
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="name">
                        Nama
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="name" name="name" type="text" placeholder="John Doe">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="npm">
                        NPM
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="npm" name="npm" type="text" placeholder="2008107010056">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 font-bold mb-2" for="password">
                        Password
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" name="password" type="password" placeholder="********">
                </div>
                <div class="flex items-center justify-between ">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                       >
                        Register
                    </button>
                </div>
            </form>


        </div>
        
    </div>


@endsection
