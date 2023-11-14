@extends('main-page')
@section('content')
    <h2 class="w-full text-4xl text-start ml-8 mb-8">Teams</h2>
    <table class="w-full text-center border">
        <tr class="border">
            <th>Name</th>
            <th>Racers</th>
            <th>Co-racers</th>
            <th>Technicians</th>
            <th>Managers</th>
            <th>Photographer</th>
        </tr>
        @foreach($teams as $team)
            <tr class="border">
                <td>{{ $team->name }}</td>
                <td>
                    @foreach($team->members as $member)
                        @if($member->type === 'racer')
                            {{ $member->name }} {{ $member->surname }}<br>
                        @endif
                    @endforeach
                </td>
                <td>
                    @foreach($team->members as $member)
                        @if($member->type === 'co-racer')
                            {{ $member->name }} {{ $member->surname }}<br>
                        @endif
                    @endforeach
                </td>
                <td>
                    @foreach($team->members as $member)
                        @if($member->type === 'technician')
                            {{ $member->name }} {{ $member->surname }}<br>
                        @endif
                    @endforeach
                </td>
                <td>
                    @foreach($team->members as $member)
                        @if($member->type === 'manager')
                            {{ $member->name }} {{ $member->surname }}<br>
                        @endif
                    @endforeach
                </td>
                <td>
                    @foreach($team->members as $member)
                        @if($member->type === 'photographer')
                            {{ $member->name }} {{ $member->surname }}<br>
                        @endif
                    @endforeach
                </td>
            </tr>
        @endforeach
    </table>
@endsection
