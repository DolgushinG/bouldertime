@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => $url])
Button Text
@endcomponent

Thanks,<br>

@endcomponent
