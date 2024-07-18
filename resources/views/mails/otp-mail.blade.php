@component('mail::message')
    # One Time Password
    Dear {{ $data['name'] }},
    Your One Time Password is : {{ rand(100000, 999999) }}

    Thanks,<br>
    Suraksha Bank
@endcomponent
