<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-50">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  
  <title>Bigscreen | Login</title>
</head>
<body class="h-full">
  <div class="isolate bg-slate-400 h-screen overflow-hidden">
    <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]">
      <svg class="relative left-[calc(50%-11rem)] -z-10 h-[21.1875rem] max-w-none -translate-x-1/2 rotate-[30deg] sm:left-[calc(50%-30rem)] sm:h-[42.375rem]" viewBox="0 0 1155 678">
        <path fill="url(#45de2b6b-92d5-4d68-a6a0-9b9b2abad533)" fill-opacity=".3" d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
        <defs>
          <linearGradient id="45de2b6b-92d5-4d68-a6a0-9b9b2abad533" x1="1155.49" x2="-78.208" y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
            <stop stop-color="#9089FC" />
            <stop offset="1" stop-color="#FF80B5" />
          </linearGradient>
        </defs>
      </svg>
    </div>
    <div class="mx-2">
  <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8">
      <div>
        <img class="mx-auto h-12 w-auto" src="https://www.bigscreenvr.com/images/logos/bigscreen.svg" alt="Bigscreen">
        <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Connectez-vous à votre compte</h2>
      </div>
      <form class="mt-8 space-y-6" action="/authenticate" method="POST">
        @csrf
        <input type="hidden" name="remember" value="true">
        <div class="-space-y-px rounded-md shadow-sm">
          <div>
            <label for="email-address" class="sr-only">Adresse email</label>
            <input id="email-address" name="email" type="email" autocomplete="email" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Adresse email">
          </div>
          <div>
            <label for="password" class="sr-only">Mot de passe</label>
            <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Mot de passe">
          </div>
        </div>
  
        <div class="flex items-center justify-between">
          <div class="flex items-center">
            <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
            <label for="remember-me" class="ml-2 block text-sm text-gray-900">Sauvegarder le mot de passe</label>
          </div>
  
          <div class="text-sm">
            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-700 hover:underline">Mot de passe oublié ?</a>
          </div>
        </div>
        <div>
          <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-1.5 px-3.5 text-base font-semibold leading-7 text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
              <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" stroke="#fff">
                <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
              </svg>
            </span>
            Connexion
          </button>
          <a href="/" class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-1.5 px-3.5 mt-2 text-base font-semibold leading-7 text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
            <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" viewBox="0 0 155.139 155.139" fill="currentColor" aria-hidden="true" stroke="#fff">
            <path fill-rule="evenodd" d="M125.967,51.533V20.314h-16.862V38.06L77.569,12.814L0,74.869h21.361v67.455h112.416v-67.45h21.361L125.967,51.533z M125.925,134.472H97.546V82.37H57.58v52.103H29.202V71.146l48.356-38.689l48.355,38.689v63.326H125.925z" clip-rule="evenodd"/>
            </svg>
          </span>
          Page d'accueil</a>
        </div>
      </form>
    </div>
  </div>
  </div>
</body>
</html>