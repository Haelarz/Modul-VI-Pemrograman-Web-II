@extends('layouts.app')

@section('title', $experience['title'])

@section('content')
<div class="max-w-4xl mx-auto">
    <a href="{{ url('/profile') }}" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium mb-6 transition-colors">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
        Kembali ke Profil
    </a>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        
        <div class="w-full h-64 sm:h-96 bg-gray-200 relative">
            <img src="{{ asset('assets/images/' . $experience['image']) }}" alt="{{ $experience['title'] }}" class="w-full h-full object-cover">
            
            <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-lg shadow-sm">
                <span class="text-sm font-bold text-gray-800">
                    Waktu: {{ $experience['date'] }}
                </span>
            </div>
        </div>

        <div class="p-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-6">{{ $experience['title'] }}</h1>
            
            <div class="space-y-6">
                <div>
                    <h2 class="text-lg font-semibold text-gray-800 mb-2 border-l-4 border-blue-500 pl-3">Deskripsi Kegiatan</h2>
                    <p class="text-gray-600 leading-relaxed">
                        {{ $experience['description'] }}
                    </p>
                </div>

                <hr class="border-gray-100">

                <div>
                    <h2 class="text-lg font-semibold text-gray-800 mb-2 border-l-4 border-green-500 pl-3">Kesan yang Dirasakan</h2>
                    <div class="bg-green-50 rounded-lg p-5 border border-green-100">
                        <p class="text-gray-700 italic">
                            "{{ $experience['kesan'] }}"
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection