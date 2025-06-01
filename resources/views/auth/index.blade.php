<x-layouts.layout>
  <x-forms.centertheform imageURL="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
      <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-10 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
        <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Sign in to your account</h2>
      </div>
      <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="/signin" method="POST">
          @csrf
          <x-forms.input label="Email address" name="email" type="email" required autofocus autocomplete="email"/>
          <x-forms.input label="Password" name="password" type="password" subLabel="true" href="/forgot-password" subText="Forgot Password?" required autocomplete="current-password" />
          <div>
            <x-forms.button type="submit">Sign In</x-forms.button>
          </div>
        </form>
        <x-forms.formtext labeltext="Don't have an account?" linktext="Sign Up" linkurl="/register" />
        <x-alerts.alertmessages type="success" :message="session('status')" />
        <x-alerts.alertmessages type="error" :message="$errors->first()" />
        
      </div>
    </div>
  </x-forms.centertheform>
</x-layout>
 

