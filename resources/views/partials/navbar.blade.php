<nav class="bg-green-600 text-white shadow-lg">

    <div class="container mx-auto px-5 py-4 flex justify-between items-center">


        <!-- Logo -->
        <a href="{{ route('home') }}"
           class="font-bold text-xl">

            Tuntunan Tata Cara Sholat

        </a>


        <!-- Menu -->
        <div class="flex gap-6 text-sm">


            <a href="{{ route('home') }}"
               class="hover:text-green-200">
                Home
            </a>


            <a href="{{ route('dewasa') }}"
               class="hover:text-green-200">
                Dewasa
            </a>


            <a href="{{ route('anak') }}"
               class="hover:text-green-200">
                Anak
            </a>


            <a href="{{ route('gerakan.index', 'dewasa') }}"
               class="hover:text-green-200">
                Gerakan
            </a>


        </div>


    </div>

</nav>