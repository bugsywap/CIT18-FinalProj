<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books Collection</title>
</head>
<body class="bg-slate-800">
    

<nav class="bg-gray-900 sticky top-0 flex items-center justify-center">
    <div class="flex flex-wrap items-center justify-between mx-10 p-8">
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <li>
            <a href="#" class="block py-2 px-3 bg-blue-700 rounded md:bg-transparent p-0  text-blue-500" aria-current="page">Home</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 hover:bg-gray-100 md:hover:bg-transparent md:border-0 p-0 text-white hover:text-blue-500">Rent A Book</a>
          </li>
          <li>
            <a href="https://uc-bcf.instructure.com/" target="_blank">
                <span class="self-center text-4xl font-bold whitespace-nowrap dark:text-white">Nahuli Me Tangere</span>
            </a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 hover:bg-gray-100 md:hover:bg-transparent md:border-0 p-0 text-white hover:text-blue-500">Pricing</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 hover:bg-gray-100 md:hover:bg-transparent md:border-0 p-0 text-white hover:text-blue-500">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
    

