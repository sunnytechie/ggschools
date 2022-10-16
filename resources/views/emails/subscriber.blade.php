@component('mail::message')
# New Subscriber
## This email address just registered on your website for update notifications
{{  $compose['email']  }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
