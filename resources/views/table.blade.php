<!-- TODO Blade Задание 2: Изменить реализацию этой view, расширить ее с использованием layout  -->
<!-- layouts/app.blade.php  -->
@extends('layouts.app')

<!-- TODO Blade Задание 6: В эту view с контроллера передается collection c users в переменной data -->
<!-- Выполнить foreach loop в одну строку -->
<!-- Используйте view shared/user.blade.php для item (переменная user во item view) -->
<!-- Используйте view shared/empty.blade.php для состояния когда нет элементов в колекции -->


<!-- TODO Blade Задание 7: Здесь сделайте классический foreach loop -->
<!-- Выведите div с $user->name -->
<!-- Воспользуйтесь переменной $loop и у нечетных div выведите класс - bg-red-500 -->
{{-- @dd($data) --}}
@if($data->count()>0)
@foreach ($data as $key=>$item)

    <div class="@if((($key+1)%2)==0) bg-red-500 @endif">
        {{$item->name}}
    </div>

@endforeach
@else
<div>Ничего не найдено
</div>
@endif
