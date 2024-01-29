<!DOCTYPE html>
<head>
    @vite('resources/css/app.css')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angkasa Pura II</title>
</head>
<body style="background: url('{{ asset('image/form-background.jpg') }}') no-repeat center center fixed; background-size: cover">
<footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('image/Angkasa_Pura_II_logo_2014.svg.png') }}" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="{{ route('posts.index') }}" class="hover:underline me-4 md:me-6">Posts</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        
        <form class="max-w-sm mx-auto">
  <div class="mb-5">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
    <input type="email" id="email" name="email" class="bg-gray-100 border border-gray-300 text-gray-800 placeholder-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600" placeholder="example@example.com">
  </div>
  <div class="mb-5">
    <label for="password" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
    <input type="password" id="password" name="password" class="bg-gray-100 border border-gray-300 text-gray-800 placeholder-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600" placeholder="********">
  </div>
  <div class="flex items-center justify-between">
  <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-medium text-sm rounded-lg px-4 py-2 focus:outline-none focus:ring focus:border-blue-300">
    <a href="{{ route('posts.index') }}">Login</a>
</button>

    <a href="#" class="text-blue-500 hover:underline text-sm">Forgot Password?</a>
  </div>
</form>


        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="https://flowbite.com/" class="hover:underline">Angkasa Pura II™</a>. Created By Vins, Delker, And Baswara.</span>
    </div>
</footer>


</body>
</html>
