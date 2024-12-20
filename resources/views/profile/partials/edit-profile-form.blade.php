<section class="w-full max-w-3xl">
  <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <h5 class="text-xl font-semibold text-gray-900 dark:text-white"> {{ __('Edit Profile') }} </h5>

    {{-- Name, Email --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-6">
      <div>
        <x-input-label for="name" :value="__('Name')" required="true" />
        <x-text-input id="name" name="name" type="text" :value="old('name', $user->name)" required autocomplete="name"
          maxlength="255" />
        <x-input-error :messages="$errors->get('name')" />
      </div>
      <div>
        <x-input-label for="email" :value="__('Email')" required="true" />
        <x-text-input id="email" name="email" type="email" :value="old('email', $user->email)" required autocomplete="email"
          maxlength="255" />
        <x-input-error :messages="$errors->get('email')" />
      </div>
    </div>

    {{-- New Password, Confirm Password  --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-6">
      <div>
        <x-input-label for="password" :value="__('New Password')" />
        <x-text-input id="password" name="password" type="password" autocomplete="password" />
        <x-input-error :messages="$errors->get('password')" />
      </div>
      <div>
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
        <x-text-input id="password_confirmation" name="password_confirmation" type="password"
          autocomplete="password_confirmation" />
        <x-input-error :messages="$errors->get('password_confirmation')" />
      </div>
    </div>

    <x-regular-button class="mt-6">{{ __('Save') }}</x-regular-button>
  </form>
</section>
