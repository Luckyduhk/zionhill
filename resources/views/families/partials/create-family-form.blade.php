<section class="w-full max-w-3xl">
  <form method="post" action="{{ route('families.store') }}" enctype="multipart/form-data">
    @csrf

    <h5 class="text-xl font-semibold text-gray-900 dark:text-white"> {{ __('Add Family') }} </h5>

    {{-- Name --}}
    <div class="mt-6">
      <x-input-label for="name" :value="__('Name')" required="true" />
      <x-text-input id="name" name="name" type="text" maxlnegth="255" :value="old('name')" required autofocus
        autocomplete="name" />
      <x-input-error :messages="$errors->get('name')" />
    </div>

    <x-regular-button class="mt-6">{{ __('Save') }}</x-regular-button>
  </form>
</section>
