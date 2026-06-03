@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-8 text-center sm:p-12">
            <h1 class="text-3xl font-bold text-gray-900 mb-4">
                Praktikum Web II Modul 6
            </h1>

            <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                Berikut merupakan hasil praktikum Modul 6
            </p>

            <div class="inline-block bg-blue-50 border border-blue-100 rounded-lg p-6 text-left mb-6">
                <h2 class="text-sm font-semibold text-blue-600 uppercase tracking-wider mb-2">Informasi Mahasigma</h2>
                <p class="text-xl font-bold text-gray-800">
                    {{ $student['nama'] }}
                </p>
                <p class="text-md text-gray-500 font-mono mt-1">
                    NIM: {{ $student['nim'] }}
                </p>
            </div>

            <div class="flex justify-center">
                <a href="{{ url('/profile') }}" class="group">
                    <span class="text-blue-600 text-sm font-medium inline-flex items-center group-hover:underline">
                        Lihat Detail
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </span>
                </a>
            </div>
            
        </div>
    </div>
@endsection