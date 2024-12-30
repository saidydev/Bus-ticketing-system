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
            <h2 class="mt-4 text-redd">SEATS</h2>
            <h1 class="text-lg lg:text-3xl text-heading">Choose your preffered seat for your journey</h1>
            <hr class="w-20 h-1 lg:w-20 lg:h-1 border-0 bg-redd">
        </div>

        <div class="flex flex-col gap-4 lg:flex lg:flex-row lg:gap-10">
            <div class="flex mt-extra lg:mt-0 flex-col gap-8 lg:w-1/4 mb-extra">
                <div class="grid grid-cols-1 gap-3 lg:grid lg:grid-cols-3 lg:gap-4 lg:mt-extra">
                    <div class="flex flex-row gap-4 items-center">
                        <div class="w-14 h-5 bg-redd"></div>
                        <span>Booked</span>
                    </div>
                    <div class="flex flex-row gap-4 items-center">
                        <div class="w-14 h-5 bg-yellow-400"></div>
                        <span>Selected</span>
                    </div>
                    <div class="flex flex-row gap-4 items-center">
                        <div class="w-14 h-5 bg-green-600"></div>
                        <span>Available</span>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-8 cursor-pointer">
                    <div class="flex flex-col gap-4">
                        <div class="flex gap-4">
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1 text-white">1</h1>
                            </div>
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">2</h1>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">5</h1>
                            </div>
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">6</h1>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">9</h1>
                            </div>
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">10</h1>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">13</h1>
                            </div>
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">14</h1>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">17</h1>
                            </div>
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">18</h1>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">21</h1>
                            </div>
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">22</h1>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">25</h1>
                            </div>
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">26</h1>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">29</h1>
                            </div>
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">30</h1>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">33</h1>
                            </div>
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">34</h1>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">37</h1>
                            </div>
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">38</h1>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">41</h1>
                            </div>
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">42</h1>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">45</h1>
                            </div>
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">46</h1>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">49</h1>
                            </div>
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">50</h1>
                            </div>
                        </div>
                    </div>
                    <div></div>
                    <div class="flex flex-col gap-4">
                        <div class="flex gap-4">
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">3</h1>
                            </div>
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">4</h1>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">7</h1>
                            </div>
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">8</h1>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">11</h1>
                            </div>
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">12</h1>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">15</h1>
                            </div>
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">16</h1>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">19</h1>
                            </div>
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">20</h1>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">23</h1>
                            </div>
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">24</h1>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">27</h1>
                            </div>
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">28</h1>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">31</h1>
                            </div>
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">32</h1>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">35</h1>
                            </div>
                            <div class="w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">36</h1>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">39</h1>
                            </div>
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">40</h1>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">43</h1>
                            </div>
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">44</h1>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">47</h1>
                            </div>
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">48</h1>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">51</h1>
                            </div>
                            <div class="seat w-12 rounded-md h-8 bg-green-600">
                                <h1 class="text-center justify-center items-center mt-1  text-white">52</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-4 cursor-pointer">
                    <div class="flex gap-4">
                        <div class="seat w-12 rounded-md h-8 bg-green-600">
                            <h1 class="text-center justify-center items-center mt-1  text-white">53</h1>
                        </div>
                        <div class="seat w-12 rounded-md h-8 bg-green-600">
                            <h1 class="text-center justify-center items-center mt-1  text-white">54</h1>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="seat w-12 rounded-md h-8 bg-green-600">
                            <h1 class="text-center justify-center items-center mt-1  text-white">55</h1>
                        </div>
                        <div class="seat w-12 rounded-md h-8 bg-green-600">
                            <h1 class="text-center justify-center items-center mt-1  text-white">56</h1>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="seat w-12 rounded-md h-8 bg-green-600">
                            <h1 class="text-center justify-center items-center mt-1  text-white">57</h1>
                        </div>
                        <div class="seat w-12 rounded-md h-8 bg-green-600">
                            <h1 class="text-center justify-center items-center mt-1  text-white">58</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:mt-extra flex flex-col gap-4">
                <?php
                $bus = $_GET['busid'];

                $sql = "SELECT * FROM routes INNER JOIN busses ON routes.route_id = busses.route_id WHERE bus_id ='$bus'";
                $query = mysqli_query($conn, $sql);
                if (mysqli_num_rows($query) > 0) {
                    while ($row = mysqli_fetch_assoc($query)) {

                        echo "<div class='lg:mb-extra'>
                    <span>Bus Number:</span>
                    <span class='text-heading font-semibold'>{$row['bus_number']}</span>
                </div>
                 <div class='lg:mb-extra'>
                    <span>Travel route:</span>
                    <span class='text-heading font-semibold'>{$row['starting_point']} to {$row['end_point']}</span>
                </div>
                <div class='lg:mb-extra'>
                    <span>Time:</span>
                    <span class='text-heading font-semibold'>{$row['time']}</span>
                </div>
                
                ";
                    }
                }

                ?>

                <form class="flex flex-col gap-3">
                <div class="flex flex-flex gap-3 required:">
                    <span class='lg:mb-extra'>Selected seat:</span>
                    <span class='choosen outline-none text-heading font-semibold' id="choosen"></span>
                </div>

                <a href='#'>
                    <button class='btn p-2 bg-inherit border border-redd text-dark text-md  hover:bg-heading hover:border hover:border-heading hover:text-white transition ease-in-out duration-300' id="btn">Continue</button>
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