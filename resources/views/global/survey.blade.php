<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')

  <title>Bigscreen | Survey</title>
</head>
<body class="bg-slate-400 font-[Poppins] text-center isolate h-screen">
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
  <h1 class="text-3xl mt-5">Sondage BigScreen</h1>
  @if(session('success'))
  <div class="p-4 mb-4 mt-4 text-lg text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
    <span class="font-medium">Toute l’équipe de Bigscreen vous remercie pour votre engagement. Grâce à votre investissement, nous vous préparons une application toujours plus facile à utiliser, seul ou en famille.
      Si vous désirez consulter vos réponse ultérieurement, vous pouvez consultez cette adresse: <a href="{{session('success')}}" target="_blank" class="hover:underline focus:underline">consulter les réponses</a></span>
  </div>
  @endif
  @if(session('error'))
  <div>
    <p>{{session('error')}}</p>
  </div>
  @endif
  @unless (count($question) == 0)
    <!-- Create Form -->
    <form id="form" action="/submitform" method="POST" class="bg-white max-w-3xl my-12 mx-auto py-7 px-5 shadow-myBoxShadow">
      @csrf
      {{-- question 1 --}}
      <div class="text-left mb-6">
        <label for="email_{{$question[0]->id}}" id="label-email" class="block mb-2.5">
          {{$question[0]->id}}. {{$question[0]->body}}
        </label>
  
        <!-- Input Type Email-->
        <input type="email"
          id="email_{{$question[0]->id}}"
          name="mail_{{$question[0]->id}}"
          placeholder="Votre adresse email"
          class="border border-solid border-[#777] rounded-sm p-2.5 block w-[95%]"
           />
      </div>
      {{-- question 2 --}}
      <div class="text-left mb-6">
        <label for="age_{{$question[1]->id}}" id="label-age" class="block mb-2.5">
          {{$question[1]->id}}. {{$question[1]->body}}
        </label>
        <input type="text"
          inputmode="numeric"
          pattern="[0-9]+"
          id="age_{{$question[1]->id}}"
          name="age_{{$question[1]->id}}"
          placeholder="Votre âge"
          class="border border-solid border-[#777] rounded-sm p-2.5 block w-[95%]"
           />
      </div>
      {{-- question 3 --}}
      <div class="text-left mb-6">
        <label for="sex_{{$question[2]->id}}" id="label-sex" class="block mb-2.5">
          {{$question[2]->id}}. {{$question[2]->body}}
        </label>
        
        <!-- Dropdown options -->
        <select name="sex_{{$question[2]->id}}" id="sex_{{$question[2]->id}}" class="border border-solid border-[#777] rounded-sm p-2.5 block w-[95%]">
          <option value="{{$answer[0]->question_answer}}" selected="selected">{{$answer[0]->question_answer}}</option>
          <option value="{{$answer[1]->question_answer}}">{{$answer[1]->question_answer}}</option>
          <option value="{{$answer[2]->question_answer}}">{{$answer[2]->question_answer}}</option>
        </select>
      </div>
      {{-- question 4 --}}
      <div class="text-left mb-6">
        <label for="people_{{$question[3]->id}}" id="label-people" class="block mb-2.5">
          {{$question[3]->id}}. {{$question[3]->body}}
        </label>
        <!-- Dropdown options -->
        <select name="people_{{$question[3]->id}}" id="people_{{$question[3]->id}}" class="border border-solid border-[#777] rounded-sm p-2.5 block w-[95%]">
          <option value="{{$answer[3]->question_answer}}" selected="selected">{{$answer[3]->question_answer}}</option>
          <option value="{{$answer[4]->question_answer}}">{{$answer[4]->question_answer}}</option>
          <option value="{{$answer[5]->question_answer}}">{{$answer[5]->question_answer}}</option>
          <option value="{{$answer[6]->question_answer}}">{{$answer[6]->question_answer}}</option>
          <option value="{{$answer[7]->question_answer}}">{{$answer[7]->question_answer}}</option>
        </select>
      </div>
      {{-- question 5 --}}
      <div class="text-left mb-6">
        <label for="job_{{$question[4]->id}}" id="label-job" class="block mb-2.5">
          {{$question[4]->id}}. {{$question[4]->body}}
        </label>
        <input type="text"
          id="job_{{$question[4]->id}}"
          name="job_{{$question[4]->id}}"
          placeholder="Votre profession"
          class="border border-solid border-[#777] rounded-sm p-2.5 block w-[95%]"
           />
      </div>
      {{-- question 6 --}}
      <div class="text-left mb-6">
        <label class="block mb-2.5">{{$question[5]->id}}. {{$question[5]->body}}
          <small>(Plusieurs choix possibles)</small>
        </label>
        <!-- Input Type Checkbox -->
        <label for="model_{{$answer[8]->id}}" class="block mb-2.5">
          <input type="checkbox"
            name="model_{{$question[5]->id}}"
            id="model_{{$answer[8]->id}}"
            value="{{$answer[8]->question_answer}}"
            class="inline-block mr-1">{{$answer[8]->question_answer}}</label>
        <label for="model_{{$answer[9]->id}}" class="block mb-2.5">
          <input type="checkbox"
            name="model_{{$question[5]->id}}"
            id="model_{{$answer[9]->id}}"
            value="{{$answer[9]->question_answer}}"
            class="inline-block mr-1">{{$answer[9]->question_answer}}</label>
        <label for="model_{{$answer[10]->id}}" class="block mb-2.5">
          <input type="checkbox"
            name="model_{{$question[5]->id}}"
            id="model_{{$answer[10]->id}}"
            value="{{$answer[10]->question_answer}}"
            class="inline-block mr-1">{{$answer[10]->question_answer}}</label>
        <label for="model_{{$answer[11]->id}}" class="block mb-2.5">
          <input type="checkbox"
            name="model_{{$question[5]->id}}"
            id="model_{{$answer[11]->id}}"
            value="{{$answer[11]->question_answer}}"
            class="inline-block mr-1">{{$answer[11]->question_answer}}</label>
      </div>
      {{-- question 7 --}}
      <div class="text-left mb-6">
        <label class="block mb-2.5">{{$question[6]->id}}. {{$question[6]->body}}
          <small>(Plusieurs choix possibles)</small>
        </label>
        <!-- Input Type Checkbox -->
        <label for="store_{{$answer[12]->id}}" class="block mb-2.5">
          <input type="checkbox"
            name="store_{{$question[6]->id}}"
            id="store_{{$answer[12]->id}}"
            value="{{$answer[12]->question_answer}}"
            class="inline-block mr-1">{{$answer[12]->question_answer}}</label>
        <label for="store_{{$answer[13]->id}}" class="block mb-2.5">
          <input type="checkbox"
            name="store_{{$question[6]->id}}"
            id="store_{{$answer[13]->id}}"
            value="{{$answer[13]->question_answer}}"
            class="inline-block mr-1">{{$answer[13]->question_answer}}</label>
        <label for="store_{{$answer[14]->id}}" class="block mb-2.5">
          <input type="checkbox"
            name="store_{{$question[6]->id}}"
            id="store_{{$answer[14]->id}}"
            value="{{$answer[14]->question_answer}}"
            class="inline-block mr-1">{{$answer[14]->question_answer}}</label>
        <label for="store_{{$answer[15]->id}}" class="block mb-2.5">
          <input type="checkbox"
            name="store_{{$question[6]->id}}"
            id="store_{{$answer[15]->id}}"
            value="{{$answer[15]->question_answer}}"
            class="inline-block mr-1">{{$answer[15]->question_answer}}</label>
        <label for="store_{{$answer[16]->id}}" class="block mb-2.5">
          <input type="checkbox"
            name="store_{{$question[6]->id}}"
            id="store_{{$answer[16]->id}}"
            value="{{$answer[16]->question_answer}}"
            class="inline-block mr-1">{{$answer[16]->question_answer}}</label>
        <label for="store_{{$answer[17]->id}}" class="block mb-2.5">
          <input type="checkbox"
            name="store_{{$question[6]->id}}"
            id="store_{{$answer[17]->id}}"
            value="{{$answer[17]->question_answer}}"
            class="inline-block mr-1">{{$answer[17]->question_answer}}</label>
      </div>
      {{-- question 8 --}}
      <div class="text-left mb-6">
        <label class="block mb-2.5">{{$question[7]->id}}. {{$question[7]->body}}
          <small>(Plusieurs choix possibles)</small>
        </label>
        <!-- Input Type Checkbox -->
        <label for="brand_{{$answer[18]->id}}" class="block mb-2.5">
          <input type="checkbox"
            name="brand_{{$question[7]->id}}"
            id="brand_{{$answer[18]->id}}"
            value="{{$answer[18]->question_answer}}"
            class="inline-block mr-1">{{$answer[18]->question_answer}}</label>
        <label for="brand_{{$answer[19]->id}}" class="block mb-2.5">
          <input type="checkbox"
            name="brand_{{$question[7]->id}}"
            id="brand_{{$answer[19]->id}}"
            value="{{$answer[19]->question_answer}}"
            class="inline-block mr-1">{{$answer[19]->question_answer}}</label>
        <label for="brand_{{$answer[20]->id}}" class="block mb-2.5">
          <input type="checkbox"
            name="brand_{{$question[7]->id}}"
            id="brand_{{$answer[20]->id}}"
            value="{{$answer[20]->question_answer}}"
            class="inline-block mr-1">{{$answer[20]->question_answer}}</label>
        <label for="brand_{{$answer[21]->id}}" class="block mb-2.5">
          <input type="checkbox"
            name="brand_{{$question[7]->id}}"
            id="brand_{{$answer[21]->id}}"
            value="{{$answer[21]->question_answer}}"
            class="inline-block mr-1">{{$answer[21]->question_answer}}</label>
        <label for="brand_{{$answer[22]->id}}" class="block mb-2.5">
          <input type="checkbox"
            name="brand_{{$question[7]->id}}"
            id="brand_{{$answer[22]->id}}"
            value="{{$answer[22]->question_answer}}"
            class="inline-block mr-1">{{$answer[22]->question_answer}}</label>
      </div>
      {{-- question 9 --}}
      <div class="text-left mb-6">
        <label for="watch_{{$question[8]->id}}" id="label-watch" class="block mb-2.5">
          {{$question[8]->id}}. {{$question[8]->body}}
        </label>
        <!-- Dropdown options -->
        <select name="watch_{{$question[8]->id}}" id="watch_{{$question[8]->id}}" class="border border-solid border-[#777] rounded-sm p-2.5 block w-[95%]">
          <option value="{{$answer[3]->question_answer}}" selected="selected">{{$answer[3]->question_answer}}</option>
          <option value="{{$answer[4]->question_answer}}">{{$answer[4]->question_answer}}</option>
          <option value="{{$answer[5]->question_answer}}">{{$answer[5]->question_answer}}</option>
          <option value="{{$answer[6]->question_answer}}">{{$answer[6]->question_answer}}</option>
          <option value="{{$answer[7]->question_answer}}">{{$answer[7]->question_answer}}</option>
        </select>
      </div>
      {{-- question 10 --}}
      <div class="text-left mb-6">
        <label class="block mb-2.5">{{$question[9]->id}}. {{$question[9]->body}}
          <small>(Plusieurs choix possibles)</small>
        </label>
        <!-- Input Type Checkbox -->
        <label for="usage_{{$answer[23]->id}}" class="block mb-2.5">
          <input type="checkbox"
            name="usage_{{$question[9]->id}}"
            id="usage_{{$answer[23]->id}}"
            value="{{$answer[23]->question_answer}}"
            class="inline-block mr-1">{{$answer[23]->question_answer}}</label>
        <label for="usage_{{$answer[24]->id}}" class="block mb-2.5">
          <input type="checkbox"
            name="usage_{{$question[9]->id}}"
            id="usage_{{$answer[24]->id}}"
            value="{{$answer[24]->question_answer}}"
            class="inline-block mr-1">{{$answer[24]->question_answer}}</label>
        <label for="usage_{{$answer[25]->id}}" class="block mb-2.5">
          <input type="checkbox"
            name="usage_{{$question[9]->id}}"
            id="usage_{{$answer[25]->id}}"
            value="{{$answer[25]->question_answer}}"
            class="inline-block mr-1">{{$answer[25]->question_answer}}</label>
        <label for="usage_{{$answer[26]->id}}" class="block mb-2.5">
          <input type="checkbox"
            name="usage_{{$question[9]->id}}"
            id="usage_{{$answer[26]->id}}"
            value="{{$answer[26]->question_answer}}"
            class="inline-block mr-1">{{$answer[26]->question_answer}}</label>
      </div>
      {{-- question 11 --}}
      <div class="text-left mb-6">
        <label for="image_{{$question[10]->id}}" id="label-image" class="block mb-2.5">
          {{$question[10]->id}}. {{$question[10]->body}}
        </label>
        <!-- Dropdown options -->
        <select name="image_{{$question[10]->id}}" id="image_{{$question[10]->id}}" class="border border-solid border-[#777] rounded-sm p-2.5 block w-[95%]">
          <option value="{{$answer[3]->question_answer}}" selected="selcted">{{$answer[3]->question_answer}}</option>
          <option value="{{$answer[4]->question_answer}}">{{$answer[4]->question_answer}}</option>
          <option value="{{$answer[5]->question_answer}}">{{$answer[5]->question_answer}}</option>
          <option value="{{$answer[6]->question_answer}}">{{$answer[6]->question_answer}}</option>
          <option value="{{$answer[7]->question_answer}}">{{$answer[7]->question_answer}}</option>
        </select>
      </div>
      {{-- question 12 --}}
      <div class="text-left mb-6">
        <label for="comfort_{{$question[11]->id}}" id="label-comfort" class="block mb-2.5">
          {{$question[11]->id}}. {{$question[11]->body}}
        </label>
        <!-- Dropdown options -->
        <select name="comfort_{{$question[11]->id}}" id="comfort_{{$question[11]->id}}" class="border border-solid border-[#777] rounded-sm p-2.5 block w-[95%]">
          <option value="{{$answer[3]->question_answer}}" selected="selcted">{{$answer[3]->question_answer}}</option>
          <option value="{{$answer[4]->question_answer}}">{{$answer[4]->question_answer}}</option>
          <option value="{{$answer[5]->question_answer}}">{{$answer[5]->question_answer}}</option>
          <option value="{{$answer[6]->question_answer}}">{{$answer[6]->question_answer}}</option>
          <option value="{{$answer[7]->question_answer}}">{{$answer[7]->question_answer}}</option>
        </select>
      </div>
      {{-- question 13 --}}
      <div class="text-left mb-6">
        <label for="network_{{$question[12]->id}}" id="label-network" class="block mb-2.5">
          {{$question[12]->id}}. {{$question[12]->body}}
        </label>
        <!-- Dropdown options -->
        <select name="network_{{$question[12]->id}}" id="network_{{$question[12]->id}}" class="border border-solid border-[#777] rounded-sm p-2.5 block w-[95%]">
          <option value="{{$answer[3]->question_answer}}" selected="selcted">{{$answer[3]->question_answer}}</option>
          <option value="{{$answer[4]->question_answer}}">{{$answer[4]->question_answer}}</option>
          <option value="{{$answer[5]->question_answer}}">{{$answer[5]->question_answer}}</option>
          <option value="{{$answer[6]->question_answer}}">{{$answer[6]->question_answer}}</option>
          <option value="{{$answer[7]->question_answer}}">{{$answer[7]->question_answer}}</option>
        </select>
      </div>
      {{-- question 14 --}}
      <div class="text-left mb-6">
        <label for="graphics_{{$question[13]->id}}" id="label-graphics" class="block mb-2.5">
          {{$question[13]->id}}. {{$question[13]->body}}
        </label>
        <!-- Dropdown options -->
        <select name="graphics_{{$question[13]->id}}" id="graphics_{{$question[13]->id}}" class="border border-solid border-[#777] rounded-sm p-2.5 block w-[95%]">
          <option value="{{$answer[3]->question_answer}}" selected="selcted">{{$answer[3]->question_answer}}</option>
          <option value="{{$answer[4]->question_answer}}">{{$answer[4]->question_answer}}</option>
          <option value="{{$answer[5]->question_answer}}">{{$answer[5]->question_answer}}</option>
          <option value="{{$answer[6]->question_answer}}">{{$answer[6]->question_answer}}</option>
          <option value="{{$answer[7]->question_answer}}">{{$answer[7]->question_answer}}</option>
        </select>
      </div>
      {{-- question 15 --}}
      <div class="text-left mb-6">
        <label for="audio_{{$question[14]->id}}" id="label-audio" class="block mb-2.5">
          {{$question[14]->id}}. {{$question[14]->body}}
        </label>
        <!-- Dropdown options -->
        <select name="audio_{{$question[14]->id}}" id="audio_{{$question[14]->id}}" class="border border-solid border-[#777] rounded-sm p-2.5 block w-[95%]">
          <option value="{{$answer[3]->question_answer}}" selected="selcted">{{$answer[3]->question_answer}}</option>
          <option value="{{$answer[4]->question_answer}}">{{$answer[4]->question_answer}}</option>
          <option value="{{$answer[5]->question_answer}}">{{$answer[5]->question_answer}}</option>
          <option value="{{$answer[6]->question_answer}}">{{$answer[6]->question_answer}}</option>
          <option value="{{$answer[7]->question_answer}}">{{$answer[7]->question_answer}}</option>
        </select>
      </div>
      {{-- question 16 --}}
      <div class="text-left mb-6">
        <label class="block mb-2.5">
          {{$question[15]->id}}. {{$question[15]->body}}
        </label>
  
        <!-- Input Type Radio Button -->
        <label for="notification_{{$question[15]->id}}" class="block mb-2.5">
          <input type="radio"
            value="{{$answer[27]->question_answer}}"
            id="notification_{{$answer[27]->id}}"
            name="notification_{{$question[15]->id}}"
            class="inline-block mr-1">{{$answer[27]->question_answer}}
        </label>
        <label for="notification_{{$question[15]->id}}" class="block mb-2.5">
          <input type="radio"
            value="{{$answer[28]->question_answer}}"
            id="notification_{{$answer[28]->id}}"
            name="notification_{{$question[15]->id}}"
            class="inline-block mr-1">{{$answer[28]->question_answer}}
        </label>
      </div>
      {{-- question 17 --}}
      <div class="text-left mb-6">
        <label class="block mb-2.5">
          {{$question[16]->id}}. {{$question[16]->body}}
        </label>
  
        <!-- Input Type Radio Button -->
        <label for="invite_{{$answer[27]->id}}" class="block mb-2.5">
          <input type="radio"
            value="{{$answer[27]->question_answer}}"
            id="invite_{{$answer[27]->id}}"
            name="invite_{{$question[16]->id}}"
            class="inline-block mr-1">{{$answer[27]->question_answer}}
        </label>
        <label for="invite2{{$answer[28]->id}}" class="block mb-2.5">
          <input type="radio"
            value="{{$answer[28]->question_answer}}"
            id="invite2{{$answer[28]->id}}"
            name="invite_{{$question[16]->id}}"
            class="inline-block mr-1">{{$answer[28]->question_answer}}
        </label>
      </div>
      {{-- question 18 --}}
      <div class="text-left mb-6">
        <label class="block mb-2.5">
          {{$question[17]->id}}. {{$question[17]->body}}
        </label>
  
        <!-- Input Type Radio Button -->
        <label for="record_{{$answer[27]->id}}" class="block mb-2.5">
          <input type="radio"
            value="{{$answer[27]->question_answer}}"
            id="record_{{$answer[27]->id}}"
            name="record_{{$question[17]->id}}"
            class="inline-block mr-1">{{$answer[27]->question_answer}}
        </label>
        <label for="record_{{$answer[28]->id}}" class="block mb-2.5">
          <input type="radio"
            value="{{$answer[28]->question_answer}}"
            id="record_{{$answer[28]->id}}"
            name="record_{{$question[17]->id}}"
            class="inline-block mr-1">{{$answer[28]->question_answer}}
        </label>
      </div>
      {{-- question 19 --}}
      <div class="text-left mb-6">
        <label class="block mb-2.5">
          {{$question[18]->id}}. {{$question[18]->body}}
        </label>
  
        <!-- Input Type Radio Button -->
        <label for="gaming_{{$answer[27]->id}}" class="block mb-2.5">
          <input type="radio"
            value="{{$answer[27]->question_answer}}"
            id="gaming_{{$answer[27]->id}}"
            name="gaming_{{$question[18]->id}}"
            class="inline-block mr-1">{{$answer[27]->question_answer}}
        </label>
        <label for="gaming_{{$answer[28]->id}}" class="block mb-2.5">
          <input type="radio"
            value="{{$answer[28]->question_answer}}"
            id="gaming_{{$answer[28]->id}}"
            name="gaming_{{$question[18]->id}}"
            class="inline-block mr-1">{{$answer[28]->question_answer}}
        </label>
      </div>
      {{-- question 20 --}}
      <div class="text-left mb-6">
        <label for="comment" class="block mb-2.5">
          {{$question[19]->id}}. {{$question[19]->body}}
        </label>
  
        <!-- multi-line text input control -->
        <textarea name="comment_{{$question[19]->id}}" id="comment_{{$question[19]->id}}" placeholder="Veuillez saisir votre reponse ici" class="border border-solid border-[#777] rounded-sm p-2.5 block w-[95%] h-32 resize-none" maxlength="500"></textarea>
        <div id="the-count">
          <span id="current"></span>
          <span id="maximum"></span>
          <small class="ml-1">nombre maximal de caractères</small>
        </div>
      </div>
  
      <!-- Multi-line Text Input Control -->
      <button type="submit" value="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-1.5 px-3.5 text-base font-semibold leading-7 text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
        <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" stroke="#fff">
          <path fill-rule="evenodd" d="M20 4L3 9.31372L10.5 13.5M20 4L14.5 21L10.5 13.5M20 4L10.5 13.5"  clip-rule="evenodd"/>
          </svg>
        </span>
        Soumettre
      </button>
      <a href="/" class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-1.5 px-3.5 mt-2 text-base font-semibold leading-7 text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
        <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" viewBox="0 0 155.139 155.139" fill="currentColor" aria-hidden="true" stroke="#fff">
        <path fill-rule="evenodd" d="M125.967,51.533V20.314h-16.862V38.06L77.569,12.814L0,74.869h21.361v67.455h112.416v-67.45h21.361L125.967,51.533z M125.925,134.472H97.546V82.37H57.58v52.103H29.202V71.146l48.356-38.689l48.355,38.689v63.326H125.925z" clip-rule="evenodd" />
        </svg>
      </span>
      Page d'accueil</a>
    </form>
  @else
  <p>Ce sondage ne contient actuellement aucune question. Veuillez réessayer plus tard.</p>
  @endunless
  <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="p-3 bg-indigo-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-indigo-700 hover:shadow-lg focus:bg-indigo-700 focus:shadow-lg focus:outline-none focus:ring-0 active:hover:bg-indigo-800 active:shadow-lg transition duration-150 ease-in-out bottom-5 right-5 fixed hidden" id="btn-back-to-top">
    <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-4 h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"></path></svg>
  </button>
  <script type="text/javascript" src="{{ asset('js/ageLimit.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/charLimit.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/topButton.js') }}"></script>
</body>
</html>