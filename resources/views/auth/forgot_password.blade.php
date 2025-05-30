<x-layout>
    <x-forms.centertheform imageURL="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600">
        <form method="POST" action="/forgot-password" class="space-y-8">
            @csrf
            <div>
                <h2 class="mt-10 text-2xl/9 font-bold tracking-tight text-gray-900 text-center">Forgot Password</h2>
                <p class="mt-2 text-sm text-gray-600">Enter your email address and we'll send you a link to reset your password.</p>
                </br>
                <x-forms.input label="Email" name="email" type="email" subLabel="true" href="/register" subText="Create a Account?" required autocomplete="email" />
                <x-forms.button type="submit">Send Reset Link</x-forms.button>
            </div>   
        </form>
        <x-forms.formtext labeltext="Remember your password?" linktext="Sign In" linkurl="/signin" /> 
        <x-alerts.alertmessages type="success" :message="session('status')" />
        <x-alerts.alertmessages type="error" :message="$errors->first('email')" /> 
        <x-alerts.alertmessages type="info" :message="$errors->first('email')" />
        <x-alerts.alertmessages type="warning" :message="$errors->first('email')" />     
    </x-forms.centertheform> 
</x-layout>