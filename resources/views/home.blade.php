<?php
$inNav = 'passengers';
?>
@extends('layouts.app')

@section('title', 'B. Trans-Reserve')

@section('content')
    <div class="">
        <div class="h-[50vh] bg-gray-600 w-full">
            <div class="flex flex-col justify-center h-full space-y-4 px-20">
                <p class="p-2 text-sm bg-primary rounded-xl text-gray-100 w-fit">Lorem ipsum dolor sit amet.</p>
                <h1 class="text-3xl font-bold text-white">Voyages réguliers au Cameroun</h1>

            </div>
        </div>
        <div class="px-20 xl:px-40">
            {{-- 2nd section --}}
            <div class="-mt-24 flex flex-col">
                <div class="flex max-w-sm">
                    <button
                        class="flex items-center space-x-2 p-4 @if ($inNav === 'passengers') bg-primary text-white @else bg-white text-black @endif ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32">
                            <path fill="#4f46e5"
                                d="M10.5 9A3.5 3.5 0 1 1 14 5.5A3.504 3.504 0 0 1 10.5 9m0-5A1.5 1.5 0 1 0 12 5.5A1.5 1.5 0 0 0 10.5 4m11.974 27.313L19.34 24h-7.101a4.01 4.01 0 0 1-3.867-2.97l-1.634-6.127a3.899 3.899 0 0 1 7.535-2.009L15.1 16H21v2h-7.436l-1.223-4.59a1.9 1.9 0 0 0-3.67.978l1.633 6.126A2.005 2.005 0 0 0 12.239 22h8.42l3.654 8.525zM30 6h-4V2h-2v4h-4v2h4v4h2V8h4z" />
                            <path fill="#4f46e5"
                                d="M18 28H7.768a2 2 0 0 1-1.933-1.485L2.033 12.258l1.933-.516L7.768 26H18Z" />
                        </svg>
                        <p class="text-lg font-semibold">Passengers</p>
                    </button>
                    <button
                        class="flex items-center space-x-2 p-4 @if ($inNav !== 'passengers') bg-primary text-white @else bg-white text-black @endif ">
                        <span>Icon</span>
                        <p class="text-lg font-semibold">Passels</p>
                    </button>
                </div>
                {{-- conditional secton 1 --}}
                @if ($inNav === 'passengers')
                    <div class="bg-gray-50 p-4 shadow-md space-y-3 rounded-b-md">
                        <div class="flex space-x-2 items-center">
                            <span class="rounded-3xl bg-primary p-2 text-white text-sm shadow">first text</span>
                            <span class="rounded-3xl p-2 text-sm shadow">second text</span>
                        </div>
                        <div class="flex justify-start items-center gap-2 flex-wrap">
                            <div class="flex shadow space-x-2 items-center p-2 flex-1 min-w- rounded-md">
                                <span>icon</span>
                                <div class="flex flex-col">
                                    <h4 class="font-bold">Hello from You</h4>
                                    <p class="text-muted">Lorem, ipsum.</p>
                                </div>
                            </div>
                            <div class="flex shadow space-x-2 items-center p-2 flex-1 min-w- rounded-md">
                                <span>icon</span>
                                <div class="flex flex-col">
                                    <h4 class="font-bold">Hello from You</h4>
                                    <p class="text-muted">Lorem, ipsum.</p>
                                </div>
                            </div>
                            <div class="flex shadow space-x-2 items-center p-2 flex-1 min-w- rounded-md">
                                <span>icon</span>
                                <div class="flex flex-col">
                                    <h4 class="font-bold">Hello from You</h4>
                                    <p class="text-muted">Lorem, ipsum.</p>
                                </div>
                            </div>
                            <div class="flex shadow space-x-2 items-center p-2 flex-1 min-w- rounded-md">
                                <span>icon</span>
                                <div class="flex flex-col">
                                    <h4 class="font-bold">Hello from You</h4>
                                    <p class="text-muted">Lorem, ipsum.</p>
                                </div>
                            </div>
                            <button class="bg-secondary p-4">
                                <span>icon</span>
                                <span>BOOK NOW</span>
                            </button>
                        </div>
                    </div>
                @else
                    {{-- section 2 --}}
                    <div>

                    </div>
                @endif
            </div>

            {{-- 3rd section advantages --}}
            <div class="mt-10">
                <h2 class="font-bold text-lg"> Our Advantages</h2>
                <div class="flex flex-col ">

                </div>
            </div>

        </div>
    </div>
@endsection
