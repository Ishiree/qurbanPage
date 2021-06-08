@extends('layouts.app')

@section('main')
<!--hero section start-->
<section class="hero-section ptb-100 gradient-overlay"
style="background: url('img/hero-bg-4.jpg')no-repeat center center / cover">
<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-9 col-lg-7">
            <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                <h1 class="text-white mb-0">Formulir Transaksi</h1>
                <div class="custom-breadcrumb">
                    <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                        <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                        <li class="list-inline-item breadcrumb-item active">Formulir Transaksi</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--hero section end-->

<section class="project-details-section ptb-100">
    <div class="container">
        <div class="row justify-content-center my-6">
            <div class="col-md-8">
                <div class="card my-6">
                                    <div class="card-body">
                                        <form action="{{ route('transaksis.store') }}" method="POST" class="login-signup-form sign-up-form">
                                            @csrf
                                            @method('POST')
                                            
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="pb-1">Nama</label>
                                                        <div class="input-group input-group-merge">
                                                            <div class="input-icon">
                                                                <span class="ti-user"></span>
                                                            </div>
                                                            <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="pb-1">Email</label>
                                                        <div class="input-group input-group-merge">
                                                            <div class="input-icon">
                                                                <span class="ti-email"></span>
                                                            </div>
                                                            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="pb-1">Nomor Hp/Wa</label>
                                                        <div class="input-group input-group-merge">
                                                            <div class="input-icon">
                                                                <span class="ti-list"></span>
                                                            </div>
                                                            <input type="text" name="hp" class="form-control" placeholder="Enter your subject" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="pb-1">Hewan Qurban</label>
                                                        <div class="input-group input-group-merge">
                                                            <div class="input-icon">
                                                                <span class="ti-comment-alt"></span>
                                                            </div>
                                                                <select class="custom-select form-control" name="hewan_qurban_id" id="pilih_hewan" onchange="harga()" required>
                                                                    @foreach ($hewan_query as $hewan)
                                                                    <option value="{{ $hewan->id }}"
                                                                        @if ($param == $hewan->param)
                                                                            selected
                                                                        @endif
                                                                        >{{ Str::ucfirst($hewan->name) }} ({{ "Rp. " . number_format($hewan->harga, 0, ".", ".")}})</option>    
                                                                    @endforeach
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row justify-content-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="pb-1">Jumlah Hewan</label>
                                                        <div class="input-group input-group-merge">
                                                            <div class="input-icon">
                                                                <span class="ti-list"></span>
                                                            </div>
                                                            <input id="jumlah_hewan" type="number" name="jumlah_hewan" class="form-control" onchange="jumlah()" placeholder="Enter your subject" value="1" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>        
                                    </div>
                                    <!-- Submit -->
                                    <div class="rounded py-5 px-4 border-top-0 white-bg text-center">
                                        <div class="promo-content-wrap">
                                            <h3>Total Pembayaran</h3>
                                                <hr>
                                                <h2 id="total"></h2>
                                                <div class="row justify-content-center">

                                                    <div class="col-md-4 text-center">
    
                                                        <button type="submit" name="submit" id="submit" class="btn solid-btn btn-block">Selanjutnya</button>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                </div>
            </div>
            {{-- <input hidden id="harga_hewan" value="{{  }}"> --}}
            
                        
            
        </div>
    </div>
        
         
        </form>
</section>



@endsection

@push('scripts')
<script type="text/javascript">
    $(document).ready(
        function () {
            var id_hewan = $('#pilih_hewan').val();

        if (id_hewan == 1) {
            var harga_hewan = 2600000    
        }else if(id_hewan == 2){
            var harga_hewan = 2400000
        }else if(id_hewan == 3){
            var harga_hewan = 16800000
        }

        var jumlah_hewan = $('#jumlah_hewan').val();

        var bilangan = jumlah_hewan * harga_hewan;
        
        var	reverse = bilangan.toString().split('').reverse().join(''),
	    total 	= reverse.match(/\d{1,3}/g);
	    total	= total.join('.').split('').reverse().join('');
        
        document.getElementById('total').innerHTML ='Rp.' + total;
        }
    );
    $('#pilih_hewan').change(
        
        function harga() {
        console.log('coba');

        var id_hewan = $('#pilih_hewan').val();

        if (id_hewan == 1) {
            var harga_hewan = 2600000    
        }else if(id_hewan == 2){
            var harga_hewan = 2400000
        }else if(id_hewan == 3){
            var harga_hewan = 16800000
        }

        var jumlah_hewan = $('#jumlah_hewan').val();
        
        var bilangan = jumlah_hewan * harga_hewan;
        
        var	reverse = bilangan.toString().split('').reverse().join(''),
	    total 	= reverse.match(/\d{1,3}/g);
	    total	= total.join('.').split('').reverse().join('');
        
        document.getElementById('total').innerHTML ='Rp.' + total;
    });
    $('#jumlah_hewan').change(
        function jumlah(jumlah_hewan) {
            var id_hewan = $('#pilih_hewan').val();

            if (id_hewan == 1) {
                var harga_hewan = 2600000    
            }else if(id_hewan == 2){
                var harga_hewan = 2400000
            }else if(id_hewan == 3){
                var harga_hewan = 16800000
            }

            var jumlah_hewan = $('#jumlah_hewan').val();
            
            var bilangan = jumlah_hewan * harga_hewan;
        
            var	reverse = bilangan.toString().split('').reverse().join(''),
	        total 	= reverse.match(/\d{1,3}/g);
	        total	= total.join('.').split('').reverse().join('');
        
            document.getElementById('total').innerHTML ='Rp.' + total;
        }
    );
</script>
@endpush