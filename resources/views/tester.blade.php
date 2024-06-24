{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SB-Mid-client-a7kLnGvzy-KqomqB"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Column.Id</title>
</head> --}}
@extends('layout.base')

@section('content')
<div style="width:1440px;height:800px;background-color:#ffffff;position:relative;overflow:hidden;margin:0 auto; bottom: 200px;"
        class="main-container">
        <span
            style="display:block;height:22px;font-family:Inter, var(--default-font-family);font-size:18px;font-weight:700;line-height:21.784px;color:#000000;position:relative;text-align:left;white-space:nowrap;z-index:13;margin:20px 0 0 675px">Keranjang</span>
        <div
            style="width:1142px;height:66px;background-color:#ffffff;position:relative;box-shadow:0 0 4px 0 rgba(0, 0, 0, 0.25);z-index:28;margin:26px 0 0 189px">
            <span
                style="display:flex;width:67px;height:22px;justify-content:center;align-items:flex-start;font-family:Inter, var(--default-font-family);font-size:18px;font-weight:400;line-height:21.784px;color:#000000;position:absolute;top:22px;left:721px;text-align:center;white-space:nowrap;z-index:27">Jumlah</span><span
                style="display:flex;height:22px;justify-content:flex-start;align-items:flex-start;font-family:Inter, var(--default-font-family);font-size:18px;font-weight:400;line-height:21.784px;color:#000000;position:absolute;top:22px;left:49px;text-align:left;white-space:nowrap;z-index:25">Produk</span><span
                style="display:flex;height:22px;justify-content:flex-start;align-items:flex-start;font-family:Inter, var(--default-font-family);font-size:18px;font-weight:400;line-height:21.784px;color:#000000;position:absolute;top:22px;left:378px;text-align:left;white-space:nowrap;z-index:26">Harga</span><span
                style="display:flex;height:22px;justify-content:flex-start;align-items:flex-start;font-family:Inter, var(--default-font-family);font-size:18px;font-weight:400;line-height:21.784px;color:#000000;position:absolute;top:22px;left:1050px;text-align:left;white-space:nowrap;z-index:28">Total</span>
        </div>
        <div
            style="display:flex;width:1194px;height:115px;justify-content:space-between;align-items:center;position:relative;z-index:60;margin:55px 0 0 137px">
            <div
                style="width:24px;height:24px;flex-shrink:0;background-color:#ffffff;border-radius:4px;border:1px solid #000000;position:relative;overflow:hidden;z-index:60">
            </div>
            <div
                style="width:1142px;height:115px;flex-shrink:0;background-color:#ffffff;position:relative;box-shadow:0 0 4px 0 rgba(0, 0, 0, 0.25);z-index:30">
                <div
                    style="width:66.175px;height:69.533px;background-position:center;background-image:url(./assets/images/b8c5176f308c39fcbb6f9d71e365f26d9c6649d4.png);background-size:cover;background-repeat:no-repeat;position:absolute;top:23px;left:32.143px;z-index:35">
                </div>
                <span
                    style="display:flex;height:22px;justify-content:flex-start;align-items:flex-start;font-family:Inter, var(--default-font-family);font-size:18px;font-weight:400;line-height:21.784px;color:#000000;position:absolute;top:47px;left:130px;text-align:left;white-space:nowrap;z-index:31">
                    {{$beli[0]->nama_produk}}
                </span><span
                    style="display:flex;width:102px;height:22px;justify-content:center;align-items:flex-start;font-family:Inter, var(--default-font-family);font-size:18px;font-weight:400;line-height:21.784px;color:#000000;position:absolute;top:47px;left:361px;text-align:center;white-space:nowrap;z-index:32">Rp
                    {{$beli[0]->harga}}</span><span
                    style="display:flex;width:100px;height:22px;justify-content:center;align-items:flex-start;font-family:Inter, var(--default-font-family);font-size:18px;font-weight:400;line-height:21.784px;color:#000000;position:absolute;top:47px;left:1011px;text-align:center;white-space:nowrap;z-index:33">Rp
                    {{$beli[0]->harga}}</span><span
                    style="display:flex;width:8.508px;height:22px;justify-content:center;align-items:flex-start;font-family:Inter, var(--default-font-family);font-size:18px;font-weight:400;line-height:21.784px;color:#000000;position:absolute;top:47px;left:746.838px;text-align:center;white-space:nowrap;z-index:34">1</span>
            </div>
        </div>
        <div style="width:1142px;height:324px;position:relative;z-index:43;margin:55px 0 0 189px">
            <div
                style="width:161px;height:42px;background-color:#ffb37a;border-radius:15px;position:absolute;top:0;left:0;box-shadow:0 0 4px 0 rgba(0, 0, 0, 0.25);z-index:20">

                    <a href="{{url('/')}}">
                        <span
                        style="display:flex;width:146px;height:22px;justify-content:center;align-items:flex-start;font-family:Inter, var(--default-font-family);font-size:18px;font-weight:400;line-height:21.784px;color:#ffffff;position:absolute;top:10px;left:8px;text-align:center;white-space:nowrap;z-index:21">
                        Kembali belanja</span>
                    </a>
            </div>
            <div
                style="width:161px;height:42px;background-color:#ffffff;border-radius:15px;border:3px solid #ffb37a;position:absolute;top:0;left:331px;box-shadow:0 0 4px 0 rgba(0, 0, 0, 0.25);z-index:23">
                <span
                    style="display:flex;width:146px;height:22px;justify-content:center;align-items:flex-start;font-family:Inter, var(--default-font-family);font-size:18px;font-weight:400;line-height:21.784px;color:#ffb37a;position:absolute;top:7px;left:5px;text-align:center;white-space:nowrap;z-index:24">Hapus</span>
            </div>
            <div
                style="width:470px;height:324px;font-size:0px;border-radius:4px;border:1.5px solid #000000;position:absolute;top:0;left:672px;overflow:hidden;z-index:43">
                <span
                    style="display:block;height:28px;font-family:Poppins, var(--default-font-family);font-size:20px;font-weight:500;line-height:28px;color:#000000;position:relative;text-align:left;white-space:nowrap;z-index:44;margin:32px 0 0 24px">
                    <a href="{{url('all_produk')}}">Total
                        Keranjang</a>
                </span>
                <div
                    style="display:flex;width:420px;gap:307px;align-items:flex-start;flex-wrap:nowrap;position:relative;z-index:45;margin:25.5px 0 0 24px">
                    <span
                        style="height:24px;flex-shrink:0;flex-basis:auto;font-family:Poppins, var(--default-font-family);font-size:16px;font-weight:400;line-height:24px;color:#000000;position:relative;text-align:left;white-space:nowrap;z-index:46">Total
                        bayar</span><span
                        style="height:24px;flex-shrink:0;flex-basis:auto;font-family:Poppins, var(--default-font-family);font-size:16px;font-weight:400;line-height:24px;color:#000000;position:relative;text-align:left;white-space:nowrap;z-index:47">Rp {{$beli[0]->harga}}
                    </span>
                </div>
                <div style="width:422px;height:0px;opacity:0.4;position:relative;z-index:56;margin:17.5px 0 0 24px">
                    <div
                        style="width:100%;height:2710749.96%;background-position:center;background-image:url(./assets/images/2fee643a-cf24-4e78-bc37-8afe52cc81ab.png);background-size:100% 100%;background-repeat:no-repeat;position:absolute;top:-2710584.52%;left:0;z-index:57">
                    </div>
                </div>
                <div
                    style="display:flex;width:422px;gap:314px;align-items:flex-start;flex-wrap:nowrap;position:relative;z-index:48;margin:17.5px 0 0 24px">
                    <span
                        style="height:24px;flex-shrink:0;flex-basis:auto;font-family:Poppins, var(--default-font-family);font-size:16px;font-weight:400;line-height:24px;color:#000000;position:relative;text-align:left;white-space:nowrap;z-index:49">Shipping:</span><span
                        style="height:24px;flex-shrink:0;flex-basis:auto;font-family:Poppins, var(--default-font-family);font-size:16px;font-weight:400;line-height:24px;color:#000000;position:relative;text-align:left;white-space:nowrap;z-index:50">Free</span>
                </div>
                <div style="width:422px;height:0px;opacity:0.4;position:relative;z-index:58;margin:17.5px 0 0 24px">
                    <div
                        style="width:100%;height:2710584.51%;background-position:center;background-image:url(./assets/images/f860195a-cbe0-407e-b398-8ddd1bd4a4f1.png);background-size:100% 100%;background-repeat:no-repeat;position:absolute;top:-2710584.51%;left:0;z-index:59">
                    </div>
                </div>
                <div
                    style="display:flex;width:399px;gap:335px;align-items:flex-start;flex-wrap:nowrap;position:relative;z-index:51;margin:17.5px 0 0 24px">
                    <span
                        style="height:24px;flex-shrink:0;flex-basis:auto;font-family:Poppins, var(--default-font-family);font-size:16px;font-weight:400;line-height:24px;color:#000000;position:relative;text-align:left;white-space:nowrap;z-index:52">Total: </span><span
                        style="height:24px;flex-shrink:0;flex-basis:auto;font-family:Poppins, var(--default-font-family);font-size:16px;font-weight:400;line-height:24px;color:#000000;position:relative;text-align:left;white-space:nowrap;z-index:53">Rp {{$beli[0]->harga}}</span>
                </div>
                <button
                    style="padding-left: 48px; padding-right: 48px; padding-top: 16px; padding-bottom: 16px; left: 89px; top: 236px; position: absolute; background: #FFB47A; border-radius: 15px; justify-content: center; align-items: center; gap: 10px; display: inline-flex"
                    id="pay-button" class="pay-button">
                    <span
                        style="height:24px;flex-shrink:0;flex-basis:auto;font-family:Poppins, var(--default-font-family);font-size:16px;font-weight:500;line-height:24px;color:#f9f9f9;position:relative;text-align:left;white-space:nowrap;z-index:55">
                        Bayar
                    </span>
                </button>
            </div>
        </div>
        {{-- {{ dd($beli[0]->nama_produk) }} --}}
        {{-- {{ dd($kode_produk) }} --}}
    </div>
    <form action="{{ url('payment') }}" id="submit_form" method="POST">
        <input type="button" hidden name="kode_produk" value="{{ $kode_produk }}">
        @csrf
        <input type="hidden" name="json" id="json_callback">
    </form>

    <script type="text/javascript">
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            window.snap.pay('{{ $snap_token }}', {
                onSuccess: function(result) {

                    console.log(result);
                    send_response_to_form(result);
                },
                onPending: function(result) {
                    console.log(result);
                    send_response_to_form(result);
                },
                onError: function(result) {
                    console.log(result);
                    send_response_to_form(result);
                },
                onClose: function() {
                    alert('you closed the popup without finishing the payment');
                }
            })
        });

        function send_response_to_form(result) {
            document.getElementById('json_callback').value = JSON.stringify(result);
            $('#submit_form').submit();
        }
    </script>

@endsection
    
    