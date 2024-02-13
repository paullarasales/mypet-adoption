<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,500;1,600&family=Rubik+Broken+Fax&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <section class="h-screen w-full">
            <div class="flex justify-evenly w-full h-14">
                <!--Left-->
                <div class="flex items-center justify-evenly w-3/5 h-full mr-40">
                    <h1 class="text-3xl font-bold tracking-wider">
                        PetPaws
                    </h1>
                    <h2 class="text-md font-medium">
                        Adopt Now
                    </h2>
                    <h2 class="text-md font-medium">
                        About Us
                    </h2>
                    <h2 class="text-md font-medium">
                        Contact
                    </h2>
                </div>
                <!--Right-->
                <div class="flex items-center justify-evenly w-1/4 h-full">
                    <button class="h-9 w-32 bg-white border-2 border-black text-black">
                        Sign Up
                    </button>
                    <button class="h-9 w-32 bg-black text-white">
                        Log in
                    </button>
                </div>
            </div>
            <!--Content-->
            <div class="flex items-center justify-evenly w-full h-4/5 m-auto">
                <!--Left-->
                <div class="flex items-center justify-center w-5/12">
                    <h1 class="text-5xl text-lightBlack font-semibold tracking-wide">
                        Discover the joy of finding your perfect furry friend for a lifetime of love and companionship.
                    </h1>
                </div>
                <!--Right-->
                <div class="flex flex-col justify-center items-center w-5/12 h-2/3">
                    <div class="flex flex-col items-center h-1/2 w-full">
                        <h2 class="text-3xl font-semibold">
                            Explore a variety of pets available for adoption and find out how you can provide them with a permanent loving home.
                        </h2>
                    </div>
                    <div class="flex flex-row items-center justify-start w-full gap-2 mb-2">
                        <button class="h-10 w-32 bg-black text-white">
                            Browse
                        </button>
                        <button class="h-10 w-32 border-2 border-black text-black">
                            Learn More
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="flex justify-center h-screen items-center">
            <div class="flex flex-col items-center justify-center w-11/12">
                <!--Top-->
                <div class="flex items-center justify-evenly w-11/12 h-52">
                    <!--Left-->
                    <div class="flex items-center justify-center h-full w-1/2">
                        <h1 class="text-5xl font-bold text-wrap tracking-wide">
                            Discover your ideal pet companion today!
                        </h1>
                    </div>
                    <!--Right-->
                    <div class="flex flex-col justify-evenly items-center w-5/12 h-full">
                        <div class="flex flex-col items-center h-1/2 w-full">
                            <h2 class="text-xl font-semibold">
                                Welcome to our online pet adoption platform, where you can find a furry friend to bring home and share your life with. Browse through our wide selection of adorable pets and make a difference in their lives.
                            </h2>
                        </div>
                        <div class="flex flex-row items-center justify-start w-full gap-2 mt-10">
                            <button class="h-10 w-32 bg-black text-white">
                                Adopt
                            </button>
                            <button class="h-10 w-32 border-2 border-black text-black">
                                Learn More
                            </button>
                        </div>
                    </div>
                </div>
                <!--Content-->
                <div class="flex items-center justify-center h-1/5 w-11/12">
                    <img src="{{ asset('images/resize.jpg')}}">

                </div>
            </div>
        </section>
        <section class="h-screen bg-gray-300">Section 3</section>
        <section class="h-screen bg-gray-400">Section 4</section>
        <section class="h-screen bg-gray-500">Section 5</section>
    </body>
</html>
