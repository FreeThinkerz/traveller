-xs">Découvrez des tarifs incroyables sur les vols et les hôtels auprès d'un large éventail de fournisseurs.
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
