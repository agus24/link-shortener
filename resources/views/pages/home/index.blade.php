@extends('layouts.app')

@section('content')
    <div class="fixed w-full">
        <div class="flex justify-center items-center">
            <div class="w-3/4 bg-navbar text-white p-4 mt-10 mx-4 rounded-lg">
                <div class="flex justify-between">
                    <div class="font-bold uppercase w-1/3">Tiawan.id</div>
                    <div class="w-1/3">
                        <ul class="menu">
                            <li>Home</li>
                            <li>About</li>
                            <li>Resume</li>
                            <li>Portfolio</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-secondary h-screen w-full">
        <div class="grid grid-cols-2">
            <div class="bg-green-200 h-screen">asd</div>
            <div class="text-white">
                <div class="mt-24">
                    <div class="px-4 w-3/4 mt-96">
                        <span class="text-4xl font-bold">Gustiawan Ouwawi</span>
                        <p class="mt-4 w-1/2 text-sm">
                            Hello! I am Web Developer from Indonesia, Jakarta. I have rich experience in Web building. I love to talk with you about our unique.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
