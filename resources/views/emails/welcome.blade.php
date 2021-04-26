@component('mail::message')
# Hi {{ $data['username'] }}, Good day!

{{-- The body of your message. --}}
<p>
  {{ $data['message'] }}
</p>

<br><br><br><br>
Sincerely yours,<br>
Shaikram Abdulguro Jr
{{-- {{ config('app.name') }} --}}
@component('mail::button', ['url' => 'http://shaikram.epizy.com/'])
Click here to go to my Website
@endcomponent
@endcomponent
<br><br>
