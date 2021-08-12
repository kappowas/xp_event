@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('User panel') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h1>Welcome, <b>{{ $user_name }}</b>!!!</h1><br>
                        Your account stats:<br>
                        <div class="card">
                            Overall rank: {{ $a[0] }}<br>
                        </div>
                        <div class="card">
                            Total level: {{ $a[1] }}<br>
                        </div>
                        <div class="card">
                            Total XP: {{ $a[2] }}<br>
                        </div>
                        <div class="card">
                            Attack: {{ $a[4] }} EXP {{ $a[5] }}<br>
                        </div>
                        <div class="card">
                            Defence: {{ $a[7] }} EXP {{ $a[8] }}<br>
                        </div>
                        <div class="card">
                            Strenght: {{ $a[10] }} EXP {{ $a[11] }}<br>
                        </div>
                        <div class="card">
                            Hitpoins: {{ $a[13] }} EXP {{ $a[14] }}<br>
                        </div>
                        <div class="card">
                            Ranged: {{ $a[16] }} EXP {{ $a[17] }}<br>
                        </div>
                        <div class="card">
                            Prayer: {{ $a[19] }} EXP {{ $a[20] }}<br>
                        </div>
                        <div class="card">
                            Magic: {{ $a[22] }} EXP {{ $a[23] }}<br>
                        </div>
                        <div class="card">
                            Cooking: {{ $a[25] }} EXP {{ $a[26] }}<br>
                        </div>
                        <div class="card">
                            Woodcuting: {{ $a[28] }} EXP {{ $a[29] }}<br>
                        </div>
                        <div class="card">
                            Fletching: {{ $a[31] }} EXP {{ $a[32] }}<br>
                        </div>
                        <div class="card">
                            Fishing: {{ $a[34] }} EXP {{ $a[35] }}<br>
                        </div>
                        <div class="card">
                            Firemaking: {{ $a[37] }} EXP {{ $a[38] }}<br>
                        </div>
                        <div class="card">
                            Crafting: {{ $a[40] }} EXP {{ $a[41] }}<br>
                        </div>
                        <div class="card">
                            Smithing: {{ $a[43] }} EXP {{ $a[44] }}<br>
                        </div>
                        <div class="card">
                            Mining: {{ $a[46] }} EXP {{ $a[47] }}<br>
                        </div>
                        <div class="card">
                            Herblore: {{ $a[49] }} EXP {{ $a[50] }}<br>
                        </div>
                        <div class="card">
                            Agility: {{ $a[52] }} EXP {{ $a[53] }}<br>
                        </div>
                        <div class="card">
                            Thieving: {{ $a[55] }} EXP {{ $a[56] }}<br>
                        </div>
                        <div class="card">
                            Slayer: {{ $a[58] }} EXP {{ $a[59] }}<br>
                        </div>
                        <div class="card">
                            Farming: {{ $a[61] }} EXP {{ $a[62] }}<br>
                        </div>
                        <div class="card">
                            Runecrafting: {{ $a[64] }} EXP {{ $a[65] }}<br>
                        </div>
                        <div class="card">
                            Hunter: {{ $a[67] }} EXP {{ $a[68] }}<br>
                        </div>
                        <div class="card">
                            Construction: {{ $a[70] }} EXP {{ $a[71] }}<br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
