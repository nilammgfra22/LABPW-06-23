@extends('layouts.main')
@section('container')
<style>
    .section_home {
        position: relative;
        height: 80vh;
        width: 100%;
        background-size: cover;
        background-position: bottom center;
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }

    .text h1 span {
        font-size: 6rem;
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 20px;
        position: relative;
        display: inline-block;
        animation: flip 2s infinite;
        animation-delay: calc(.2s * var(--i))
    }

    @keyframes flip {

        0%,
        80% {
            transform: rotateY(360deg)
        }
    }

    .text p {
        font-size: 1rem;
        font-weight: 500;
        line-height: 30px;
        color: #8294C4;
        margin-bottom: 35px;
    }

    .text-button {
        display: inline-block;
        padding: 13px;
        border-radius: 13px;
        background-color: #8294C4;
        color: black;
        font-size: 15px;
        font-weight: 350;
        transition: all .50s ease;
        cursor: pointer;
    }

    .text-button:hover {
        transform: translateX(10px);
        border: 5px solid #8294C4;
        background: transparent;
        color: #4F6F52;
    }

    .text-button a {
        text-decoration: none;
        color: black;
    }
   
</style>

@section('container')
    <div class="section_home">
        <div class="text">
            <h1>Welcome To<br>
                <span style="--i:1">T</span>
                <span style="--i:2">e</span>
                <span style="--i:3">c</span>
                <span style="--i:4">h</span>
                <span style="--i:5">n</span>
                <span style="--i:6">o</span>
                <span style="--i:7">T</span>
                <span style="--i:8">r</span>
                <span style="--i:9">e</span>
                <span style="--i:10">n</span>
                <span style="--i:11">d</span>
                <span style="--i:12">s</span>
            </h1>
          <p>"Technotrends adalah toko elektronik terkemuka yang selalu<br>
            menghadirkan produk-produk teknologi terbaru dan paling inovatif <br>
             untuk memenuhi kebutuhan pelanggan dalam dunia yang terus berkembang."</p>
            </button>
        </div>
    </div>
@endsection



