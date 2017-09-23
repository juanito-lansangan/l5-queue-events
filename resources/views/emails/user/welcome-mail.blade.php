@component('mail::message')
# Welcome {{ $user->name }}

Thanks for signing up. **We really appreciate it**. Let us _know if we can_ do more to please you!

@component('mail::panel')
    The email address you signed up with is: {{ $user->email }}
@endcomponent

@component('mail::button', ['url' => 'http://l5-queue-jobs.dev'])
View My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
