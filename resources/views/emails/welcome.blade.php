@component('mail::message')
# Hello from MCB

Welcome to MCB
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
