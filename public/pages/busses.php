<?php
session_start();
include "../backend/connection.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../fontawesome-free-6.5.1-web/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400..700&display=swap" rel="stylesheet">
    <title>Besa Luxury Coach</title>
</head>

<body class="bg-white font-paragraph">
    <!-- BANNER SECTION -->
    <nav class="hidden px-4 pt-4 lg:block lg:px-24 bg-bb">
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
    </section>

    <section class="m-small lg:m-small">
        <div class="flex flex-col gap-4 text-white">
            <h2 class="mt-4 text-redd">BUSSES</h2>
            <h1 class="text-lg lg:text-3xl text-heading">Available Busses for your route</h1>
            <hr class="w-20 h-1 lg:w-20 lg:h-1 border-0 bg-redd">
        </div>

        <div class="my-4 rounded-lg grid grid-cols-1 gap-4 lg:grid lg:grid-cols-2 lg:gap-4">


            <?php

            $sql = "SELECT * FROM routes INNER JOIN busses ON routes.route_id = busses.route_id WHERE starting_point ='$_SESSION[startingpoint]' AND end_point ='$_SESSION[endpoint]'";
            $query = mysqli_query($conn, $sql);
            if (mysqli_num_rows($query) > 0) {
                while ($row = mysqli_fetch_assoc($query)) {
                    echo " 
                    
                      <div class='lg:flex lg:flex-col lg:gap-4 border p-4 rounded-md bg-white'>
                <div class='flex flex-col gap-4 lg:grid lg:grid-cols-2 lg:gap-4'>
                    <div class='flex flex-col gap-3 lg:flex lg:flex-col lg:gap-4'>
                        <div class='flex flex-row gap-3 items-center'>
                            <i class='fa-solid fa-bus text-redd'></i>
                            <h2 class='text-md lg:text-md font-bold text-blue-700 leading-tight font-heading '>{$row['bus_name']}</h2>
                        </div>
                        <div class='flex flex-row gap-3 items-center'>
                            <i class='fa-solid fa-circle text-heading text-sm'></i>
                            <h2>{$row['bus_number']}</h2>
                        </div>
                        <div class='flex flex-row gap-3 items-center'>
                            <i class='fa-solid fa-circle text-heading text-sm'></i>
                            <h2>{$row['bus_type']}</h2>
                        </div>
                    </div>
                    <div class='flex flex-col gap-3 lg:flex lg:flex-col lg:gap-4'>
                        <div class='flex flex-row gap-3 items-center'>
                            <i class='fa-solid fa-route text-heading'></i>
                            <h2 class='text-md lg:text-md font-bold text-dark leading-tight font-heading'>{$row['starting_point']} to {$row['end_point']}</h2>
                        </div>
                        <div class='flex flex-row gap-3 items-center'>
                            <i class='fas fa-compass text-heading'></i>
                            <h2>{$row['distance']}</h2>
                        </div>
                        <div class='flex flex-row gap-3 items-center'>
                            <i class='fa-solid fa-clock text-heading'></i>
                            <h2>{$row['time']}</h2>
                        </div>
                    </div>
                </div>
                <div class='grid grid-cols-2 gap-3 mt-2 lg:flex lg:flex-row lg:gap-3 lg:justify-between'>
                    <div class='flex flex-row gap-3 items-center'>
                        <i class='fa-solid fa-camera text-redd text-sm'></i>
                        <h2 class='lg:text-md text-heading'>Camera.</h2>
                    </div>
                    <div class='flex flex-row gap-3 items-center'>
                        <i class='fa-solid fa-tv text-redd text-sm'></i>
                        <h2 class='lg:text-md text-heading'>TV.</h2>
                    </div>
                    <div class='flex flex-row gap-3 items-center'>
                        <i class='fa-solid fa-route  text-redd'></i>
                        <h2 class='lg:text-md text-heading'>Refreshments.</h2>
                    </div>
                    <div class='flex flex-row gap-3 items-center'>
                        <i class='fas fa-snowflake  text-redd'></i>
                        <h2 class='lg:text-md text-heading'>AC.</h2>
                    </div>
                </div>

                <div class='flex flex-row justify-between mt-4 items-center'>
                <a href='seats.php?busid={$row['bus_id']}'>
                    <button class='p-2 bg-inherit border border-redd text-dark text-md  hover:bg-heading hover:border hover:border-heading hover:text-white transition ease-in-out duration-300'>Select seat</button>
                </a>
                    <h2 class='lg:text-md font-bold text-heading'>{$row['amount']}</h2>
                </div>
            </div>     
                    ";
                }
            }
            ?>
    </section>


    <footer class="bg-dark w-full lg:text-center text-white">
        <div class="flex flex-col gap-1 text-center pt-5">
            <span class="">&copy; Copyright 2025.</span>
            <span class="">Designed and Developed By:</span>
            <span class="text-bgcolor font-bold">Said Hassan</span>
        </div>
    </footer>
</body>

</html>