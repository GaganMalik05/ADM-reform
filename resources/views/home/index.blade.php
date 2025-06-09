<!doctype html>
<html class="h-full">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen flex flex-col">
    <header>
        <div class="flex bg-emerald-700 justify-end pr-15">
            <a class="mr-2">Dark</a>
            <a class="mr-2">|</a>
            <a class="mr-2">A+</a>
            <a class="mr-2">|</a>
            <a class="mr-2">A</a>
            <a class="mr-2">|</a>
            <a class="mr-2">A-</a>
        </div>
        <div class="flex justify-around p-3.5 bg-emerald-700">
            <img src="{{ asset('images/emblem.svg.webp') }}" alt="Emblem of India" class="emblem">
            <div class="flex flex-col ">
                <h1 class="text-3xl text-blue-950 font-bold">Department of Administrative Reforms</h1>
                <h1 class="text-white font-bold text-2xl">Government of Aruanachal Pradesh</h1>
            </div>
            <img src="{{ asset('images/stateLogo.svg.png') }}" alt="Emblem of Arunachal Pradesh" class="stateLogo">
        </div>
        <nav class="flex bg-blue-500 p-2.5 justify-center space-x-16">
            <ul class="flex space-x-16 group relative">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">About Us<i class=""></i></a>

                    <ul class="absolute left-0 hidden group-hover:block bg-white text-black mt-2 w-48 rounded shadow-lg z-10">
                        <li><a>Profile</a></li>
                        <li><a>WhoIsWho</a></li>
                        <li><a>Organizational Structure</a></li>
                    </ul>

                </li>
                <li>
                    <a href="#">Act & Rules</a>

                    {{-- <div class="">
                        <ul>
                            <li><a>Acts</a></li>
                            <li><a>Rules</a></li>
                            <li><a>Recruitment Rules</a></li>
                        </ul>
                    </div> --}}
                </li>
                <li>
                    <a href="#">Circulars</a>

                    {{-- <div class="">
                        <ul>
                            <li><a>Office Memorandums</a></li>
                            <li><a>Notifications</a></li>
                            <li><a>Orders</a></li>
                        </ul>
                    </div> --}}
                </li>
                <li>
                    <a href="#">RTI</a>

                    {{-- <div class="">
                        <ul>
                            <li><a>RTI Act</a></li>
                            <li><a>APRTI Rules</a></li>
                            <li><a>APRTI Appeal Rules</a></li>
                            <li><a>Circulars & Notifications</a></li>
                        </ul>
                    </div> --}}
                </li>
                <li>
                    <a href="#">Attached Offices</a>

                    {{-- <div class="">
                        <ul>
                            <li><a>APPSC<i class=""></a></li>
                            <div >
                                <ul>
                                    <li><a>Regulations</a></li>
                                    <li><a>Limitations of Functions</a></li>
                                    <li><a>Orders</a></li>
                                </ul>
                            </div>
                            <li><a>Arunachal Pradesh Information Commision<i class=""></a></li>
                            <div >
                                <ul>
                                    <li><a>Chief Information Commisione</a></li>
                                    <li><a>Information Commisioner</a></li>
                                    <li><a>SIC Website</a></li>
                                </ul>
                            </div>
                        </ul>
                    </div> --}}
                </li>
                <li>
                    <a href="#">Publications</a>
                </li>
                <li>
                    <a href="#">Feedback</a>
                </li>
            </ul>
            <a href="#"><button>Login</button></a>
        </nav>
    </header>

    <main class="flex-grow">
        <p></p>
    </main>

    <footer class="flex bg-blue-700 p-2 text-white justify-center">
        <div class="bg-white mr-3">
            <img src="{{ asset('images/NIC_logo.svg.png') }}" alt="NIC Logo" class="nicLogo p-0.5">
        </div>
        <div>
            <div>
                <a href="#"
                    class="mr-2 hover:text-amber-300 transition-all duration-300 ease-in-out text-lg;">Home</a>
                <a href="#" class="mr-2">|</a>
                <a href="#"
                    class="mr-2 hover:text-amber-300 transition-all duration-300 ease-in-out text-lg;">Disclaimer</a>
            </div>
            <a>Copyright &copy Department of Administrative Reforms, Government of Arunachal Pradesh. Site Designed by
                National Informatics Centre, Arunachal Pradesh State Centre</a>
        </div>
    </footer>
</body>

</html>
