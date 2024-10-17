<x-mail::message>
**Name:** {{ $contactForm['name'] }}

**Email:** {{ $contactForm['email'] }}

**Subject:** {{ $contactForm['subject'] }}

**Message:** {{ $contactForm['message'] }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
