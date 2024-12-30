<?php

include "./backend/connection.php";
include "./backend/route.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./fontawesome-free-6.5.1-web/css/all.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400..700&display=swap" rel="stylesheet">
    <title>Besa Luxury Coach</title>
    <style>
        #hero {
            background: linear-gradient(#020a3dbd, #011635da), url('./images/backg4.jpg');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        #choosing {
            background: linear-gradient(#060d3de0, #0418368f), url('./images/backg4.jpg');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body class="bg-white font-paragraph">
    <!-- BANNER SECTION -->
    <section class="h-screen w-full bg-center bg-cover lg:h-screen lg:w-full lg:bg-center lg:bg-cover bg-no-repeat"
        id="hero">
        <nav class="hidden px-4 pt-4 lg:block lg:px-24">
            <div
                class="flex flex-col gap-4 lg:flex lg:flex-row lg:justify-between lg:items-center lg:p-5 text-white text-md">
                <div class="lg:w-1/4">
                    BesaLuxuryCoach
                </div>
                <div class="flex flex-col gap-4 lg:flex lg:flex-row lg:gap-4 lg:justify-between w-2/5">
                    <a href="#">
                        <span>Home</span>
                    </a>
                    <a href="#">
                        <span>About</span>
                    </a>
                    <a href="#">
                        <span>Routes</span>
                    </a>
                    <a href="#">
                        <span>Contact</span>
                    </a>
                </div>
                <a href=""
                    class="w-32 p-3 lg:text-md lg:w-36 bg-inherit lg:p-3 text-center border border-redd rounded-sm text-white">
                    <button>Contact us</button>
                </a>
            </div>
        </nav>
        <div class="flex flex-col gap-4 px-4 pt-large lg:pt-0  lg:flex lg:flex-row lg:gap-8 lg:mt-top lg:px-24 lg:items-center" data-aos="fade-right" data-aos-duration="3000">
            <div class="flex flex-col gap-4 w-full lg:flex lg:flex-col lg:gap-6 lg:w-4/5">
                <h1 class="text-xl lg:text-3xl text-heading font-bold">Besa Luxury Coach</h1>
                <h1 class="text-xl lg:text-3xl text-white font-bold">Enjoy Luxurious Journey With Us.</h1>
                <p class="lg:text-md w-full text-white lg:w-4/5">Experience hassle-free travel with our simple
                    online booking
                    system.Choose your seat, pay secierly , and get ready to enjoy smooth and safe journey.</p>
                <a href=""
                    class="w-32 p-3 lg:text-md  lg:w-36 bg-inherit lg:p-3 text-center border border-redd rounded-sm text-white">
                    <button>Contact Us</button>
                </a>
            </div>
            <form class="mt-x lg:mt-0 flex flex-col gap-4 w-full lg:flex lg:flex-col lg:gap-4 lg:w-2/5 lg:text-md" action="./backend/route.php" method="POST" data-aos="fade-left" data-aos-duration="3000">
                <input type="date" required class="w-full h-12 p-3 text-md lg:h-14 rounded-md lg:p-4 outline-none">
                <select name="starting_point" class="h-12 p-3 text-md lg:h-14 rounded-md lg:p-4 outline-none">
                    <option>--Select your Starting point (From) --</option>
                    <?php
                    $query = "SELECT DISTINCT starting_point FROM routes";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "
                    <option value='{$row['starting_point']}'> {$row['starting_point']}</option>         
                            ";
                        }
                    }
                    ?>
                </select>
                <select name="end_point" class="h-12 p-3 text-md lg:h-14 rounded-md lg:p-4 outline-none">
                    <option>--Select your Destination point (To) --</option>
                    <?php
                    $query = "SELECT DISTINCT end_point FROM routes";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {

                            echo "
                            <option value='{$row['end_point']}'>{$row['end_point']}</option>
                            ";


                        }
                    }
                    ?>
                </select>
                <?php echo $routeError ?>
                    <button id="book" name="book" class="w-32 p-3 lg:text-md lg:w-36 bg-inherit lg:p-3 text-center border border-redd rounded-sm text-white">Boook Now</button>
            </form>
        </div>
    </section>


    <!-- ABOUT -->

    <section class="px-4 lg:px-44  lg:mb-10">
        <h1 class="text-bb mt-small mb-2">ABOUT US</h1>
        <div class="flex flex-col gap-4 lg:flex lg:flex-row lg:gap-4">
            <div class="w-full lg:w-1/2 gap-3 flex flex-col lg:gap-4">
                <h1 class="text-lg lg:text-3xl text-heading">A bus service that's affordable and comfortable</h1>
                <hr class="w-20 h-1 lg:w-20 lg:h-1 border-0 bg-redd">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, ducimus aperiam sunt voluptatem
                    quisquam ullam perferendis unde tempore. Commodi voluptate quis nisi iste eum consequuntur
                    repellendus ab dolores adipisci nobis minima aut, reprehenderit aperiam corporis!</p>
                <div class="grid grid-cols-2 gap-3">
                    <div class="flex flex-col gap-2">
                        <h1 class="text-lg lg:text-4xl text-redd font-bold">20+</h1>
                        <h2 class="text-md lg:text-2xl text-heading">Busses available</h2>
                        <p class="text-sm lg:text-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h1 class="text-lg lg:text-4xl text-redd font-bold">97%</h1>
                        <h2 class="text-md lg:text-2xl text-heading">positive feedback</h2>
                        <p class="text-sm lg:text-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h1 class="text-lg lg:text-4xl text-redd font-bold">10+</h1>
                        <h2 class="text-md lg:text-2xl text-heading">Routes</h2>
                        <p class="text-sm lg:text-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h1 class="text-lg lg:text-4xl text-redd font-bold">100+</h1>
                        <h2 class="text-md lg:text-2xl text-heading">Customers</h2>
                        <p class="text-sm lg:text-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <a href=""
                    class="w-32 mt-4 p-3 lg:w-36 bg-inherit lg:p-3 text-center border border-redd rounded-sm text-bb">
                    <button>Boook Now</button>
                </a>
            </div>
            <div class="w-full bgcover h-img lg:h-auto lg:w-1/2 bg-cover bg-center rounded-md" data-aos="fade-left" data-aos-duration="3000"
                style="background-image: url('./images/backg5.jpg');">
            </div>
        </div>
    </section>


    <section class="mx-4 my-small lg:mx-x lg:my-small">
        <h2 class="mb-4 text-bb">CHOOSE THE BUS</h2>
        <div class="flex flex-col gap-4 lg:flex lg:flex-row lg:gap-4">
            <div class="flex flex-col gap-2">
                <h1 class="text-lg lg:w-full lg:text-3xl text-heading">Get on the road with our quality busses.</h1>
                <hr class="w-20 h-1 lg:w-20 lg:h-1 border-0 bg-redd">
            </div>
            <p class="lg:w-full">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam officia deserunt
                ipsa
                porro modi autem totam vero labore dolorem maiores temporibus perferendis aliquam eius, consequuntur
                nostrum sunt ad quae eos!</p>
        </div>
        <div class="grid grid-cols-1 gap-4 mt-small lg:grid lg:grid-cols-3 lg:gap-6 lg:mt-10">
            <div class="flex flex-col bg-white shadow-lg rounded-md" data-aos="fade-up"
            data-aos-anchor-placement="bottom-bottom" data-aos-duration="1000">
                <div class="bg-center bg-cover bg-no-repeat w-full h-imgs lg:h-60 rounded-md"
                    style="background-image: url('./images/buss3.jpg');"></div>
                <div class="flex flex-col gap-2 p-3 lg:gap-4 lg:p-6">
                    <h2 class="text-md lg:text-xl text-heading">First Class - Luxury Bus</h2>
                    <div class="flex flex-row gap-4 text-bb lg:text-xl">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-sm break-all lg:text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut
                        dignissimos consequatur
                        corporis saepe vero ex possimus placeat ab similique minima.</p>
                    <button
                        class="bg-inherit h-12 w-32 lg:h-12 lg:w-2/5 rounded-sm border border-redd text-dark lg:text-md">view
                        details</button>
                </div>
            </div>
            <div class="flex flex-col gap-3 bg-white shadow-md rounded-md" data-aos="fade-up"
            data-aos-anchor-placement="bottom-bottom" data-aos-duration="2000">
                <div class="bg-center bg-cover bg-no-repeat w-full h-imgs lg:h-60 rounded-md"
                    style="background-image: url('./images/buss2.jpg');"></div>
                <div class="flex flex-col gap-2 p-3 lg:gap-4 lg:p-6">
                    <h2 class="text-md lg:text-xl text-heading">Second Class - Semi-Luxury Bus</h2>
                    <div class="flex flex-row gap-4  text-bb lg:text-xl">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star text-bb"></i>
                    </div>
                    <p class="text-sm break-all lg:text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut
                        dignissimos consequatur
                        corporis saepe vero ex possimus placeat ab similique minima.</p>
                    <button
                        class="bg-inherit h-12 w-32 lg:h-12 lg:w-2/5 rounded-sm border border-redd text-dark lg:text-md">view
                        details</button>
                </div>
            </div>
            <div class="flex flex-col gap-3 bg-white shadow-md rounded-md" data-aos="fade-up"
            data-aos-anchor-placement="bottom-bottom" data-aos-duration="3000">
                <div class="bg-center bg-cover bg-no-repeat w-full h-imgs lg:h-60 rounded-md"
                    style="background-image: url('./images/buss2.jpg');"></div>
                <div class="flex flex-col gap-2 p-3 lg:gap-4 lg:p-6">
                    <h2 class="text-md lg:text-xl text-heading">Middle Class - Normal-Bus</h2>
                    <div class="flex flex-row gap-4  text-bb lg:text-xl">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star text-bb"></i>
                    </div>
                    <p class="text-sm lg:text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut
                        dignissimos consequatur
                        corporis saepe vero ex possimus placeat ab similique minima.</p>
                    <button
                        class="bg-inherit w-32 h-12 lg:h-12 lg:w-2/5 rounded-sm border border-redd text-dark lg:text-md">view
                        details</button>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSING US -->

    <section class="w-full h-auto p-8 lg:h-auto lg:p-28" id="choosing">
        <div class="flex flex-col gap-4 lg:flex lg:flex-row lg:gap-28 items-center lg:mx-normal">
            <div class="lg:w-4/5">
                <div class="flex flex-col gap-4 text-white">
                    <h2 class="mt-top text-redd">WHY CHOOSE US</h2>
                    <h1 class="text-lg lg:text-3xl text-heading">Travel with us, your satisfication is guaranteed!</h1>
                    <hr class="w-20 h-1 lg:w-20 lg:h-1 border-0 bg-redd">
                    <p class="lg:text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad cupiditate
                        temporibus
                        rerum? Saepe
                        unde enim
                        non, doloribus quod deserunt a.</p>
                </div>
                <div class="grid grid-cols-1 gap-4 lg:grid lg:grid-cols-2 lg:gap-12  mt-12 text-white">
                    <div class="flex flex-row gap-2">
                        <i
                            class="fa-solid fa-check text-lg w-12 h-10 p-2 rounded-md text-center text-white bg-redd"></i>
                        <div class="flex flex-col gap-1">
                            <h3 class="text-md text-heading">Easy Payment Process</h3>
                            <span class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui,
                                illo.</span>
                        </div>
                    </div>
                    <div class="flex flex-row gap-2">
                        <i
                            class="fa-solid fa-check text-lg w-12 h-10 p-2 rounded-md text-center text-white bg-redd"></i>
                        <div class="flex flex-col gap-1">
                            <h3 class="text-md  text-heading">Easy Payment Process</h3>
                            <span class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui,
                                illo.</span>
                        </div>
                    </div>
                    <div class="flex flex-row gap-2">
                        <i
                            class="fa-solid fa-check text-lg w-12 h-10 p-2 rounded-md text-center  text-white bg-redd"></i>
                        <div class="flex flex-col gap-1">
                            <h3 class="text-md  text-heading">Easy Payment Process</h3>
                            <span class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui,
                                illo.</span>
                        </div>
                    </div>
                    <div class="flex flex-row gap-2">
                        <i
                            class="fa-solid fa-check text-lg w-12 h-10 p-2 rounded-md text-center  text-white bg-redd"></i>
                        <div class="flex flex-col gap-1">
                            <h3 class="text-md  text-heading">Easy Payment Process</h3>
                            <span class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui,
                                illo.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-2/5 flex flex-col gap-8 mt-top">
                <div></div>
                <div
                    class="bg-white bottom-1 relative p-4 mt-small lg:mt-top lg:p-6 rounded-md border-l-4 border-redd flex flex-col gap-4">
                    <h2 class="text-md lg:text-xl text-heading">We provide Best service for you</h2>
                    <p class="break-all">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit.</p>
                    <a href="#" class="flex flex-row gap-8 items-center text-redd">
                        <span>View our services</span>
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- DESTINATIONS -->
    <section class="px-4 my-small lg:px-44 lg:my-10">
        <div class="flex flex-col gap-4 lg:gap-8">
            <h2 class="text-bb">DESTINATION</h2>
            <div class="flex flex-row justify-between items-center">
                <div class="flex flex-col gap-2">
                    <h2 class="text-lg lg:text-3xl text-heading">Most Popular Destinations</h2>
                    <hr class="w-20 h-1 lg:w-20 lg:h-1 border-0 bg-redd">
                </div>

                <a href=""
                    class="hidden lg:w-44 bg-inherit lg:p-3 text-center rounded-sm text-dark lg:border lg:border-redd">
                    <button>Other destination</button>
                </a>
            </div>
            <div class="grid grid-cols-1 gap-4 lg:grid lg:grid-cols-4 lg:gap-4">
                <div class="bg-cover bg-center lg:h-96 rounded-md text-white"
                    style="background: linear-gradient(#060d3d91, #0418368f), url('./images/desti.jpg');">
                    <div class="flex flex-col gap-3 p-6 lg:p-8 mt-dest">
                        <h2 class="text-md lg:text-xl">Dar-es-salaaam</h2>
                        <p class="lg:text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href=""
                            class="w-full p-3 lg:w-full bg-inherit lg:p-3 text-center rounded-sm text-white border border-white">
                            <button>Boook Now</button>
                        </a>
                    </div>
                </div>
                <div class="bg-cover bg-center lg:h-96 rounded-md text-white"
                    style="background: linear-gradient(#060d3d91, #0418368f), url('./images/lindi.webp');">
                    <div class="flex flex-col gap-3 p-6 lg:p-8 mt-dest">
                        <h2 class="text-md lg:text-xl">Lindi</h2>
                        <p class="lg:text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href=""
                            class="w-full lg:w-full bg-inherit p-3 lg:p-3 text-center rounded-sm text-white border border-white">
                            <button>Boook Now</button>
                        </a>
                    </div>
                </div>
                <div class="bg-cover bg-center lg:h-96 rounded-md text-white"
                    style="background: linear-gradient(#060d3d91, #0418368f), url('./images/arusha.jpg');">
                    <div class="flex flex-col gap-3 p-6 lg:p-8 mt-dest">
                        <h2 class="text-md lg:text-xl">Arusha</h2>
                        <p class="lg:text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href=""
                            class="w-full lg:w-full bg-inherit p-3 lg:p-3 text-center rounded-sm text-white border border-white">
                            <button>Boook Now</button>
                        </a>
                    </div>
                </div>
                <div class="bg-cover bg-center lg:h-96 rounded-md text-white"
                    style="background: linear-gradient(#060d3d91, #0418368f), url('./images/tanga.webp');">
                    <div class="flex flex-col p-6 gap-3 lg:p-8 mt-dest">
                        <h2 class="text-md lg:text-xl">Tanga</h2>
                        <p class="lg:text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href=""
                            class="w-full lg:w-full bg-inherit p-3 lg:p-3 text-center rounded-sm text-white border border-white">
                            <button>Boook Now</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STEPS -->

    <section class="px-4 mt-small lg:px-44 lg:mt-10 lg:mb-10">
        <div class="flex flex-col gap-3 my-extra">
            <h2 class="text-bb">STEPS</h2>
            <h2 class="text-lg lg:text-3xl text-heading">Follow these steps to Enjoy your Luxury Journey</h2>
            <hr class="w-20 h-1 lg:w-20 lg:h-1 border-0 bg-redd">
        </div>
        <div class="flex flex-col gap-6">
            <div class="grid grid-cols-1 gap-4 lg:grid lg:grid-cols-4 lg:gap-5">
                <div class="bg-redd p-6 lg:p-6 flex flex-col gap-3 rounded-md text-white">
                    <i
                        class="fa-solid fa-location-dot text-bb text-lg p-4 w-14 lg:text-2xl bg-white lg:w-14 lg:p-4 rounded-md text-center"></i>
                    <div class="flex flex-col gap-3">
                        <h3 class="lg:text-xl text-primary">Search for Your Route</h3>
                        <p class="text-sm lg:text-md">Enter your departure and destination cities, along with the travel
                            date, to view available buses.</p>
                    </div>
                </div>
                <div class="bg-dark p-6 lg:p-6 flex flex-col gap-3 rounded-md text-white">
                    <i
                        class="fa-solid fa-bus text-redd text-lg lg:text-2xl bg-white w-14 p-4 lg:w-14 lg:p-4 rounded-md text-center"></i>
                    <div class="flex flex-col gap-3">
                        <h3 class="lg:text-xl text-bgcolor">Choose Your Bus and Seat</h3>
                        <p class="text-sm lg:text-md">Browse through the list of buses,select your preferred bus. Then,
                            pick your seat from the seating chart.</p>
                    </div>
                </div>
                <div class="bg-heading p-6 lg:p-6 flex flex-col gap-3 rounded-md text-white">
                    <i
                        class="fa-solid fa-bus text-bb text-lg lg:text-2xl bg-white w-14 p-4 lg:w-14 lg:p-4 rounded-md text-center"></i>
                    <div class="flex flex-col gap-3">
                        <h3 class="lg:text-xl text-primary">Enter Passenger Details</h3>
                        <p class="text-sm lg:text-md">Provide the required information, such as name, contact details,
                            and any additional preferences.</p>
                    </div>
                </div>
                <div class="bg-bb p-6 lg:p-6 flex flex-col gap-3 rounded-md text-white">
                    <i
                        class="fa-solid fa-bus text-redd text-lg w-14 p-4 lg:text-2xl bg-white lg:w-14 lg:p-4 rounded-md text-center"></i>
                    <div class="flex flex-col gap-3">
                        <h3 class="lg:text-xl text-primary">Make Payment and Confirm</h3>
                        <p class="text-sm lg:text-md">Complete the payment using your preferred payment method. Once the
                            transaction is successful, you’ll receive a confirmation email or SMS with your ticket
                            details.</p>
                    </div>
                </div>
            </div>
    </section>


    <!-- FAQ'S -->

    <section class="px-4 mt-small lg:px-44 lg:mb-10 lg:mt-small">
        <div class="flex flex-col-reverse gap-5 lg:flex lg:flex-row lg:gap-20">
            <div class="flex flex-col gap-6 lg:w-1/2">
                <div class="faq-item mt-small">
                    <div class="flex flex-row justify-between cursor-pointer items-center question">
                        <h2 class="lg:text-xl text-heading">How can I book a bus ticket online?</h2>
                        <i class="fa-solid fa-arrow-down text-heading text-xl"></i>
                    </div>
                    <p class="answer lg:text-md" style="display: none;">To book a bus ticket online, simply visit our
                        website, select your departure and destination points, choose your travel date, and browse the
                        available buses. Select your preferred seat, provide passenger details, and proceed to payment.
                        Once the payment is successful, you’ll receive a confirmation email with your ticket details.

                    </p>
                    <hr class="lg:w-full lg:h-0.5 border-spacing-1.5 mt-2 border-heading">
                </div>
                <div class="faq-item">
                    <div class="flex flex-row justify-between cursor-pointer items-center question">
                        <h2 class="lg:text-xl text-heading">What payment methods do you accept?</h2>
                        <i class="fa-solid fa-arrow-down text-heading text-xl"></i>
                    </div>
                    <p class="answer lg:text-md" style="display: none;">We accept various payment methods, including
                        credit/debit cards, mobile money transfers, and online wallets. Specific options may vary
                        depending on your location and the platform you use.</p>
                    <hr class="lg:w-full lg:h-0.5 border-spacing-1.5 mt-2 border-heading">
                </div>
                <div class="faq-item">
                    <div class="flex flex-row justify-between cursor-pointer items-center question">
                        <h2 class="lg:text-xl text-heading">Can I cancel or modify my ticket after booking?</h2>
                        <i class="fa-solid fa-arrow-down text-heading text-xl"></i>
                    </div>
                    <p class="answer lg:text-md" style="display: none;">Yes, you can cancel or modify your ticket, but
                        conditions apply. Cancellation fees may vary based on how close to the travel date you are
                        canceling. For modifications, such as changing the travel date, please contact our support team
                        for assistance.</p>
                    <hr class="lg:w-full lg:h-0.5 border-spacing-1.5 mt-2 border-heading">
                </div>
                <div class="faq-item">
                    <div class="flex flex-row justify-between cursor-pointer items-center question">
                        <h2 class="lg:text-xl text-heading">What should I do if I lose my ticket?</h2>
                        <i class="fa-solid fa-arrow-down text-heading text-xl"></i>
                    </div>
                    <p class="answer lg:text-md" style="display: none;">If you lose your ticket, don’t worry! Log in to
                        your account on our website or app to access your ticket details. Alternatively, you can visit
                        one of our branches or contact customer support with your booking reference number for
                        assistance.</p>
                    <hr class="lg:w-full lg:h-0.5 border-spacing-1.5 mt-2 border-heading">
                </div>
                <div class="faq-item">
                    <div class="flex flex-row justify-between cursor-pointer items-center question">
                        <h2 class="lg:text-xl text-heading">Are there any discounts for group bookings or frequent
                            travelers?</h2>
                        <i class="fa-solid fa-arrow-down text-heading text-xl"></i>
                    </div>
                    <p class="answer lg:text-md" style="display: none;">Yes, we offer discounts for group bookings of 10 or
                        more passengers. Additionally, our loyalty program provides frequent travelers with exclusive
                        discounts and rewards. Check our promotions page or contact support for more details.</p>
                    <hr class="lg:w-full lg:h-0.5 border-spacing-1.5 mt-2 border-heading">
                </div>
            </div>
            <div class="w-full lg:w-1/2 flex flex-col gap-4">
                <h2 class="text-bb">QUESTIONS</h2>
                <h1 class="text-lg lg:text-3xl text-heading">Frequently Asked Questions.</h1>
                <hr class="w-20 h-1 lg:w-20 lg:h-1 border-0 bg-redd">
                <p class="break-all lg:text-md">Have questions? Our FAQ section has got you covered! Find quick answers to common
                    queries about booking, payments, cancellations, and more – all in one place to make your experience
                    seamless.
                </p>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="px-4 my-x lg:px-44 lg:mb-10 lg:mt-small">
        <div class="flex flex-col gap-3 my-extra mb-small">
            <h2 class="text-bb">CONTACTS</h2>
            <h2 class="text-lg lg:text-3xl text-heading">Feel Free to Contact us at any time</h2>
            <hr class="w-20 h-1 lg:w-20 lg:h-1 border-0 bg-redd">
        </div>
        <div class="lg:flex lg:flex-row lg:gap-20">
            <div class="lg:w-1/2">
                <form class="w-full flex flex-col gap-4 lg:gap-6">
                    <div class="flex flex-col gap-3">
                        <label class="text-black">First Name:</label>
                        <input type="text"
                            class="h-12 lg:h-14 rounded-md text-bb outline-none pl-4 bg-inherit border border-heading">
                    </div>
                    <div class="flex flex-col gap-3">
                        <label class="text-black">Your Email:</label>
                        <input type="mail"
                            class="h-12 lg:h-14 rounded-md text-bb outline-none pl-4 bg-inherit border border-heading">
                    </div>
                    <div class="flex flex-col gap-3">
                        <label class="text-black">Your Message:</label>
                        <textarea
                            class="h-36 lg:h-40 rounded-md resize-none text-bb outline-none pl-4 bg-inherit border border-heading"></textarea>
                    </div>
                    <button class="bg-inherit text-md border border-redd p-3 text-bb rounded-sm text-center w-44">Send
                        message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- MAP -->

    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2015720.5990600144!2d37.10284717763673!3d-9.337312149117963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18f2dc3b0a286425%3A0x84cdcc04c936ea93!2sLindi%20Region!5e0!3m2!1sen!2stz!4v1735078333169!5m2!1sen!2stz"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade" class="w-full lg:w-full lg:h-map"></iframe>
    <!-- footer -->

    <footer class="bg-dark w-full lg:text-center text-white">
        <div class="flex flex-col gap-1 text-center pt-5">
            <span class="">&copy; Copyright 2025.</span>
            <span class="">Designed and Developed By:</span>
            <span class="text-bgcolor font-bold">Said Hassan</span>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const faqItems = document.querySelectorAll(".faq-item");

            faqItems.forEach((item) => {
                const question = item.querySelector(".question");
                const answer = item.querySelector(".answer");
                const icon = question.querySelector("i");

                // Check if essential elements exist
                if (!question || !answer) {
                    console.warn("Missing required elements in FAQ item.");
                    return;
                }

                question.addEventListener("click", () => {
                    const isVisible = answer.style.display === "block";

                    // Close all open answers
                    faqItems.forEach((i) => {
                        const innerAnswer = i.querySelector(".answer");
                        const innerIcon = i.querySelector(".question i");

                        if (innerAnswer) {
                            innerAnswer.style.display = "none";
                            innerAnswer.style.maxHeight = null;
                        }
                        if (innerIcon) {
                            innerIcon.classList.remove("rotate");
                        }
                    });

                    // Toggle the clicked FAQ item
                    if (!isVisible) {
                        answer.style.display = "block";
                        answer.style.maxHeight = `${answer.scrollHeight}px`;
                        if (icon) {
                            icon.classList.add("rotate");
                        }
                    } else {
                        answer.style.maxHeight = null;
                        answer.style.display = "none";
                    }
                });
            });
        });
    </script>

</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</html>