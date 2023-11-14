@extends('main-page')
@section('content')

<form class="flex flex-col bg-emerald-100 w-1/6 p-8 rounded-xl" action="/members" method="POST">
    @csrf
    <input class="my-1 placeholder:pl-1" type="text" name="name" placeholder="Name">
    <input class="my-1 placeholder:pl-1"  type="text" name="surname" placeholder="Surname">
    <select class="my-1"  name="type" id="">
        <option value="racer">Racer</option>
        <option value="co-racer">Co-racer</option>
        <option value="technician">Technician</option>
        <option value="manager">Manager</option>
        <option value="photographer">Photographer</option>
    </select>
    <button class="m-auto mt-6 bg-emerald-400 rounded-lg w-16 hover:bg-emerald-300" type="submit">Create</button>
</form>
@endsection
