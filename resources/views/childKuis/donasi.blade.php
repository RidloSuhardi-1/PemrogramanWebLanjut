<!-- child dari master donation -->

@extends('masterKuis.masterContent')

@section('title', 'Donasi Ngodingers')

@section('main')
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center" style="margin-top: 40px;">
        <h1 class="display-4" style="margin-bottom: 30px;">Yuk Bantu Ngodingers Berkembang</h1>
        <p class="lead">Bantuan dari kamu akan sangat berguna untuk perkembangan situs ini<br>Yuk donasi, sesuaikan budget kamu ya..</p>
    </div>

    <div class="container">
    <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">Standart</h4>
        </div>
        <div class="card-body">
            <h1 class="card-title pricing-card-title">$5</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
            <li>&nbsp;</li>
            <li>Donasi sebesar <b>5</b> dollar</li>
            <li>Tidak punya budget banyak ?</li>
            <li>Pilih Ini Aja</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Donasi</button>
        </div>
        </div>
        <div class="card mb-4 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">Sultan</h4>
        </div>
        <div class="card-body">
            <h1 class="card-title pricing-card-title">$999</h1>
            <ul class="list-unstyled mt-3 mb-4">
            <li>&nbsp;</li>
            <li>Donasi sebesar <b>999</b> dollar</li>
            <li>Kebanyakan Uang ?</li>
            <li>Donasikan Aja Disini</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Donasi</button>
        </div>
        </div>
        <div class="card mb-4 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">Custom</h4>
        </div>
        <div class="card-body">
            <h1 class="card-title pricing-card-title">$??</h1>
            <ul class="list-unstyled mt-3 mb-4">
            <li>&nbsp;</li>
            <li>&nbsp;</li>
            <li>Pengen nentuin jumlahnya ?</li>
            <li>Bisa kok, Isi aja disini</li>
            </ul>
            <form>
                <div class="input-group mb-2" style="margin-bottom: 10px;">
                    <div class="input-group-prepend">
                    <div class="input-group-text">$</div>
                    </div>
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="0000,00">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">Donasi</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>


    </div>
@endsection