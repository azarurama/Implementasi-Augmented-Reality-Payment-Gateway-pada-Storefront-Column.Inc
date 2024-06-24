@extends('layout.base')

@section('content')
    <div style="width: 238px; height: 21px; left: 900px; top: 189px; position: absolute; background: #FFCAA2"></div>
    <div style="left: 600px; top: 159px; position: absolute; text-align: center">
        <span style=" color: black; font-size: 40px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
            Selamat datang, di 
        </span>
        <span style="color: black; font-size: 40px; font-family: Poppins; font-weight: 700; word-wrap: break-word">
            Column.Inc
        </span>
    </div>
    <div style="width: 100%; height: 496.47px; top: 259px; position: absolute">
        <img src="{{ asset('assets/welcome_photos.png') }}" alt="" width="100%" >
    </div>

    <div style="width: 100%; margin-top: 650px; display: flex; gap: 20px; flex-wrap: wrap; justify-content: center;">
        @foreach ($data as $item)
            <div style="width: 321px; height: 543.84px; background: #D2BEAF; border: 10px #D2BEAF solid; position:relative;">
                <a href="{{url('detail_produk/' . $item->nama_produk)}}">
                    <img class="zoom" src="{{ '/storage/' . $item->foto_produk }}" alt="Product Image" width="100%" height="50%" class="zoom">
                </a>
                <div
                    style="position: absolute; left: 25.20px; top: 328.96px; font-size: 20px; font-family: Poppins; font-weight: 400px; color: black; font-style: normal;">
                    {{ $item->nama_produk }}
                </div>
                <div
                    style="position: absolute; left: 25.20px; top: 368.75px; font-size: 20px; font-family: Poppins; font-weight: 400; color: black;">
                    {{ 'Rp ' . number_format($item->harga, 0, ',', '.') }}
                </div>
                <div style="width: 100%; height: 70px; background: black; position: absolute; top: 475px; left: 0;"></div>
                <div
                    style="width: 80px; height: 50.89px; position: absolute; top: 490px; left: 136.62px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                    <a href="{{ url('detail_produk/' . $item->nama_produk) }}">
                        <span class="material-symbols-outlined" style="color: white; width: 50px; height: 20px;">
                            shopping_cart
                        </span>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
