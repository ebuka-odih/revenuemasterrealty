<x-mail::message>
# Hello {{ $data['user']->name }}

Your account has been funded with <strong>@money($data['funding']->amount)</strong>
<br>
Login to your dashboard for more details.

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
