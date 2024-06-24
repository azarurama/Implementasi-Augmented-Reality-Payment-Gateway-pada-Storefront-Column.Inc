<div style="width: 100%; height: 100%; position: relative; background: white">
    <div
        style="left: 1200px; top: 47px; position: relative; justify-content: flex-start; align-items: center; gap: 26px; display: inline-flex">

        <div style="position: relative; display: inline-block;">
            <input type="text" value="" placeholder="search"
                style="border-radius: 10px; width: 155px; height: 30px; border: 1px solid white; background-color: #D9D9D959; padding: 5px 25px 5px 10px; font-size: 18px; font-family: Inter; font-weight: 400;">
            <span class="material-symbols-outlined"
                style="position: absolute; right: 5px; top: 50%; transform: translateY(-50%); color: rgba(0, 0, 0, 0.80);">search</span>
        </div>

        <div style="width: 22px; height: 22px; position: relative">
            <div>
                <span class="material-symbols-outlined">
                    <a href="" style="text-decoration: none; color: black;"> shopping_cart</a>
                </span>
            </div>
        </div>
        <div style="width: 22px; height: 22px; position: relative;">
            <div
                style="width: 32px; height: 32px; position: relative; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                <span class="material-symbols-outlined">
                    <a href="" style="text-decoration: none; color: black;">person</a>
                </span>
            </div>
        </div>
        {{-- <div style="width: 18px; height: 18px; position: relative">
            <div style="width: 18px; height: 18px; left: -0px; top: -0px; position: absolute; background: black"></div>
        </div> --}}
    </div>
    <div style="width: 95px; height: 95px; left: 750px; top: 24px; position: absolute">
        <div
            style="width: 95px; height: 95px; left: 0px; top: 0px; position: absolute; background: #D9D9D9; border-radius: 9999px">
        </div>
        <img style="width: 100%; height: 98.80px;top: -2.85px; position: absolute;"
            src="{{ asset('assets/creased.png') }}" />
    </div>
    <div
        style="left: 133px; top: 54px; position: absolute; color: black; font-size: 18px; font-family: Inter; font-weight: 800; word-wrap: break-word">
        <a style="text-decoration: none; color:rgba(0, 0, 0, 0.80); {{ Request::is('/') ? 'font-weight: 800;' : 'font-weight: 400;' }}"
            href="{{ url('/') }}">Beranda</a>
    </div>
    <div
        style="left: 240px; top: 54px; position: absolute; color: black; font-size: 18px; font-family: Inter; font-weight: 400; word-wrap: break-word">
        <a style="text-decoration: none; color:rgba(0, 0, 0, 0.80); {{ Request::is('all_produk') ? 'font-weight: 800;' : 'font-weight: 400;' }}"
            href="{{ url('all_produk') }}">Produk</a>
    </div>
    <div
        style="left: 332px; top: 54px; position: absolute; color: black; font-size: 18px; font-family: Inter; font-weight: 400; word-wrap: break-word">
        <a style="text-decoration: none; color:rgba(0, 0, 0, 0.80); {{ Request::is('test') ? 'font-weight: 800;' : 'font-weight: 400;' }}"
            href="{{ url('/test') }}">Fitting</a>
    </div>
</div>
