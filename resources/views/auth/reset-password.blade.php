<x-layouts.layout>
  <x-forms.centertheform>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
      <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-10 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
        <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Reset Password</h2>
      </div>
      <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="/reset-password" method="POST">
          @csrf
          @method('POST')
          <input type="hidden" name="email" value="{{ request()->query('email') }}">
          <input type="hidden" name="token" value="{{ $token }}">
          <x-forms.input label="New Password" name="password" type="password"  required autocomplete="current-password" />
          <x-forms.input label="Confirm Password" name="password_confirmation" type="password"  required autocomplete="current-password" />
          <div>
            <x-forms.button type="submit">Reset</x-forms.button>
          </div>
        </form>
        <x-alerts.alertmessages type="error" :message="$errors->first()"/>
      </div>
    </div>
  </x-forms.centertheform>
</x-layout>