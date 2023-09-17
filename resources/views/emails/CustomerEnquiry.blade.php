<x-mail::message>
# Hello! Umaiza Construction Pvt Ltd., Here is new enquiry
<b>Name: </b> {{ $data['name'] }} <br/>
<b>Email: </b> {{ $data['email'] }} <br/>
<b>Mobile: </b> {{ $data['mobile'] }} <br/>
<b>Subject: </b> @if($data['subject']) {{ $data['subject'] }} @endif<br/>
<b>Message: </b> @if($data['message']) {{ $data['message'] }} @endif<br/>

Thanks,<br>
<span>For contact with us.</span>
</x-mail::message>
