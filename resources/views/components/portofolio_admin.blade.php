@extends('layout_admin')

@section('content')
    <section class="bg-gray-200 h-full py-12" id="Portofolio">
        <div class="py-12 w-11/12 md:px-5 md:container mx-auto">
            <div data-aos="zoom-in">
                <h3 class="text-5xl text-center font-bold">PORTOFOLIO</h3>
                <p class="text-semibold text-2xl text-gray-500 text-center py-6 pb-11">
                    Come see the portfolio of projects I created.
                </p>
            </div>
            <section class ="flex justify-center ">
                <button class = "border-4 bg-gray-900 py-4 text-white font-semibold px-4 items-center rounded-2xl ">
                    <a href ="/admin/create">Tambahkan Project</a>
                </button>
            </section>
            <div class="grid lg:grid-cols-4 gap-8 md:grid-cols-2 md:py-8">
                @foreach ($portofolios as $portofolio)
                    <div class="border-4 shadow-2xl border-cyan-400 bg-gray-900 py-4 px-6 rounded-3xl pt-8"
                        data-aos="fade-right">
                        <img src="{{ \Storage::url($portofolio->image) }} " alt="{{ $portofolio->title }}"
                            class="rounded-2xl img-porto border-4 border-cyan-400 mx-auto lg:h-48 lg:w-80" />
                        <h4 class="text-2xl font-semibold text-gray-200 py-2 text-center">
                            {{ $portofolio->title }}
                        </h4>
                        <h5 class="text-2xl font-bold text-cyan-400 py-2 text-center">
                            {{ $portofolio->use }}
                        </h5>
                        <div class="flex justify-center py-2">
                            <a href = "/admin/portofolio/{{ $portofolio->title }}"
                                class=" border-4 shadow-2xl bg-gray-900 border-cyan-400 text-white px-6 py-4 rounded-3xl hover:bg-gray-950">
                                <svg class=" mx-auto w-[24px] h-[24px] text-cyan-800" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                </svg>
                            </a>
                        </div>
                        <div class="flex justify-center space-x-2 py-2">
                            <a href = "/admin/portofolio/{{ $portofolio->id }}/edit"
                                class=" border-4 shadow-2xl bg-gray-900 border-cyan-400 text-white px-6 py-4 rounded-3xl hover:bg-gray-950">
                                edit
                            </a>

                            <form action = "/admin/portofolio/{{ $portofolio->id }}" method = "post"
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
