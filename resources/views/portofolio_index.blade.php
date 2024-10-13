@extends('layout_portofolio')
@section('content')
    <section class="bg-gray-200" id="hero-section">



        <div class="w-11/12 md:px-24 md:container flex items-center text-center h-screen mx-auto">
            <div>
                <h2 class="text-5xl md:text-8xl font-bold" data-aos="fade-left">
                    WELCOME TO MY PORTOFOLIO
                </h2>
                <p class="py-8 pb-16 text-2xl font-semibold text-gray-500" data-aos="fade-right">
                    Explore my extensive portfolio to see the projects I have worked on
                    and the skills I have developed over the years. Click the button
                    below to get view.
                </p>
                <button
                    class="text-2xl font-semibold border-4 shadow-2xl bg-gray-900 border-cyan-400 text-white px-24 py-4 rounded-3xl hover:bg-gray-950"
                    data-aos="zoom-in">
                    <a href="portofolio.html"> Click Here</a>
                </button>
            </div>
        </div>

    </section>
    <hr class="border-gray-500" />
    <style>
        body {
            overflow-x: hidden;
        }

        .w-600 {
            width: 400px;
        }

        .h-400 {
            height: 600px;
        }

        .img-logo {
            width: 100px;
            height: auto;
        }

        .img-porto {
            width: auto;
            height: 180px;
        }
    </style>
    <section class="bg-gray-200 py-12" id="profile">
        <div data-aos="zoom-in" class="py-12 pb-36">
            <h3 class="text-5xl text-center font-bold">PROFILE</h3>
            <p class="text-semibold text-2xl text-gray-500 text-center pt-4 font-semibold">
                Take a look at the contents of my interesting profile.
            </p>
        </div>
        <div class="flex w-11/12 md:px-5 md:container mx-auto items-center">
            <div class="flex justify-between" data-aos="fade-right">
                <div class="w-3/4">
                    <h3 class="text-3xl md:text-6xl font-bold text-cyan-400">
                        Hii, I am
                    </h3>
                    <h3 class="text-3xl md:text-6xl font-bold text-gray-900 py-6 md:py-12">
                        MUHAMMAD SAIFUL AMRI
                    </h3>
                    <h3 class="text-xl md:text-3xl font-bold text-gray-500 w-3/4">
                        I'm a web developer specializing in Laravel, WordPress, MySQL and
                        Tailwind. Explore my portfolio to see how I can bring your ideas
                        to life.
                    </h3>
                </div>
                <div class="lg:w-2/4 w-1/2 flex justify-end md:justify-start">
                    <img src="{{ asset('foto/fotokampus.png') }}" alt="profile" class="object-contain lg:w-600 h-400 ml-24"
                        data-aos="fade-left" />
                </div>
            </div>
        </div>
        <div class="w-11/12 md:container mx-auto md:px-5">
            <div>
                <div class="pb-6 md:py-8 md:pt-20" data-aos="zoom-in">
                    <h3
                        class="text-4xl font-bold border-4 text-center border-cyan-400 bg-gray-900 rounded-3xl mx-auto md:px-60 py-6 text-white shadow-md">
                        MY SKILL
                    </h3>
                </div>
            </div>
            <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-6 md:container w-11/12 mx-auto py-28" data-aos="zoom-in">
                @foreach ($skills as $skill)
                    <div
                        class="border-4 shadow-2xl bg-white border-cyan-400 py-4 px-4 rounded-3xl flex items-center justify-center">
                        <img src="{{ \Storage::url($skill->image) }}" alt="{{ $skill->name }}" class="w-44 h-44 mx-auto" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <hr class="border-gray-500" />
    <section class="bg-gray-200 py-12" id="Portofolio">
        <div class="py-12 w-11/12 md:px-5 md:container mx-auto">
            <div data-aos="zoom-in">
                <h3 class="text-5xl text-center font-bold">PORTOFOLIO</h3>
                <p class="text-semibold text-2xl text-gray-500 text-center py-6 pb-36">
                    Come see the portfolio of projects I created.
                </p>
            </div>
            <div class="grid lg:grid-cols-4 gap-8 md:grid-cols-2 md:py-8">
                @foreach ($portofolios as $portofolio)
                    <a href="{{ $portofolio->link }}"
                        class="border-4 shadow-2xl border-cyan-400 bg-gray-900 py-4 px-6 rounded-3xl pt-8"
                        data-aos="fade-right">
                        <img src="{{ \Storage::url($portofolio->image) }} " alt="{{ $portofolio->title }}"
                            class="rounded-2xl img-porto border-4 border-cyan-400 mx-auto" />
                        <h4 class="text-2xl font-semibold text-gray-200 py-2 text-center">
                            {{ $portofolio->title }}
                        </h4>
                        <h5 class="text-2xl font-bold text-cyan-400 py-2 text-center">
                            {{ $portofolio->use }}
                        </h5>
                    </a>
                @endforeach

            </div>
        </div>
    </section>
    <hr class="border-gray-500" />
    <section class="bg-gray-200 py-12" id="contact">
        <div class="w-11/12 md:container md:px-5 mx-auto">
            <div>
                <div data-aos="zoom-in" class="py-12 pb-12">
                    <h3 class="text-5xl text-center font-bold">CONTACT</h3>
                    <p class="text-semibold text-2xl text-gray-500 text-center pt-4 font-semibold">
                        Below are my contacts and social media where you can be contacted.
                    </p>
                </div>
            </div>
            <div class="w-11/12 mx-auto md:container">
                <div class="py-2">
                    <ul class="flex justify-start bg-gray-900 text-white md:w-3/6 py-6 px-8 mx-auto rounded-3xl font-bold text-xl border-4 border-cyan-400"
                        data-aos="zoom-in">
                        <li class="flex items-center">
                            <img src="{{ asset('foto/whatsapp used icon.png') }}" alt="whatsapp" class="img-logo px-4" />
                        </li>
                        <li class="pr-4">
                            <a href="https://wa.me/628985956082" class="">WHATSAPP</a><br />
                            <a href="https://wa.me/628985956082" class="text-cyan-400 text-center">08985956082</a>
                        </li>
                    </ul>
                </div>
                <div class="py-2">
                    <ul class="flex justify-start bg-gray-900 text-white md:w-3/6 py-6 px-8 mx-auto rounded-3xl font-bold text-xl border-4 border-cyan-400"
                        data-aos="zoom-in">
                        <li class="flex justify-start">
                            <img src="{{ asset('foto/Instagram New 2022 Line.png') }}" alt="instagram"
                                class="img-logo px-4" />
                        </li>
                        <li class="pr-4">
                            <a href="https://www.instagram.com/ipoel_amri12/" class="">INSTAGRAM</a><br />
                            <a href="https://www.instagram.com/ipoel_amri12/"
                                class="text-cyan-400 text-center">@ipoel_amri12</a>
                        </li>
                    </ul>
                </div>
                <div class="py-2">
                    <ul class="flex justify-start bg-gray-900 text-white md:w-3/6 py-6 px-8 mx-auto rounded-3xl font-bold text-xl border-4 border-cyan-400"
                        data-aos="zoom-in">
                        <li class="flex justify-start">
                            <img src="{{ asset('foto/GMail New Icon.png') }}" alt="gmail" class="img-logo px-4" />
                        </li>
                        <li class="">
                            <a href="mailto:ipoelamri94@gmail.com" class="">EMAIL</a><br />
                            <a href="mailto:ipoelamri94@gmail.com"
                                class="text-cyan-400 text-lg md:text-xl">ipoelamri94@gmail.com</a>
                        </li>
                    </ul>
                </div>
                <div class="py-2">
                    <ul class="flex justify-start bg-gray-900 text-white md:w-3/6 py-6 px-8 mx-auto rounded-3xl font-bold text-xl border-4 border-cyan-400"
                        data-aos="zoom-in">
                        <li class="flex items-center">
                            <img src="{{ asset('foto/GitHub Circle Icon.png') }}" alt="github"
                                class="img-logo px-4" />
                        </li>
                        <li class="pr-4">
                            <a href="https://github.com/ipoelamri" class="">GITHUB</a>
                            <br />
                            <a href="https://github.com/ipoelamri" class="text-cyan-400 text-center">IPOELAMRI</a>
                        </li>
                    </ul>
                </div>
                <!-- <div
                                                                                                                                                                                                        class="bg-gray-900 text-white py-12 px-6 rounded-3xl text-center font-bold text-2xl border-4 border-cyan-400"
                                                                                                                                                                                                        data-aos="zoom-in"
                                                                                                                                                                                                      >
                                                                                                                                                                                                        <img
                                                                                                                                                                                                          src="view/images/Instagram New 2022 Line.png"
                                                                                                                                                                                                          alt="instagram"
                                                                                                                                                                                                          class="img-logo mx-auto pb-4"
                                                                                                                                                                                                        />
                                                                                                                                                                                                        <a href="https://www.instagram.com/ipoel_amri12/" class=""
                                                                                                                                                                                                          >INSTAGRAM</a
                                                                                                                                                                                                        ><br />
                                                                                                                                                                                                        <a
                                                                                                                                                                                                          href="https://www.instagram.com/ipoel_amri12/"
                                                                                                                                                                                                          class="text-cyan-400"
                                                                                                                                                                                                          >@ipoel_amri12</a
                                                                                                                                                                                                        >
                                                                                                                                                                                                      </div>
                                                                                                                                                                                                      <div
                                                                                                                                                                                                        class="bg-gray-900 text-white py-12 px-2 rounded-3xl text-center font-bold text-2xl border-4 border-cyan-400"
                                                                                                                                                                                                        data-aos="zoom-in"
                                                                                                                                                                                                      >
                                                                                                                                                                                                        <img
                                                                                                                                                                                                          src="view/images/GMail New Icon.png"
                                                                                                                                                                                                          alt="gmail"
                                                                                                                                                                                                          class="img-logo mx-auto pb-4"
                                                                                                                                                                                                        />
                                                                                                                                                                                                        <a href="mailto:ipoelamri94@gmail.com" class="">EMAIL</a><br />
                                                                                                                                                                                                        <a href="mailto:ipoelamri94@gmail.com" class="text-cyan-400 text-md"
                                                                                                                                                                                                          >ipoelamri94@gmail.com</a
                                                                                                                                                                                                        >
                                                                                                                                                                                                      </div>
                                                                                                                                                                                                      <div
                                                                                                                                                                                                        class="bg-gray-900 text-white py-12 px-6 rounded-3xl text-center font-bold text-2xl border-4 border-cyan-400"
                                                                                                                                                                                                        data-aos="zoom-in"
                                                                                                                                                                                                      >
                                                                                                                                                                                                        <img
                                                                                                                                                                                                          src="view/images/GitHub Circle Icon.png"
                                                                                                                                                                                                          alt="github"
                                                                                                                                                                                                          class="img-logo mx-auto pb-4"
                                                                                                                                                                                                        />
                                                                                                                                                                                                        <a href="https://github.com/ipoelamri" class="">GITHUB</a>
                                                                                                                                                                                                        <br />
                                                                                                                                                                                                        <a href="https://github.com/ipoelamri" class="text-cyan-400"
                                                                                                                                                                                                          >IPOELAMRI</a
                                                                                                                                                                                                        >
                                                                                                                                                                                                      </div> -->
            </div>
        </div>
    </section>
@endsection
