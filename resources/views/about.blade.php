@extends('layouts.app')

@section('content')
<div class="flex flex-col justify-center h-[30vh] w-full bg-primary">
    <h1 class="text-3xl font-bold text-white px-5">À Propos De Nous</h1>
</div>

<div class="flex flex-col-reverse justify-center items-center laptop:grid laptop:grid-cols-2 grid-cols-1 bg-gray-100 py-10 bg-primary/10 laptop:px-28 px-10">
    <div class="flex flex-col justify-start items-center laptop:items-start laptop:justify-start gap-4">
        <h2 class="text-2xl font-bold">Qui sommes-nous</h2>
        <p class="text-muted">Nous sommes une entreprise dédiée à fournir les meilleures solutions pour nos clients. Notre équipe est composée de professionnels expérimentés.</p>
        <p class="text-muted">Notre mission est de transformer vos défis en opportunités. Nous nous engageons à offrir des services de haute qualité et à répondre à vos besoins spécifiques.</p>
        <button class="p-4 bg-white font-bold rounded shadow">Biographie</button>
    </div>
    <img class="size-[400px] laptop:size-full object-cover object-center" src="{{ asset('/images/bus_hero.png') }}" alt="image de bus_hero">
</div>

<div class="flex flex-col-reverse justify-center items-center px-10 laptop:px-28 laptop:grid laptop:grid-cols-2 grid-cols-1 gap-4 p-4 bg-gray-100 py-10">
    <div class="flex flex-col justify-center items-center laptop:items-start gap-4">
        <h2 class="text-2xl font-bold">Nos Objectifs</h2>
        <p class="text-muted">Nous visons à être les leaders du marché en fournissant des services innovants et efficaces. La satisfaction de nos clients est notre priorité.</p>
        <p class="text-muted">Nous nous engageons à améliorer continuellement nos services et à innover pour répondre aux besoins changeants de nos clients. Vos commentaires et suggestions sont les bienvenus.</p>
        <button class="p-4 size-fit bg-white font-bold rounded shadow-xl">Voir les Témoignages</button>
    </div>
    <img class="w-full object-cover object-center" src="{{ asset('/images/people.png') }}" alt="image de personnes">
</div>

<div class="px-10 laptop:px-28 relative bg-primary/30 flex flex-col space-y-5 h-[40vh] justify-center items-center w-full">
    <h2 class="text-2xl font-bold text-white">Notre objectif est d'améliorer et de rationaliser nos services, donc toute suggestion de nos clients peut nous aider</h2>
    <button class="p-4 size-fit bg-secondary text-white flex space-x-2 font-bold rounded shadow justify-center items-center">
        <p>Partager votre opinion</p>
        <svg class="size-5" xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 24 24">
            <g fill="none" stroke="#ffffff" stroke-width="1.5">
                <path d="M3 3.6a.6.6 0 0 1 .6-.6h16.8a.6.6 0 0 1 .6.6v13.8a.6.6 0 0 1-.6.6h-4.14a.6.6 0 0 0-.438.189l-3.385 3.597a.6.6 0 0 1-.874 0l-3.385-3.597A.6.6 0 0 0 7.74 18H3.6a.6.6 0 0 1-.6-.6z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="m12 7l1.425 2.575L16 11l-2.575 1.425L12 15l-1.425-2.575L8 11l2.575-1.425z" />
            </g>
        </svg>
    </button>
</div>
@endsection
