@component('mail::message')
Hello Justin Favaloro,

You have received a web enquiry from your webiste with the following details.

**Name:**<br>
{{$data['name']}}<br><br>
**Email:**<br>
{{$data['email']}}<br><br>
**Phone:**<br>
{{$data['phone']}}<br><br>
**Message:**<br>
{{$data['message']}}<br><br>
@endcomponent
