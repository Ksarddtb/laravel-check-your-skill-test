<!-- TODO Blade Задание 4: Сделать проверку авторизован пользователь или нет -->
@if(Auth::check())
    {{Auth::id()}}
@endif
<!-- Если да то вывести ID пользователя -->
<!-- ID пользователя вывести внутри конструкции с проверкой -->
