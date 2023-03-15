<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Bigscreen | Results</title>
</head>
<body>
  <div class="overflow-hidden bg-slate-400">
    <a href="/" class="-m-1.5 p-1.5">
      <span class="sr-only">Bigscreen Results</span>
      <img class="h-8 ml-6" src="https://www.bigscreenvr.com/images/logos/bigscreen.svg" alt="Bigscreen">
    </a>
    <div class="px-4 py-5 sm:px-6">
      <h3 class="text-base font-semibold leading-6 text-black">Sondage Bigscreen</h3>
      <p class="mt-1 max-w-2xl text-sm text-white">Vous trouverez ci-dessous vos réponses à notre sondage.</p>
    </div>
    <div class="border-t border-gray-200">
      <dl>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        @foreach ($questions as $question)
        @foreach ($userAnswers as $answer)
          @if ($question->id == $answer->question_id)
          <dt class="text-sm font-medium text-gray-500">{{$question->body}}</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$answer->user_answer}}</dd>
          @endif
        @endforeach
        @endforeach
        </div>
      </dl>
    </div>
  </div>
</body>
</html>