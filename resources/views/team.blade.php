@extends('layouts.app')

@section('title', 'The Marble Room 2')

@section('content')
    <div class="relative flex items-center justify-center text-center bg-[rgba(21,21,21,255)]">
        <h2 class="absolute text-4xl md:text-8xl font text-white z-10">The Team</h2>
        <img class="h-auto w-full object-contain" src="{{ asset('images/TEAM/kelompok2.jpg') }}" alt="Logo">
        <div class="absolute inset-0 bg-black bg-opacity-60 z-15"></div>
    </div>

    <div class="h-auto flex items-center justify-center bg-[rgba(21,21,21,255)]">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-4 p-4 sm:p-6">
            @php
                $team = [
                    ['name' => 'Adinda Rizky Priliyani', 'id' => '10122049', 'image' => 'Dinda.jpg'],
                    ['name' => 'Aisyah Mukti Pratiwi', 'id' => '10122100', 'image' => 'Aisyah.jpg'],
                    ['name' => 'Alka Tadra Koswara', 'id' => '10122136', 'image' => 'Alka.jpg'],
                    ['name' => 'Andre Firdaus', 'id' => '10122173', 'image' => 'Andre.jpg'],
                    ['name' => 'Devina Nanda Putri', 'id' => '10122360', 'image' => 'Devina.jpg'],
                    ['name' => 'Ilham Suryanulloh', 'id' => '10122623', 'image' => 'Ilham.jpg'],
                    ['name' => 'Rahma Putri Prabowo', 'id' => '11122170', 'image' => 'Pupuy.jpg'],
                    ['name' => 'Rasti Agustina .M', 'id' => '11122213', 'image' => 'Cia.jpg'],
                ];
            @endphp

            @foreach ($team as $member)
                <div
                    class="flex justify-end items-center text-white py-5 hover:shadow-[0_4px_8px_0_rgba(220,38,38,0.8),0_-4px_8px_0_rgba(220,38,38,0.8)]">
                    <div class="px-10 text-right">
                        <h3 class="text-xl sm:text-2xl font-semibold">{{ $member['name'] }}</h3>
                        <p class="text-yellow-400">{{ $member['id'] }}</p>
                    </div>
                    <img src="{{ asset('images/TEAM/' . $member['image']) }}" alt="{{ $member['name'] }}"
                        class="w-28 sm:w-36 h-44 sm:h-52 object-cover mr-4">
                </div>
            @endforeach
        </div>
    </div>
@endsection
