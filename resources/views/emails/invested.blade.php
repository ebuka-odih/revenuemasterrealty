<x-mail::message>

# Hello {{ $data['user']->name }},

We're excited to extend our warmest congratulations on your recent investment in {{ $data['invest']->transId() }} through
    {{ env('APP_NAME') }}! <br>
Your decision to take this step is a testament to your commitment to building a prosperous future through smart real estate investments.
    <br><br>
<p>
    We understand the importance of your investment and the trust you've placed in us. We want to assure you that we're dedicated to delivering the best possible results and making this journey as rewarding as it can be.
</p>
<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
