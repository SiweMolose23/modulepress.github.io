@extends('master')

@section('content')
<div class="container">
<table class="table table-striped">
    <tr>
        <th>Title</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    @foreach ($modules as $module)
    <tr>
        <th>{{ $module->name }}</th>
        <th><a href="/modules/$module->moduleid" class="btn btn-def" ></th>
        <th></th>
        <th></th>
    </tr>
    @endforeach
</table>


</div>