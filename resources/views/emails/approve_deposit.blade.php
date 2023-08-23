<x-mail::message>
# Hello {{ $data['user']->name }}

Your deposit sum of {{ $data['deposit']->amount }} has been approved
<br>
Login your dashboard for more details.

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
