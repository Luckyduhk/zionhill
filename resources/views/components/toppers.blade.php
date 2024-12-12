@props(['toppers'])

<div {{ $attributes->merge(['class' => 'flex items-end justify-center space-x-2']) }}>
  <div class="flex flex-col items-center space-y-2">
    <x-icons.silver-medal class="w-24" />
    <div
      class="p-2 h-28 sm:h-16 w-24 sm:w-48 flex items-center justify-center text-center bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
      <h6 class="dark:text-white font-medium leading-light mb-0">
        {{ isset($toppers[1]) ? $toppers[1]->name . ' (x' . $toppers[1]->wins_cnt . ')' : __('N/R') }}</h6>
    </div>
  </div>
  <div class="flex flex-col items-center space-y-2">
    <x-icons.gold-medal class="w-24" />
    <div
      class="p-2 h-32 sm:h-20 w-24 sm:w-48 flex items-center justify-center text-center  bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
      <p class="dark:text-white font-medium leading-light mb-0">
        {{ isset($toppers[0]) ? $toppers[0]->name . ' (x' . $toppers[0]->wins_cnt . ')' : __('N/R') }}</p>
    </div>
  </div>
  <div class="flex flex-col items-center space-y-2">
    <x-icons.bronze-medal class="w-24" />
    <div
      class="p-2 h-24 sm:h-12 w-24 sm:w-48 flex items-center justify-center text-center bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
      <p class="dark:text-white font-medium leading-light mb-0">
        {{ isset($toppers[2]) ? $toppers[2]->name . ' (x' . $toppers[2]->wins_cnt . ')' : __('N/R') }}</p>
    </div>
  </div>
</div>
