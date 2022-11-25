@component('mail::message')
# Dear {{ $deposit->user->name }}

Your deposit has been approved <br>
Login your dashboard for more info

Thanks,<br>
{{ config('app.name') }}
@endcomponent
