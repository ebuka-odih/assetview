@component('mail::message')
# Dear Admin

A deposit of $ @convert($data['withdraw']->amount) has been made

<p>User: {{ $data['user']->name }}</p><br>
<p>Amount: $ @convert($data['withdraw']->amount)</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
