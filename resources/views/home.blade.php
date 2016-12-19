@extends('layouts.app')
@section('content')
<div class="container">
    <div>
        <h1>Все товары и услуги представленые на сайте</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Название</th>
                    <th>Ед.измер.</th>
                    <th>Цена</th>
                    <th>О товаре</th>
                    <th>Изображение</th>
                    <th>Тип</th>
                </tr>
            </thead>  
            <tbody>
                @foreach($tasks as $task)
                <tr>
                    <th>{{$task->id}}</th>
                    <th>{{$task->title}}</th>
                    <th>{{$task->izmer}}</th>
                    <th>{{$task->price}}</th>
                    <th>{{$task->otovare}}</th>
                    <th>{{$task->image}}</th>
                    <th>{{$task->type}}</th>
                </tr>
                @endforeach
            </tbody>      
        </table>
    </div>    
</div>
@stop