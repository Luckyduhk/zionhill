<x-app-layout>
  <h1 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6"> {{ __('Dashboard') }} </h1>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
    <div class="col-span-1 md:col-span-2 rounded-lg sm:p-6 md:p-8 bg-gray-50 dark:bg-gray-800">
      <h2 class="text-lg text-center font-semibold text-gray-800 dark:text-gray-200 mb-4">Family Member Visits</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="text-center">
          <span class="block text-2xl font-bold text-gray-800 dark:text-gray-200">{{ $last30DaysVisitsCount }}</span>
          <span class="text-sm text-gray-600 dark:text-gray-400">Last 30 Days</span>
        </div>
        <div class="text-center">
          <span class="block text-2xl font-bold text-gray-800 dark:text-gray-200">{{ $last60DaysVisitsCount }}</span>
          <span class="text-sm text-gray-600 dark:text-gray-400">Last 60 Days</span>
        </div>
        <div class="text-center">
          <span class="block text-2xl font-bold text-gray-800 dark:text-gray-200">{{ $last90DaysVisitsCount }}</span>
          <span class="text-sm text-gray-600 dark:text-gray-400">Last 90 Days</span>
        </div>
      </div>
    </div>
    <div
      class="col-span-1 md:col-span-1 rounded-lg sm:p-6 md:p-8 bg-gray-50 dark:bg-gray-800 flex flex-col justify-center items-center">
      <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">Total Family Members</h2>
      <span class="text-2xl font-bold text-gray-800 dark:text-gray-200">{{ $totalMembersCount }}</span>
    </div>
  </div>

  <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">Last 10 Visits</h2>

  <div class="relative overflow-x-auto">
    <table class="w-full mb-4 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <x-table-th>{{ __('ID') }}</x-table-th>
          <x-table-th>{{ __('Family') }}</x-table-th>
          <x-table-th>{{ __('Name') }}</x-table-th>
          <x-table-th>{{ __('Visited at') }}</x-table-th>
        </tr>
      </thead>
      <tbody>
        @forelse ($last10FamilyMemberVisits as $member)
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <td class="px-6 py-4">
              {{ $member->id }}
            </td>
            <td class="px-6 py-4">
              @if (is_null($member?->family))
                {{ __('N/R') }}
              @else
                <a href="{{ route('members.index', ['family_id' => $member->family->id]) }}"
                  class="text-blue-600 dark:text-blue-500 hover:underline cursor-pointer">{{ $member->family->name }}</a>
              @endif
            </td>
            <td class="px-6 py-4">
              @if (is_null($member->first_name) && is_null($member->last_name))
                {{ __('N/R') }}
              @else
                <a href="{{ route('members.edit', $member->id) }}"
                  class="text-blue-600 dark:text-blue-500 hover:underline cursor-pointer">
                  {{ $member->first_name ?? '' }}
                  {{ $member->last_name ?? '' }}
                </a>
              @endif
            </td>
            <td class="px-6 py-4">
              {{ $member->last_visited_date ?? __('N/R') }}
            </td>
          </tr>
        @empty
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <td class="px-6 py-4 text-center" colspan="4">
              {{ __('No members to show') }}
            </td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</x-app-layout>
