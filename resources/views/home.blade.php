<?php
$inNav = 'passagers';
$sliders = [
    'avenir-voyages.jpeg',
    'buca-voyages.jpeg',
    'camrail.jpeg',
    'cerises-express.jpeg',
    'danay-express.jpeg',
    'finexs-voyages.jpeg',
    'garanti-express.jpeg',
    'general-express.jpeg',
    'global-voyages.jpeg',
    'men-travel.jpeg',
    'overline-voyages.jpeg',
    'touristic-express.jpeg',
    'transcam-voyages.jpeg',
    'united-express.jpeg'
];

$destinations = [
    [
        'name' => 'Kribi',
        'price' => 100000,
        'thumbnail' => 'https://via.placeholder.com/150x100?text=Kribi',
    ],
    [
        'name' => 'Bafang',
        'price' => 100000,
        'thumbnail' => 'https://via.placeholder.com/150x100?text=Bafang',
    ],
    [
        'name' => 'Ngaoundéré',
        'price' => 100000,
        'thumbnail' => 'https://via.placeholder.com/150x100?text=Ngaoundéré',
    ],
    [
        'name' => 'Buea',
        'price' => 100000,
        'thumbnail' => 'https://via.placeholder.com/150x100?text=Buea',
    ],
    [
        'name' => 'Yaoundé',
        'price' => 120000,
        'thumbnail' => 'https://via.placeholder.com/150x100?text=Yaounde',
    ],
    [
        'name' => 'Nkongsamba',
        'price' => 150000,
        'thumbnail' => 'https://via.placeholder.com/150x100?text=Nkongsamba',
    ],
    [
        'name' => 'Garoua',
        'price' => 150000,
        'thumbnail' => 'https://via.placeholder.com/150x100?text=Garoua',
    ],
    [
        'name' => 'Bertuoa',
        'price' => 150000,
        'thumbnail' => 'https://via.placeholder.com/150x100?text=Bertoua',
    ],
    [
        'name' => 'Dschang',
        'price' => 150000,
        'thumbnail' => 'https://via.placeholder.com/150x100?text=Dschang',
    ],
];

$destination_list= [
    [
        "start_place" => "Douala",
        "destinations" => [
            [
                "name" => "Nkongsamba",
                "price" => 8000,
                "currency" => "XAF"
            ],
            [
                "name" => "Buéa",
                "price" => 12000,
                "currency" => "XAF"
            ],
            [
                "name" => "Yaoundé",
                "price" => 15000,
                "currency" => "XAF"
            ]
        ]
    ],
    [
        "start_place" => "Yaoundé",
        "destinations" => [
            [
                "name" => "Garoua",
                "price" => 20000,
                "currency" => "XAF"
            ],
            [
                "name" => "Maroua",
                "price" => 25000,
                "currency" => "XAF"
            ],
            [
                "name" => "Bamenda",
                "price" => 18000,
                "currency" => "XAF"
            ]
        ]
    ],
    [
        "start_place" => "Kribi",
        "destinations" => [
            [
                "name" => "Limbe",
                "price" => 10000,
                "currency" => "XAF"
            ],
            [
                "name" => "Campo",
                "price" => 14000,
                "currency" => "XAF"
            ]
        ]
    ]
];

?>
@extends('layouts.app')

@section('title', 'B. Trans-Réserve')

