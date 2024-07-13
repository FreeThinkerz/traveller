@extends('layouts.app')

<div class="flex flex-col justify-center h-[30vh] w-full bg-primary">
    <h1 class="text-3xl font-bold text-white px-5">Aprope De Nous</h1>
</div>

<div class=" flex flex-col-reverse justify-center items-center laptop:grid laptop:grid-cols-2 grid-cols-1 bg-gray-100 py-10 bg-primary/10 laptop:px-28 px-10">
    <div class="flex flex-col justify-start items-center laptop:items-start laptop:justify-start gap-4">
        <h2 class="text-2xl font-bold">who we are</h2>
        <p class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, excepturi!</p>
        <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, cupiditate. Libero repellendus vel saepe praesentium eius a rem incidunt debitis?</p>
        <button class="p-4 bg-white font-bold rounded shadow">Biography</button>
    </div>
    <img class="size-[400px] laptop:size-full object-cover object-center" src="{{ asset('/images/bus_hero.png') }}" alt="bus_hero image">
</div>

<div class=" flex flex-col-reverse justify-center items-center px-10 laptop:px-28 laptop:grid laptop:grid-cols-2 grid-cols-1  gap-4 p-4 bg-gray-100 py-10">
    <div class="flex flex-col justify-center items-center laptop:items-start gap-4">
        <h2 class="text-2xl font-bold">Our Goals</h2>
        <p class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, excepturi!</p>
        <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus eos provident saepe hic? At, obcaecati nesciunt architecto pariatur itaque fugiat. cupiditate. Libero repellendus vel saepe praesentium eius a rem incidunt debitis?</p>
        <button class="p-4 size-fit bg-white font-bold rounded shadow-xl">See Testmonials</button>
    </div>
    <img class="w-full object-cover object-center" src="{{ asset('/images/people.png') }}" alt="bus_hero image">
</div>


<div class="px-10 laptop:px-28 relative bg-primary/30 flex flex-col space-y-5 h-[40vh] justify-center items-center w-full">

    <h2 class="text-2xl font-bold text-white">Our goal is to improve and streamline our servicers so any suggestion from our customers can help</h2>
    <button class="p-4 size-fit bg-secondary text-white flex space-x-2 font-bold rounded shadow justify-center items-center">
        <p>Share Openion</p>
        openion
        <svg class="size-5" xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 24 24">
            <g fill="none" stroke="#ffffff" stroke-width="1.5">
                <path d="M3 3.6a.6.6 0 0 1 .6-.6h16.8a.6.6 0 0 1 .6.6v13.8a.6.6 0 0 1-.6.6h-4.14a.6.6 0 0 0-.438.189l-3.385 3.597a.6.6 0 0 1-.874 0l-3.385-3.597A.6.6 0 0 0 7.74 18H3.6a.6.6 0 0 1-.6-.6z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="m12 7l1.425 2.575L16 11l-2.575 1.425L12 15l-1.425-2.575L8 11l2.575-1.425z" />
            </g>
        </svg>

    </button>
</div>
