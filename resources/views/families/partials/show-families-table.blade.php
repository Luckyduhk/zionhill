<div class="relative overflow-x-auto">
  <table class="w-full mb-4 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
      <tr>
        <x-table-th sortBy='id'>{{ __('ID') }}</x-table-th>
        <x-table-th sortBy='name'>{{ __('Name') }}</x-table-th>
        <x-table-th sortBy='updated_at'>{{ __('Last Updated') }}</x-table-th>
        <x-table-th>{{ __('Action') }}</x-table-th>
      </tr>
    </thead>
    <tbody>
      @forelse ($families as $family)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
          <td class="px-6 py-4">
            {{ $family->id }}
          </td>
          <td class="px-6 py-4">
            <a href="{{ route('members.index', ['family_id' => $family->id]) }}"
              class="text-blue-600 dark:text-blue-500 hover:underline cursor-pointer">{{ $family->name }}</a>
          </td>
          <td class="px-6 py-4">
            {{ $family->updated_at->toDateTimeString() }}
          </td>
          <td class="px-6 py-4">
            <div class="flex flex-wrap items-center gap-1">
              <a href="{{ route('families.edit', $family->id) }}">
                <x-regular-button type="button" class="whitespace-nowrap" color="blue" size="extra-small">
                  {{ __('Edit') }}
                </x-regular-button>
              </a>
              <form action="{{ route('families.destroy', $family->id) }}" method="post">
                @csrf
                @method('DELETE')
                <x-regular-button class="whitespace-nowrap" color="red" size="extra-small">
                  {{ __('Delete') }}
                </x-regular-button>
              </form>
            </div>
          </td>
        </tr>
      @empty
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
          <td class="px-6 py-4 text-center" colspan="4">
            {{ __('No families to show') }}
          </td>
        </tr>
      @endforelse
    </tbody>
  </table>

  {{ $families->links() }}
</div>
