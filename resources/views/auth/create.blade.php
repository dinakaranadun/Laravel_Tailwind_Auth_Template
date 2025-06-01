<x-layouts.layout>
  <x-forms.centertheform imageURL="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600">
    <form method="POST" action="/register" class="space-y-8">
     @csrf
      <div>
        <div class="border-b border-gray-900/10 pb-12">
          <h2 class="mt-10  text-2xl/9 font-bold tracking-tight text-gray-900">Register</h2>
          <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-3">
              <x-forms.input label="First name" name="first_name" type="text" autocomplete="given-name" />
            </div>
            <div class="sm:col-span-3">
            <x-forms.input label="Last Name" name="last_name" type="text" autocomplete="family-name" />
            </div>
            <div class="sm:col-span-full">
              <x-forms.input label="Email address" name="email" type="email" autocomplete="email" required />
            </div>
            <div class="col-span-full">
              <x-forms.input label="Password" name="password" type="password" autocomplete="new-password" required />
            </div>
            <div class="col-span-full">
              <x-forms.input label="Confirm Password" name="password_confirmation" type="password" autocomplete="new-password" required />
            </div>
          </div>
        </div>
        <x-forms.button type="submit">Register</x-forms.button>
    </form>
    <x-forms.formtext labeltext="Already have an account?" linktext="Sign In" linkurl="/" />
</x-forms.centertheform>
</x-layout>