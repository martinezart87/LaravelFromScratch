@component('mail::message')
# A heading test

lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum

- list
- list2

@component('mail::button', ['url' => 'http://127.0.0.1:8000/'])
    Redirect to page
@endcomponent
@endcomponent