@component('mail::message')

<div> 
    <h1>Dear {{ $data['name'] }},</h1>
    Thank your response
    <br>
    <br>
    Thanks,<br>
    {{ config('app.name') }}
</div>
@endcomponent