<section class="w-full max-w-3xl">
  <div class="space-y-4 text-sm">
    <div class="grid grid-cols-2 gap-x-2">
      <h6 class="text-gray-700  dark:text-gray-400 font-semibold">{{ __('Name') }}</h6>
      <p class="text-gray-500 dark:text-gray-400">{{ $member->name }}</p>
    </div>
    <div class="grid grid-cols-2 gap-x-2">
      <h6 class="text-gray-700  dark:text-gray-400 font-semibold">{{ __('Family') }}</h6>
      <p class="text-gray-500 dark:text-gray-400">{{ $member->family->name }}</p>
    </div>
    <div class="grid grid-cols-2 gap-x-2">
      <h6 class="text-gray-700  dark:text-gray-400 font-semibold">{{ __('Address') }}</h6>
      <p class="text-gray-500 dark:text-gray-400">{{ $member->address }}</p>
    </div>
    <div class="grid grid-cols-2 gap-x-2">
      <h6 class="text-gray-700  dark:text-gray-400 font-semibold">{{ __('Phone') }}</h6>
      <a href="tel:{{ $member->phone }}"
        class="text-blue-600 dark:text-blue-500 hover:underline cursor-pointer">{{ $member->phone }}</a>
    </div>
    <div class="grid grid-cols-2 gap-x-2">
      <h6 class="text-gray-700  dark:text-gray-400 font-semibold">{{ __('Email') }}</h6>
      <a href="mailto:{{ $member->email }}"
        class="text-blue-600 dark:text-blue-500 hover:underline cursor-pointer">{{ $member->email }}</a>
    </div>
    <div class="grid grid-cols-2 gap-x-2">
      <h6 class="text-gray-700  dark:text-gray-400 font-semibold">{{ __('Notes') }}</h6>
      <p class="text-gray-500 dark:text-gray-400">{{ $member->notes }}</p>
    </div>
    <div class="grid grid-cols-2 gap-x-2">
      <h6 class="text-gray-700  dark:text-gray-400 font-semibold">{{ __('Prayer Requests') }}</h6>
      <p class="text-gray-500 dark:text-gray-400">{{ $member->prayer_requests }}</p>
    </div>
    <div class="grid grid-cols-2 gap-x-2">
      <h6 class="text-gray-700  dark:text-gray-400 font-semibold">{{ __('Last Visited Date') }}</h6>
      <p class="text-gray-500 dark:text-gray-400">{{ $member->last_visited_date }}</p>
    </div>
    <div class="grid grid-cols-2 gap-x-2">
      <h6 class="text-gray-700  dark:text-gray-400 font-semibold">{{ __('Clothing Size') }}</h6>
      <p class="text-gray-500 dark:text-gray-400">{{ $member->clothing_size }}</p>
    </div>
    <div class="grid grid-cols-2 gap-x-2">
      <h6 class="text-gray-700  dark:text-gray-400 font-semibold">{{ __('Picture') }}</h6>
      <p class="text-gray-500 dark:text-gray-400">
        <img src="{{ asset('storage/' . $member->picture) }}" class="rounded mt-2 w-48 object-cover"
          alt="member-picture">
      </p>
    </div>
    <div class="grid grid-cols-2 gap-x-2">
      <h6 class="text-gray-700  dark:text-gray-400 font-semibold">{{ __('Created at') }}</h6>
      <p class="text-gray-500 dark:text-gray-400">{{ $member->created_at->toDateTimeString() }}</p>
    </div>
    <div class="grid grid-cols-2 gap-x-2">
      <h6 class="text-gray-700  dark:text-gray-400 font-semibold">{{ __('Last Updated') }}</h6>
      <p class="text-gray-500 dark:text-gray-400">{{ $member->updated_at->toDateTimeString() }}</p>
    </div>
  </div>
</section>
