@extends('layouts.main')
<style>
    .title-word {
        animation: color-animation 1s linear infinite;
    }

    .title-word-1 {
        --color-1: #FECDA6;
        --color-2: #739072;
        --color-3: #FF9B82;
    }

    .title-word-2 {
        --color-1: #F1B4BB;
        --color-2: #ACCFCB;
        --color-3: #F875AA;
    }

    .title-word-3 {
        --color-1: #ACCFCB;
        --color-2: #F8BDEB;
        --color-3: #A2C579;
    }

    @keyframes color-animation {
        0% {
            color: var(--color-1)
        }

        32% {
            color: var(--color-1)
        }

        33% {
            color: var(--color-2)
        }

        65% {
            color: var(--color-2)
        }

        66% {
            color: var(--color-3)
        }

        99% {
            color: var(--color-3)
        }

        100% {
            color: var(--color-1)
        }
    }


    .title {
        text-align: center;
        font-family: "Montserrat", sans-serif;
        font-weight: bold;
        font-size: 50px;
        text-transform: uppercase;
    }
</style>

@section('container')
        <h3 class="title mb-5 mt-5">
            <span class="title-word title-word-1">Welcome</span>
            <span class="title-word title-word-2">To</span>
            <span class="title-word title-word-3">ClassicModels!</span>
        </h3>
        <div class="text-center">
            <h6 class="mb-3">The World of Classic Vehicles! We are the primary source for passionate classic vehicle enthusiasts. 
                At ClassicModels, we understand the allure inherent in every classic vehicle. 
                From historic cars to iconic classic motorcycles, we present a stunning collection to satisfy your passion.</h6>
        
            <h6 class="mb-3">ClassicModels invites you to explore our enchanting collection. 
                Each classic vehicle offered is a work of art representing elegance, unparalleled design, and invaluable historical value.
            </h6>
            <h6 class="mb-3">At ClassicModels, we understand that classic vehicles are more than just transportation; 
                they are cultural heritage and a lasting love for beauty. Thank you for joining us on this journey. 
                Enjoy discovering the classic allure in the world of vehicles with us!</h6>
        </div>
@endsection