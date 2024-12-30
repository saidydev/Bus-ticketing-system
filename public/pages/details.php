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
    <nav class="px-4 pt-4 h-20 lg:pt-4 lg:block lg:px-24 bg-bb" style="height: 70px;">
        <div
            class="flex flex-col gap-4 lg:flex lg:flex-row lg:justify-between lg:items-center lg:p-5 text-white text-md">
            <div class="lg:w-1/4">
                BesaLuxuryCoach
            </div>
        </div>
    </nav>
    </section>

    <section class="m-small lg:m-small">
        <div class="flex flex-col gap-4 text-white">
            <h2 class="mt-4 text-redd">DEATAILS</h2>
            <h1 class="text-lg lg:text-3xl text-heading">Fill your personal details </h1>
            <hr class="w-20 h-1 lg:w-20 lg:h-1 border-0 bg-redd">
        </div>

        <div class="lg:flex lg:flex-row lg:gap-4">
            <div class="w-full mt-extra lg:w-1/2">
                <form class="grid grid-cols-1 gap-4 lg:grid lg:grid-cols-2 lg:gap-5">
                    <input type="text" placeholder="Full name" class="border h-12 lg:h-14 rounded-md lg:text-md outline-none pl-4">
                    <input type="number" placeholder="Phone number"  class="border h-12 lg:h-14 rounded-md lg:text-md outline-none pl-4">
                    <select name="gender"  class="border h-12 lg:h-14 rounded-md lg:text-md outline-none pl-4">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                    <div></div>
                    <a href='#'>
                        <button class='btn p-2 bg-inherit border border-redd text-dark text-md  hover:bg-heading hover:border hover:border-heading hover:text-white transition ease-in-out duration-300' id="btn">Book Now</button>
                    </a>
                </form>
            </div>
        </div>
    </section>


    <footer class="bg-dark w-full lg:text-center text-white">
        <div class="flex flex-col gap-1 text-center pt-5">
            <span class="">&copy; Copyright 2025.</span>
            <span class="">Designed and Developed By:</span>
            <span class="text-bgcolor font-bold">Said Hassan</span>
        </div>
    </footer>
</body>

<script>
    const choosenSeat = document.getElementById('choosen');
    const button = document.getElementById("btn");
    button.addEventListener('click',()=>{
        const baba = document.getElementById("choosen");
    const text = baba.textContent;
    console.log(text);
    })

    // Select all seat elements
    const seats = document.querySelectorAll('.seat');

    seats.forEach((seat) => {
        seat.addEventListener('click', () => {
            // Reset all seats to default green color
            seats.forEach((s) => {
                s.style.backgroundColor = '#16a34a'; // Default green color
                s.style.color = 'white'; // Reset text color

            });

            // Set the clicked seat to yellow
            seat.style.backgroundColor = '#facc15';


            const seatNumber = seat.textContent.trim();
            choosenSeat.textContent = seatNumber;

        });
    });
</script>

</html>