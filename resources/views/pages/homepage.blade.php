@extends('template')

@section('main')
    <div id="homepage">
    	<br>	
        <center>
            <p><h2>SeLaMaT DaTaNg Di<br><br>
            <strong>UCollection</strong></h2></p>
       	    <br><br>
            <p>
                Aplikasi ini dibuat dengan tujuan untuk memudahkan pencatatan data macam-macam mobil klasik <br> 
                yang berada pada Showroom Mobil UCollection, baik itu dari nama mobil, maupun dari produsen yang membuat nya.<br><br>

                Aplikasi ini menerapkan fungsi Login dan Register sebagai verifikasi akun masuk, dan hubungan yang digunakan antara<br> 
                data Koleksi Mobil dengan data Produsen Mobil adalah One-to-Many.

             </p>
        </center>	
    </div>
@stop

@section('footer')
    @include('footer')
@stop
