<section class="w-full max-w-3xl">
  <form method="post" action="{{ route('members.store') }}" enctype="multipart/form-data">
    @csrf

    <h5 class="text-xl font-semibold text-gray-900 dark:text-white"> {{ __('Add Member') }} </h5>

    {{-- Family --}}
    <div class="flex flex-col sm:flex-row sm:items-end gap-y-6 sm:gap-y-0 mt-6">
      <div class="w-full sm:w-[48%]">
        <x-input-label for="existing_family_id" :value="__('Existing Family')" />
        <x-select-input id="existing_family_id" name="existing_family_id" type="text" :options="$families"
          chooseOptionText="Select an Existing Family" :selectedOption="old('existing_family_id')" autocomplete="existing_family_id" />
        <x-input-error :messages="$errors->get('existing_family_id')" />
      </div>
      <p class="w-full sm:w-[5%] text-center text-sm text-gray-500 dark:text-gray-400">Or,</p>
      <div class="w-full sm:w-[48%]">
        <x-input-label for="new_family_name" :value="__('New Family')" />
        <x-text-input id="new_family_name" name="new_family_name" type="text" maxlength="255" :value="old('new_family_name')" />
        <x-input-error :messages="$errors->get('new_family_name')" />
      </div>
    </div>

    {{-- First Name, Last Name --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-6">
      <div>
        <x-input-label for="first_name" :value="__('First Name')" />
        <x-text-input id="first_name" name="first_name" type="text" :value="old('first_name')" autocomplete="first_name"
          maxlength="255" />
        <x-input-error :messages="$errors->get('first_name')" />
      </div>
      <div>
        <x-input-label for="last_name" :value="__('Last Name')" />
        <x-text-input id="last_name" name="last_name" type="text" :value="old('last_name')" autocomplete="last_name"
          maxlength="255" />
        <x-input-error :messages="$errors->get('last_name')" />
      </div>
    </div>

    {{-- Address, Phone --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-6">
      <div>
        <x-input-label for="address" :value="__('Address')" />
        <x-text-input id="address" name="address" type="text" :value="old('address')" autocomplete="address"
          maxlength="255" />
        <x-input-error :messages="$errors->get('address')" />
      </div>
      <div>
        <x-input-label for="phone" :value="__('Phone')" />
        <x-text-input id="phone" name="phone" type="text" :value="old('phone')" autocomplete="phone"
          maxlength="255" />
        <x-input-error :messages="$errors->get('phone')" />
      </div>
    </div>

    {{-- Email, Last Visited Date --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-6">
      <div>
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" name="email" type="email" :value="old('email')" autocomplete="email"
          maxlength="255" />
        <x-input-error :messages="$errors->get('email')" />
      </div>
      <div>
        <x-input-label for="last_visited_date" :value="__('Last Visited Date')" />
        <x-text-input id="last_visited_date" name="last_visited_date" type="date" :value="old('last_visited_date')"
          autocomplete="last_visited_date" max="{{ now()->format('Y-m-d') }}" maxlength="255" />
        <x-input-error :messages="$errors->get('last_visited_date')" />
      </div>
    </div>

    {{-- Notes, Prayer Requests --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-6">
      <div>
        <x-input-label for="notes" :value="__('Notes')" />
        <x-textarea-input rows="5" id="notes" name="notes" autocomplete="notes"
          maxlength="255">{{ old('notes') }}</x-textarea-input>
        <x-input-error :messages="$errors->get('notes')" />
      </div>
      <div>
        <x-input-label for="prayer_requests" :value="__('Prayer Requests')" />
        <x-textarea-input rows="5" id="prayer_requests" name="prayer_requests" autocomplete="prayer_requests"
          maxlength="255">{{ old('prayer_requests') }}</x-textarea-input>
        <x-input-error :messages="$errors->get('prayer_requests')" />
      </div>
    </div>

    {{-- Clothing Sizes, Prayer Requests --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-6">
      <div>
        <x-input-label for="clothing_size" :value="__('Clothing Size')" />
        <x-select-input id="clothing_size" name="clothing_size" type="text" :options="$clothingSizes"
          chooseOptionText="Select a Clothing Size" :selectedOption="old('clothing_size')" autocomplete="clothing_size" />
        <x-input-error :messages="$errors->get('clothing_size')" />
      </div>
      <div x-data="imageViewer(@js(asset('images/no-user.png')))">
        <x-input-label for="picture" :value="__('Picture')" />
        <x-file-input id="picture" name="picture" type="file" accept=".jpg, .jpeg, .png" @change="fileChosen" />
        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300">
          {{ __('The picture must be in JPG/PNG format (max 1 MB).') }}</div>
        <x-input-error :messages="$errors->get('picture')" />
        <img :src="imageUrl" class="rounded mt-2 w-16 object-cover" alt="member-picture">
      </div>
    </div>

    <x-regular-button class="mt-6">{{ __('Save') }}</x-regular-button>
  </form>
</section>
