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

        <script src="https://unpkg.com/scrollreveal"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

        @vite(['resources/css/app.css'])
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
                <div class="flex items-center justify-center w-5/12" id="reveal-item">
                    <h1 class="text-5xl text-lightBlack font-semibold tracking-wide">
                        Discover the joy of finding your perfect furry friend for a lifetime of love and companionship.
                    </h1>
                </div>
                <!--Right-->
                <div class="flex flex-col justify-center items-center w-5/12 h-2/3">
                    <div class="flex flex-col items-center h-1/2 w-full">
                        <h2 class="text-3xl text-lightBlack font-normal">
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
            <div class="flex flex-col items-center justify-center w-11/12 m-auto">
                <!--Top-->
                <div class="flex items-center justify-evenly w-11/12 h-56 mb-2">
                    <!--Left-->
                    <div class="flex items-center justify-center h-full w-1/2">
                        <h1 class="text-5xl text-lightBlack font-semibold text-wrap tracking-wide">
                            Discover your ideal pet companion today!
                        </h1>
                    </div>
                    <!--Right-->
                    <div class="flex flex-col justify-center gap-2 items-center w-5/12 h-1/2">
                        <div class="flex flex-col items-center h-1/2 w-full">
                            <h2 class="text-xl text-lighBlack font-normal">
                                Discover a furry companion and positively impact their life by using our online pet adoption platform. Welcome!
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
                <div class="flex items-center justify-evenly h-1/5 w-11/12">
                    <div class="h-96 w-80 rounded-lg shadow-md overflow-hidden">
                        <img src="{{ 'images/try.jpg' }}" alt="">
                    </div>
                    <div class="h-96 w-80 rounded-lg shadow-md overflow-hidden">
                        <img src="{{ 'images/cat.jpg' }}" alt="">
                    </div>
                    <div class="h-96 w-80 rounded-lg shadow-md overflow-hidden">
                        <img src="{{ 'images/dog.jpg' }}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="flex items-center justify-center m-auto h-screen">
            <div class="flex items-center w-11/12 h-5/6 rounded-t-lg rounded-b-lg">
                <div class="flex w-1/2 h-full">
                    <img class="object-cover h-full w-full rounded-t-lg rounded-b-lg" src="{{asset('images/dog2.jpg')}}" alt="">
                </div>
                <div class="flex flex-col items-center justify-center w-1/2 h-full">
                    <div class="h-1/4 w-10/12 flex items-center justify-center">
                        <h1 class="text-3xl text-lightBlack font-semibold">
                            Discover the Unparalleled Joy of Pet Adoption at Our Welcoming Shelter
                        </h1>
                    </div>
                    <div class="h-1/4 w-10/12 flex items-center justify-center">
                        <h2 class="text-xl text-lightBlack font-normal">
                            Adopting a pet from our shelter brings immense joy and fulfillment to your life. Our furry friends are waiting to find their forever homes!
                        </h2>
                    </div>
                    <div class="flex flex-row items-center justify-evenly h-1/4 w-10/12">
                        <div class="flex flex-col w-1/2 h-full">
                            <h2 class="text-xl text-lightBlack font-semibold">
                                Benefits
                            </h2>
                            <h3 class="text-base font-normal">
                                1. Save a life and give a loving home to a deserving pet.
                            </h3>
                        </div>
                        <div class="flex flex-col w-1/2 h-full">
                            <h2 class="text-xl text-lightBlack font-semibold">
                                Why Choose Us
                            </h2>
                            <h3 class="text-base font-normal">
                                1. We have a wide variety of pets available for adoption.
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="h-screen bg-gray-400">Section 4</section>
        <section class="h-screen bg-gray-500">Section 5</section>


        <script>
            ScrollReveal({
                reset: true,
                distance: 30px,
                duration: 2500,
                delay: 400
            });

            ScrollReveal().reveal('#reveal-item', { delay: 500 });
        </script>
    </body>
</html>
