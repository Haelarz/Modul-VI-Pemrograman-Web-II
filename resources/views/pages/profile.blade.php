@extends('layouts.app')

@section('title', 'Profil Praktikan')

@section('content')
<div class="space-y-8">
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 md:p-8">
        <div class="flex flex-col md:flex-row items-center md:items-start gap-8">
            
            <div class="flex-shrink-0">
                <img src="{{ asset('assets/images/profile.webp') }}" alt="Foto Profil" class="w-40 h-40 object-cover rounded-2xl shadow-md border-4 border-white">
            </div>
            
            <div class="flex-grow w-full">
                <h1 class="text-3xl font-bold text-gray-900 mb-2">{{ $student['nama'] }}</h1>
                <span class="inline-block bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full mb-4">
                    {{ $student['prodi'] }}
                </span>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-2">
                    <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
                        <p class="text-sm text-gray-500 font-medium">NIM</p>
                        <p class="text-lg font-semibold text-gray-800">{{ $student['nim'] }}</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
                        <p class="text-sm text-gray-500 font-medium">Asal Prodi</p>
                        <p class="text-lg font-semibold text-gray-800">{{ $student['prodi'] }}</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
                        <p class="text-sm text-gray-500 font-medium">Hobi</p>
                        <p class="text-lg font-semibold text-gray-800">{{ $student['hobi'] }}</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
                        <p class="text-sm text-gray-500 font-medium">Skill</p>
                        <p class="text-lg font-semibold text-gray-800">{{ $student['skill'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <h2 class="text-2xl font-bold text-gray-900 mb-6 border-b pb-2">Pengalaman Kegiatan Berkesan</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($experiences as $exp)
            <a href="{{ url('/experience/' . $exp['id']) }}" class="group bg-white rounded-xl border border-gray-100 shadow-sm hover:shadow-md hover:border-blue-300 transition-all duration-200 overflow-hidden flex flex-col">
                <div class="h-40 overflow-hidden bg-gray-200">
                    <img src="{{ asset('assets/images/' . $exp['image']) }}" alt="{{ $exp['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-5 flex-grow flex flex-col">
                    <p class="text-xs font-semibold text-blue-600 mb-1 uppercase tracking-wide">{{ $exp['date'] }}</p>
                    <h3 class="text-md font-bold text-gray-900 mb-2 line-clamp-2 group-hover:text-blue-700">{{ $exp['title'] }}</h3>
                    <p class="text-sm text-gray-600 line-clamp-3 mb-4 flex-grow">{{ $exp['description'] }}</p>
                    
                    <span class="text-blue-600 text-sm font-medium mt-auto inline-flex items-center group-hover:underline">
                        Lihat Detail
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </span>
                </div>
            </a>
            @endforeach
        </div>
    </div>

</div>
@endsection