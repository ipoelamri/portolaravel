@extends('layout_admin')
@section('content')
    <section class="bg-gray-200 py-12" id="profile">
        <div data-aos="zoom-in" class="py-12">
            <h3 class="text-5xl text-center font-bold">PROFILE</h3>
            <p class="text-semibold text-2xl text-gray-500 text-center pt-4 font-semibold">
                Take a look at the contents of my interesting profile.
            </p>
        </div>
        <div class ="flex justify-center">
            <button class = "border-4 bg-gray-900 py-4 text-white font-semibold px-4 items-center rounded-2xl ">
                <a href={{ route('admin.createSkill') }}>Tambahkan Skill</a>
            </button>
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
                    <h3 class="sm:text-md md:text-xl lg:text-3xl font-bold text-gray-500 w-3/4">
                        I'm a web developer specializing in Laravel, WordPress, MySQL and
                        Tailwind. Explore my portfolio to see how I can bring your ideas
                        to life.
                    </h3>
                </div>
                <div class="lg:w-1/5 w-1/2 flex justify-start md:justify-start lg:mr-36">
                    <img src="{{ asset('foto/fotokampus.png') }}" alt="profile" class="object-contain lg:w-600 h-400"
                        data-aos="fade-left" />
                </div>
            </div>
        </div>
        <div class="w-11/12 md:container mx-auto md:px-5 py-4">
            <div>
                <div class="pb-2 md:py-8 md:pt-20" data-aos="zoom-in">
                    <h3
                        class="text-4xl font-bold border-4 text-center border-cyan-400 bg-gray-900 rounded-3xl mx-auto md:px-60 py-6 text-white shadow-md">
                        MY SKILL
                    </h3>
                </div>
            </div>
            <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-6 md:container w-11/12 mx-auto py-14" data-aos="zoom-in">
                @foreach ($skills as $skill)
                    <div class ="space-y-4">
                        <div
                            class="border-4 shadow-2xl bg-white border-cyan-400 py-4 px-4 rounded-3xl flex justify-center ">
                            <img src="{{ \Storage::url($skill->image) }}" alt="{{ $skill->name }}"
                                class="w-44 h-44 mx-auto" />
                        </div>


                        <div class ="flex justify-center py-4 border-4 bg-gray-900 border-cyan-400 rounded-3xl">
                            <form action={{ route('admin.destroySkill', $skill->id) }} method = "post"
                                onclick= "return confirm('Yakin file ini dihapus?')">
                                @csrf
                                @method('delete')
                                <button
                                    class ="py-4 px-6 rounded-3xl bg-red-400 border-4 shadow-2xl border-cyan-400 text-white hover:bg-red-800">
                                    X
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
