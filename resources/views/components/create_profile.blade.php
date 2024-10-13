@extends('layout_admin')
@section('content')
    <section class ="bg-gray-300 py-12 h-screen">
        <div class="container mx-auto flex justify-center items-center">
            <form action="/admin/profile/store" method ="post" enctype="multipart/form-data"
                class="border-2 border-white bg-gray-900 w-3/6 rounded-xl py-6 pt-14">
                @csrf
                <div class="border-2 border-cyan-400 bg-gray-300 rounded-xl py-4 w-5/6 mx-auto pl-6">
                    <label for="name" class="font-semibold">Nama :</label>
                    <input type="text" name="name" id="name" placeholder="masukan nama :"
                        class="ml-4 bg-transparent rounded-sm w-4/6 @error('title') is-invalid                            
                        @enderror">
                    <br />
                    <span class ="text-red-600">{{ $errors->first('name') }}</span>
                </div>
                <div class="border-2 border-cyan-400 bg-gray-300 rounded-xl py-4 w-5/6 mx-auto mt-4 pl-6">
                    <label for="image" class="font-semibold">Gambar :</label>
                    <input type="file" name="image" id="image" placeholder="masukan gambar"
                        class="ml-4 bg-transparent rounded-sm w-4/6">
                </div>
                <div class ="py-4 flex justify-center">
                    <button type ="submit" class ="border-2 bg-cyan-400 border-white font-semibold rounded-xl py-2 px-6">
                        Submit
                    </button>
                </div>
            </form>

        </div>


    </section>
@endsection
