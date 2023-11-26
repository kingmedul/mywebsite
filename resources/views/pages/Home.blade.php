@extends('Layouts.app')
@section('home')
    <section class="bg-white dark:text-gray-100">
        <div class="container flex flex-col justify-center p-6 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-evenly items-center">
            <div class="flex items-center justify-center p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                <img src="https://scontent.fdac80-1.fna.fbcdn.net/v/t39.30808-6/274982986_125810026657785_825473982754520498_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHEvopuG8KP6XKaQiBQtzjloP5SuyBe0F6g_lK7IF7QXkVPjzANjWxIEsBIBIygPlXS7w1_7U58eDBF9WR6E_f9&_nc_ohc=1ZQZAaXtWMwAX8_9v8u&_nc_ht=scontent.fdac80-1.fna&oh=00_AfBLqEBGgFIYrS39h3cXfFu2weDRzqnQZXkK8MLOKU47cA&oe=656798DE" alt="" class="object-contain h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
            </div>
            <div class="flex flex-col justify-center p-6 text-center rounded-sm lg:max-w-md xl:max-w-lg lg:text-left">
                <h1 class="text-5xl font-bold leadi sm:text-6xl text-slate-700">Hi, I'm <br>
                    <span class="text-violet-700">Saiful</span> Islam
                </h1>
                <p class="mt-6 mb-2 text-lg sm:mb-3 text-slate-400">Php web devoloper and graphic designer
                    <br class="hidden md:inline lg:hidden">Who turns your dreams into reality.
                </p>
                <p class="mb-8 text-sm text-slate-400">
                    I'm a Versatile web developer, proficient programmer, and creative graphic designer, I bring a unique blend of technical expertise and design flair to every project. With a passion for crafting seamless user experiences and eye-catching visuals, I specialize in bringing digital ideas to life. Let's collaborate to turn your vision into a captivating online reality.
                </p>
                <div class="flex flex-col space-y-4 sm:items-center sm:justify-center sm:flex-row sm:space-y-0 sm:space-x-4 lg:justify-start">
                    <a rel="noopener noreferrer" href="#" class="px-8 py-3 text-lg font-semibold rounded dark:bg-violet-700 dark:text-white hover:bg-transparent hover:text-violet-700 border border-violet-700">Download CV</a>
                </div>
            </div>
        </div>
    </section>
@endsection