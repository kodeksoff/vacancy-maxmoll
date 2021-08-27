@component('mail::message')
    Имя: {{ $respond->name }}  <br />
    Имя: {{ $respond->phone }} <br />
    E-mail: {{ $respond->email ?? 'Не указан' }} <br />
    Дата рождения: {{ $respond->bday }} <br />
    Ссылка не резюме: {{ $respond->link ?? 'Не указана' }} <br />
@endcomponent
