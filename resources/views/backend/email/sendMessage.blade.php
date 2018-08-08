@component('mail::message')
#Шинэ мессеж ирлээ!

@component('mail::table')
|                 |                     |
| --------------- |:-------------------:|
|       Нэр       | {{ $contactName }}  |
|      И-мэйл     | {{ $contactEmail }} |
|       Утас      | {{ $contactPhone }} |
|     Агуулга     |{{ $contactSubject }}|
|      Мессеж     |{{ $contactMessage }}|
@endcomponent

@component('mail::button', ['url' => "http://interview.mn/messages" ])
Бүх мессежүүдийг харах
@endcomponent

@endcomponent