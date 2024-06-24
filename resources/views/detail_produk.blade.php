@extends('layout.base')

@section('content')
    <div style="width:1440px;height:800px;background-color:#ffffff;position:relative;overflow:hidden;margin:0; margin-top: -200px;"
        class="main-container">
        <span
            style="display:flex;width:312px;height:75px;justify-content:center;align-items:flex-start;font-family:Poppins, var(--default-font-family);font-size:50px;font-weight:400;line-height:75px;color:#000000;position:relative;text-align:center;white-space:nowrap;z-index:25;margin:75px 0 0 564px; margin-left: 650px;">Produk
            Kami</span>
        <div style="width:1202px;height:499.228px;position:relative;z-index:53;margin:86px 0 0 119px">
            <div
                style="width:503px;height:499.228px;background-position:center;background-image:url(./assets/images/064f09d3dc74931da8826d19ff871ec4ee9548c9.png);background-size:cover;background-repeat:no-repeat;position:absolute;top:0;left:0;z-index:15">
                <img src="{{ '/storage/' . $produk[0]->foto_produk }}" width="503px" height="500px" alt="">
            </div>
            <span
                style="display:flex;height:60px;justify-content:flex-start;align-items:flex-start;font-family:Poppins, var(--default-font-family);font-size:40px;font-weight:400;line-height:60px;color:#000000;position:absolute;top:0;left:589px;text-align:left;white-space:nowrap;z-index:19">
                {{ $produk[0]->nama_produk }}
            </span><span
                style="display:flex;width:144px;height:60px;justify-content:center;align-items:flex-start;font-family:Poppins, var(--default-font-family);font-size:20px;font-weight:500;line-height:30px;color:#000000;position:absolute;top:8px;left:1023px;text-align:center;overflow:hidden;text-overflow:initial;z-index:20; margin-left: 50px;">Scan
                QR Code<br />untuk fitting!</span><span
                style="display:flex;height:30px;justify-content:flex-start;align-items:flex-start;font-family:Poppins, var(--default-font-family);font-size:20px;font-weight:400;line-height:30px;color:#000000;position:absolute;top:60px;left:589px;text-align:left;white-space:nowrap;z-index:18">
                {{ 'Rp ' . number_format($produk[0]->harga, 0, ',', '.') }}</span>
            <div
                style="width:212px;height:240px;background-position:center;background-image:url(./assets/images/a48739f61227897af157b15c3b403995ab6919b0.png);background-size:cover;background-repeat:no-repeat;position:absolute;top:101px;left:990px;z-index:53">
                <img src="{{ asset('assets/fitting_demo.jpeg') }}" alt="" width="293px" height="333px" style="margin-right: 200px;">
            </div>
            <div
                style="width:354px;height:263px;background-color:#ffffff;border:1px solid #000000;position:absolute;top:108px;left:579px;z-index:17">
                <span
                    style="display:flex;width:326px;height:240px;justify-content:flex-start;align-items:flex-start;font-family:Poppins, var(--default-font-family);font-size:20px;font-weight:400;line-height:30px;color:#000000;position:absolute;top:11px;left:9px;text-align:left;overflow:hidden;text-overflow:initial;z-index:21">Deskripsi<br /><br />Bahan
                    Linen Crinkle<br />Ukuran All size<br />Lingkar
                    lengan 50cm<br />Panjang lengan 50cm<br />Panjang baju depan 66cm<br />Panjang
                    baju belakang 84cm</span>
            </div>
            <a href="{{ url('/tester/' . $produk[0]->nama_produk) }}"
                style="width:354px;height:66px;background-color:#000000;border:none;position:absolute;top:433px;left:579px;z-index:22;cursor:pointer">
                <span class="material-symbols-outlined" style="color: white; width: 50px; height: 20px; margin-top: 20px; margin-left: 160px;">
                    shopping_cart
                </span>
            </a>
            <div
                style="width:46px;height:39px;background-position:center;background-image:url(./assets/images/5caa463c-8006-4301-8e52-a8937472a6fb.png);background-size:100% 100%;background-repeat:no-repeat;position:relative;overflow:hidden;z-index:24;margin:14px 0 0 151px">
            </div>
            </button>
        </div>
    </div>
@endsection
