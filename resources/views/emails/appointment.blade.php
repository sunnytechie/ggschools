@component('mail::message')
# Appointment request from your website
## Details of visitor.

<div><strong>Name:</strong> {{  $compose['name']  }}</div>
<div><strong>Email:</strong> {{  $compose['email']  }}</div>
<div><strong>Child Name:</strong> {{  $compose['child_name']  }}</div>
<div><strong>Child Age:</strong> {{  $compose['child_age']  }}</div>
<div><strong>Message:</strong> {{  $compose['message']  }}</div>
<br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
