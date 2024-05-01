<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <title>Login Test Api</title>
</head>

<body>
    <div class="flex flex-wrap justify-center min-h-screen bg-gray-300 dark:bg-gray-900 w-full">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 h-screen w-full">

            {{-- login --}}
            <div class="flex flex-col items-center justify-end mb-10">
                <div
                    class="w-full max-w-sm card bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <form class="space-y-6" method="POST" action="{{ route('login') }}">
                        @csrf
                        <h5 class="text-xl font-medium text-gray-900 dark:text-white">Sign in to our
                            platform</h5>
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                            <input type="text" name="username" id="username"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required />
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required />
                        </div>
                        <button type="submit"
                            class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>

                    </form>
                </div>
            </div>

            {{-- row 2 --}}
            <div class="flex flex-col items-center justify-center bg-white dark:bg-gray-900 rounded-l-xl p-6 ">
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Test Api Website Golang</h1>
                <h1 class="text-xl font-bold text-gray-900 dark:text-white mb-10">By Kosan Watu Gilang</h1>
                <figure class="max-w-xs">
                    <img class="h-80 w-auto rounded-lg " src="{{ asset('image/tol.jpg') }}"
                        alt="image description">
                    <figcaption class="mt-2 text-xl font-extrabold text-center text-gray-500 dark:text-gray-400">PRIA TAMPAN
                    </figcaption>
                </figure>
            </div>
        </div>
</body>

</html>
