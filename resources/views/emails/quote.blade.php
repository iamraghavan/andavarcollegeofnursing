@component('mail::message')
# Enquiry from Andarav College website

Dear Team,

You have received a new enquiry from {{ $data['name'] }}.

**Contact Information:**

* Email: {{ $data['email'] }}
* Phone: {{ $data['phone'] }}
* Address: {{ $data['address'] }} {{ $data['address_line_2'] }}
* City: {{ $data['city'] }}
* State: {{ $data['state'] }}
* Zip Code: {{ $data['zip_code'] }}

**Inquiry Message:**

{{ $data['inquiry'] }}

Thank you for your time.

Best regards,
{{ $data['name'] }}
@endcomponent
