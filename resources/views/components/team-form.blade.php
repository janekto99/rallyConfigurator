@extends('main-page')
@section('content')

    <form class="flex flex-col w-96 bg-emerald-100 p-10 rounded-xl" action="/teams" method="POST">
        @csrf

        <input class="my-1 placeholder:pl-1" type="text" name="name" placeholder="Team name">

        <div class="w-full flex items-center justify-between">
            <label for="">Racer:</label>
            <select class="my-1 w-2/4" name="members[racer][]" id="" size="3" multiple>
                @foreach($members as $member)
                    @if($member->type === 'racer')
                        <option value="{{$member->id}}">{{$member->name . ' ' . $member->surname}}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="w-full flex items-center justify-between">
            <label for="">Co-racer:</label>
            <select class="my-1 w-2/4" name="members[co-racer][]" id="" size="3" multiple>
                @foreach($members as $member)
                    @if($member->type === 'co-racer')
                        <option value="{{$member->id}}">{{$member->name . ' ' . $member->surname}}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="w-full flex items-center justify-between">
            <label for="">Technician:</label>
            <select class="my-1 w-2/4" name="members[technician][]" id="" size="3" multiple>
                @foreach($members as $member)
                    @if($member->type === 'technician')
                        <option value="{{$member->id}}">{{$member->name . ' ' . $member->surname}}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="w-full flex items-center justify-between">
            <label for="">Manager:</label>
            <select class="my-1 w-2/4" name="members[manager][]" id="" size="3" multiple>
                @foreach($members as $member)
                    @if($member->type === 'manager')
                        <option value="{{$member->id}}">{{$member->name . ' ' . $member->surname}}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="w-full flex items-center justify-between">
            <label for="">Photographer:</label>
            <select class="my-1 w-2/4" name="members[photographer][]" id="" size="3" multiple>
                @foreach($members as $member)
                    @if($member->type === 'photographer')
                        <option value="{{$member->id}}">{{$member->name . ' ' . $member->surname}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <button class="m-auto mt-6 bg-emerald-400 rounded-lg w-16 hover:bg-emerald-300" type="submit">Create</button>
    </form>
@endsection
