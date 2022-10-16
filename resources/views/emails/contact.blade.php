@component('mail::message')
# Contact from your website
## Details of visitor seeking to be contacted.

<div><strong>Name:</strong> {{  $compose['name']  }}</div>
<div><strong>Email:</strong> {{  $compose['email']  }}</div>
<div><strong>Subject:</strong> {{  $compose['subject']  }}</div>
<div><strong>Message:</strong> {{  $compose['message']  }}</div>
<br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
