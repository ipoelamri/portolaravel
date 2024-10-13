@extends('layout_portofolio')

@section('content')
    <h1>My Portfolio</h1>
    <div class="grid lg:grid-cols-4 gap-8 md:grid-cols-2 md:py-8">
        @foreach ($portofolios as $portofolio)
            <a href="{{ $portofolio->link }}"
                class="border-4 shadow-2xl border-cyan-400 bg-gray-900 py-4 px-6 rounded-3xl pt-8" data-aos="fade-right">
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
@endsection