@section('content')
    <div class="">
        {{-- section 1 --}}
        <div class="min-h-screen">
            <div class="h-[50vh] bg-gray-600 w-full">
                <div class="flex flex-col justify-center h-full space-y-4 md:px-20 px-4">
                    <p class="p-2 text-sm bg-primary rounded-xl text-gray-100 w-fit">Lorem ipsum dolor sit amet.</p>
                    <h1 class="text-3xl font-bold text-white">Voyages réguliers au Cameroun</h1>

                </div>
            </div>
            <div class="px-5 desktop:px-40 tv:px-60 laptop:px-32">
                {{-- 2ème section --}}
                <div class="md:-mt-24 -mt-16 flex flex-col">
                    <div class="flex  w-full">
                        <button
                            class="flex items-center space-x-2 p-4 @if ($inNav === 'passagers') bg-primary text-white @else bg-white text-black @endif ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32">
                                <path fill="#4f46e5"
                                    d="M10.5 9A3.5 3.5 0 1 1 14 5.5A3.504 3.504 0 0 1 10.5 9m0-5A1.5 1.5 0 1 0 12 5.5A1.5 1.5 0 0 0 10.5 4m11.974 27.313L19.34 24h-7.101a4.01 4.01 0 0 1-3.867-2.97l-1.634-6.127a3.899 3.899 0 0 1 7.535-2.009L15.1 16H21v2h-7.436l-1.223-4.59a1.9 1.9 0 0 0-3.67.978l1.633 6.126A2.005 2.005 0 0 0 12.239 22h8.42l3.654 8.525zM30 6h-4V2h-2v4h-4v2h4v4h2V8h4z" />
                                <path fill="#4f46e5"
                                    d="M18 28H7.768a2 2 0 0 1-1.933-1.485L2.033 12.258l1.933-.516L7.768 26H18Z" />
                            </svg>
                            <p class="text-lg font-semibold">Passagers</p>
                        </button>
                        <button
                            class="flex items-center space-x-2 p-4 @if ($inNav !== 'passagers') bg-primary text-white @else bg-white text-black @endif ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-8" viewBox="0 0 48 48">
                                <path fill="#111" stroke="#111" stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.339 23.276v10.767l15.654 2.941V13.519" />
                                <path fill="none" stroke="#111" stroke-linecap="round" stroke-linejoin="round"
                                    d="M39.562 23.561v10.294l-15.569 3.129" />
                                <path fill="none" stroke="#111" stroke-linecap="round" stroke-linejoin="round"
                                    d="m28.775 22.075l13.386 1.844a1.176 1.176 0 0 0 1.236-1.643l-3.835-8.632l-15.57-2.628L8.34 13.77l-3.73 8.016a1.176 1.176 0 0 0 1.149 1.67l13.338-.927a1.47 1.47 0 0 0 1.24-.865l3.655-8.144l3.653 7.727a1.47 1.47 0 0 0 1.129.828m-17.87 8.589l2.941.313" />
                            </svg>
                            <p class="text-lg font-semibold">Colis</p>
                        </button>
                        <div class="w-full bg-trasparent"></div>
                    </div>
                    {{-- section conditionnelle 1 --}}
                    @if ($inNav === 'passagers')
                        <div class="bg-gray-50 p-4 shadow-md space-y-3 rounded-b-md">
                            <div class="flex space-x-2 items-center">
                                <span class="rounded-3xl bg-primary p-2 text-white text-sm shadow">premier texte</span>
                                <span class="rounded-3xl p-2 text-sm shadow">deuxième texte</span>
                            </div>
                            <div class="flex justify-center md:justify-start items-center gap-2 flex-wrap">
                                <div class="flex shadow space-x-2 items-center p-2  rounded-md flex-grow max-w-md">
                                    <span class="rounded-full p-2 bg-primary ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" width="128" height="128"
                                            viewBox="0 0 24 24">
                                            <path fill="none" stroke="#ffffff" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="1.5"
                                                d="M12 17V3m0 0c-.373 0-.673.343-1.273 1.028L9 6m3-3c.373 0 .673.343 1.273 1.028L15 6M5 15c-1.25.633-2 1.439-2 2.316C3 19.35 7.03 21 12 21s9-1.65 9-3.684c0-.877-.75-1.683-2-2.316"
                                                color="#ffffff" />
                                        </svg>
                                    </span>
                                    <div class="flex flex-col">
                                        <h4 class="font-bold text-sm">Départ</h4>
                                        <p class="text-muted text-sm">Lorem, ipsum.</p>
                                    </div>
                                </div>
                                <div class="flex shadow space-x-2 items-center p-2  rounded-md flex-grow max-w-md">
                                    <span class="rounded-full p-2 bg-rose-500 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" width="128" height="128"
                                            viewBox="0 0 48 48">
                                            <defs>
                                                <mask id="IconifyId190a46d2d63867a290">
                                                    <g fill="none" stroke-linejoin="round" stroke-width="4">
                                                        <path fill="#fff" fill-rule="evenodd" stroke="#fff"
                                                            d="M6 42h36V6H30c-1.324 3.159-3.324 4.738-6 4.738S19.324 9.158 18 6H6z"
                                                            clip-rule="evenodd" />
                                                        <path stroke="#000" stroke-linecap="round" d="m15 24l6 6l12-12" />
                                                    </g>
                                                </mask>
                                            </defs>
                                            <path fill="#ffffff" d="M0 0h48v48H0z"
                                                mask="url(#IconifyId190a46d2d63867a290)" />
                                        </svg>
                                    </span>
                                    <div class="flex flex-col">
                                        <h4 class="font-bold text-sm">Arrivée</h4>
                                        <p class="text-muted text-sm">Lorem, ipsum.</p>
                                    </div>
                                </div>
                                <div class="flex shadow space-x-2 items-center p-2  rounded-md flex-grow max-w-md">
                                    <span>icône</span>
                                    <div class="flex flex-col">
                                        <h4 class="font-bold text-sm">Bonjour de votre part</h4>
                                        <p class="text-muted text-sm">Lorem, ipsum.</p>
                                    </div>
                                </div>
                                <div class="flex shadow space-x-2 items-center p-2  rounded-md flex-grow-0">
                                    <span class="rounded-full p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" width="128" height="128"
                                            viewBox="0 0 24 24">
                                            <path fill="#111"
                                                d="M9 19h6v2H9c-2.76 0-5-2.24-5-5V7h2v9c0 1.66 1.34 3 3 3m1.42-13.59c.78-.78.78-2.05 0-2.83s-2.05-.78-2.83 0s-.78 2.05 0 2.83c.78.79 2.04.79 2.83 0M11.5 9c0-1.1-.9-2-2-2H9c-1.1 0-2 .9-2 2v6c0 1.66 1.34 3 3 3h5.07l3.5 3.5L20 20.07L14.93 15H11.5z" />
                                        </svg>
                                    </span>
                                    <div class="flex flex-col">
                                        <h4 class="font-bold text-sm">Passagers</h4>
                                        <p class="text-muted text-sm">20</p>
                                    </div>
                                </div>
                                <button class="bg-secondary p-4 flex space-x-2 rounded shadow text-white">
                                    <svg class="size-5" xmlns="http://www.w3.org/2000/svg" width="128" height="128"
                                        viewBox="0 0 24 24">
                                        <path fill="#fff"
                                            d="M15.58 16.8L12 14.5l-3.58 2.3l1.08-4.12L6.21 10l4.25-.26L12 5.8l1.54 3.94l4.25.26l-3.29 2.68M20 12a2 2 0 0 1 2-2V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2a2 2 0 0 1-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 1-2-2" />
                                    </svg>
                                    <span>RÉSERVER MAINTENANT</span>
                                </button>
                            </div>
                        </div>
                    @else
                        {{-- section 2 --}}
                        <div>
                            deuxième section
                        </div>
                    @endif
                </div>

                {{-- 3ème section avantages --}}
                <div class="mt-14">
                    <h2 class="font-bold text-xl"> Nos Avantages</h2>
                    <div class="grid gap-10 tablet:grid-cols-2 laptop:grid-cols-3 laptop:grid mt-10">
                        <div class="flex justify-center items-center space-x-2 max-w-xs">
                            <x-icons.time_saving class="size-24 self-start" />
                            <div class="flex flex-col gap-2">
                                <h3 class="font-bold">Réservez des vols rapidement</h3>
                                <p class="text-muted max-w-xs">Découvrez des tarifs incroyables sur les vols et les hôtels auprès d'un large éventail de fournisseurs.
                                </p>
                            </div>


                        </div>
                        <div class="flex justify-center items-center space-x-2 max-w-md">
                            <x-icons.time_saving class="size-24 self-start" />
                            <div class="flex flex-col gap-2">
                                <h3 class="font-bold">Accès 24/7 et informations à portée de main</h3>
                                <p class="text-muted max-w-xs">Réservez et gérez vos voyages à tout moment, n'importe où - tout depuis votre appareil.
                                </p>
                            </div>


                        </div>
                        <div class="flex justify-center items-center space-x-2 max-w-xs">
                            <x-icons.time_saving class="size-24 self-start" />
                            <div class="flex flex-col gap-2">
                                <h3 class="font-bold">Voyagez n'importe quand, n'importe où</h3>
                                <p class="text-muted max-w-xs">Gérez vos voyages 24/7 en quelques clics sur votre appareil.
                                </p>
                            </div>
                        </div>
                        <div class="flex justify-center items-center space-x-2 max-w-xs">
                            <x-icons.time_saving class="size-24 self-start" />
                            <div class="flex flex-col gap-2">
                                <h3 class="font-bold">Planification de voyage sans stress</h3>
                                <p class="text-muted max-w-xs">Recherchez, comparez et réservez facilement le voyage de vos rêves.
                                </p>
                            </div>
                        </div>
                        <div class="flex justify-center items-center space-x-2 max-w-xs">
                            <x-icons.time_saving class="size-24 self-start" />
                            <div class="flex flex-col gap-2">
                                <h3 class="font-bold">Réservation en toute tranquillité</h3>
                                <p class="text-muted max-w-xs">Sécurisez votre voyage avec des options de paiement fiables et des politiques de voyage claires.

                                </p>
                            </div>
                        </div>

                        <div class="flex justify-center items-center space-x-2 max-w-xs">
                            <x-icons.time_saving class="size-24 self-start" />
                            <div class="flex flex-col gap-2">
                                <h3 class="font-bold">Meilleures offres, large choix</h3>
                                <p class="text-muted max-w-xs">Découvrez d'excellents tarifs sur les vols et les hôtels auprès de nombreux fournisseurs

                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        {{-- section 2 --}}
        <div class="bg-white py-10 mt-10 flex flex-col">
            <div class="slider [mask-image:linear-gradient(to_right,transparent_0%,#000_10%,transparent_190%)] flex overflow-hidden w-full space-x-4 px-2">
              <div class="list relative inline-flex gap-4 items-center animate-slide origin-left [&:has(.item:hover)]:[animation-play-state:paused] [&:hover>*]:blur-sm [&>*]:cursor-pointer">
                @foreach($sliders as $slider)
                  <div class="item hover:!blur-0">
                    <img class="min-w-10 max-w-52 aspect-auto rounded-sm" src="{{ asset('images/' . $slider) }}" alt="{{ str($slider)->replace('.jpeg', '')->replace('-', ' ')->title() }}">
                  </div>
                @endforeach

                @foreach($sliders as $slider)
                  <div class="item hover:!grayscale-0">
                    <img class="min-w-10 max-w-52 aspect-auto rounded-sm" src="{{ asset('images/' . $slider) }}" alt="{{ str($slider)->replace('.jpeg', '')->replace('-', ' ')->title() }}">
                  </div>
                @endforeach

              </div>
            </div>
        </div>

        {{-- section 2 --}}
        <div class="bg-white px-5 desktop:px-60 laptop:px-32 py-10 mt-10 flex flex-col">
            <h1 class="font-bold text-xl text-center text-primary">Destinations populaires avec départ direct de Douala
            </h1>
            <div class="laptop:grid-cols-3 tablet:grid-cols-2  grid gap-10 mt-10">

                @foreach ($destinations as $destination)
                    <x-destination-card :is-default="$loop->first" :destination="$destination" />
                @endforeach
            </div>
            <button class="p-4 bg-white shadow rounded mt-10 mx-auto "> Afficher toutes les destinations</button>
        </div>

        {{-- section 3 Nos services et destinations --}}

        <div class="bg-primary/95 px-5 desktop:px-60 laptop:px-32 py-10">
            {{-- nos services --}}
                <div class="flex flex-col justify-center items-center gap-10">
                    <h1 class="font-bold text-xl text-white">Nos Services</h1>
                    <div class="flex justify-center items-center gap-5">
                        <div class="flex flex-col justify-center items-center">
                            <p class="text-secondary font-bold text-lg">10K+</p>
                            <p class="text-white">Clients Satisfaits</p>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <p class="text-secondary font-bold text-lg">100K+</p>
                            <p class="text-white">Réservations Quotidiennes</p>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <p class="text-secondary font-bold text-lg">10K+</p>
                            <p class="text-white">Livraisons de Colis</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col-reverse tablet:grid tablet:grid-cols-2   gap-10 text-white mt-10">
                    <div class="flex flex-col">
                        <h2 class="text-2xl font-bold">Transporter les gens</h2>
                        <p class="text-sm text-muted mt-5">Nous offrons un transport sûr et sécurisé des personnes, la livraison de colis dans toutes les régions du Cameroun et nous sommes fiers de la fiabilité, de l'efficacité et de la détermination de notre service à répondre à vos attentes.
                        </p>
                        <ul class="flex mt-5">
                            <div class="flex flex-col">
                                <li class="">Multiples Passerelles de Paiement</li>
                                <li class="">Recherche et Filtrage Fluides</li>
                                <li class="">Sélection de Siège Interactive</li>
                            </div>
                            <div class="flex flex-col">
                                <li class="">Sélection de Siège Interactive</li>
                                <li class="">Disponibilité et Prix en Temps Réel</li>
                                <li class="">Fonctionnalités Supplémentaires</li>
                            </div>
                        </ul>
                        <button class="p-3 bg-white text-black w-fit rounded px-5 mt-5">Découvrir</button>
                    </div>
                    <div>
                        <img class="object-fit object-center size-full" src="{{ asset('/images/bus.png') }}"
                            alt="">
                    </div>

                </div>
            </div>
            {{-- Liste des destinations --}}
            <div class="mt-10">
                <h1 class="font-bold text-lg text-center text-white">Liste des Destinations</h1>
                <div class="grid tablet:grid-cols-2 laptop:grid-cols-3 gap-10 mt-10">
                    @foreach ($destination_list as $destination)
                        <x-destination-list :destination="$destination" />
                    @endforeach
                </div>
            </div>

        </div>
    </div>
@endsection
