@extends('layout.base')

@section('content')
    <div style="width: 100%; text-align: center; color: black; font-size: 50px; font-weight: 400; margin: 20px 0;margin-top: -200px;">
        Produk Kami
    </div>

    <div style="display: flex; flex-wrap: wrap; justify-content: center; width: 1440px; margin: 0 auto;">
        @foreach ($produks as $item)
        <div style="width: 300px; height: 480px; margin: 10px; position: relative; background: #D2BEAF; border: 10px #D2BEAF solid; box-sizing: border-box;">
            <a href="{{ url('detail_produk/' . $item->nama_produk) }}">
                <img src="{{ '/storage/' . $item->foto_produk }}" alt="Product Image" style="width: 280px; height: 230.39px; position: absolute; top: -1px; left: -1px;">
            </a>
            
            <div style="position: absolute; top: 260px; left: -49px; text-align: center; color: black; font-size: 20px; font-weight: 400; width: 202px;">
                {{$item->nama_produk}}
            </div>
            <div style="position: absolute; top: 285px; left: 22px; color: black; font-size: 20px; font-weight: 400;">
                {{ 'Rp ' . number_format($item->harga, 0, ',', '.') }}
            </div>
            <div style="width: 286px; height: 65.94px; background: black; position: absolute; bottom: 0; left: -4px; display: flex; justify-content: center; align-items: center;">
                <a href="{{ url('detail_produk/' . $item->nama_produk) }}" style="display: flex; justify-content: center; align-items: center;">
                    <span class="material-symbols-outlined" style="color: white; font-size: 30px;">
                        shopping_cart
                    </span>
                </a>
            </div>
        </div>
        @endforeach
        <!-- Tambahkan lebih banyak item produk di sini -->
    </div>
@endsection
