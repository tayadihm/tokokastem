@extends('layouts.master')
@section('title','Payment')
@section('content')

    <!-- Cart view section -->
    <section id="checkout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="checkout-area">
                        <form action="">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="checkout-left">
                                        <div class="panel-group" id="accordion">
                                            <!-- Shipping Address -->
                                            <div class="panel panel-default aa-checkout-billaddress">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                                            Alamat Pengiriman
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseFour" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="aa-checkout-single-bill">
                                                                    <input type="text" placeholder="Nama Lengkap*">
                                                                </div>
                                                            </div>
{{--                                                            <div class="col-md-6">--}}
{{--                                                                <div class="aa-checkout-single-bill">--}}
{{--                                                                    <input type="text" placeholder="Last Name*">--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
                                                        </div>
{{--                                                        <div class="row">--}}
{{--                                                            <div class="col-md-12">--}}
{{--                                                                <div class="aa-checkout-single-bill">--}}
{{--                                                                    <input type="text" placeholder="Company name">--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="aa-checkout-single-bill">
                                                                    <input type="email" placeholder="Email*">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="aa-checkout-single-bill">
                                                                    <input type="tel" placeholder="Nomor handphone*">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="aa-checkout-single-bill">
                                                                    <textarea cols="8" rows="3">Alamat*</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="aa-checkout-single-bill">
                                                                    <input type="text" placeholder="Provinsi">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="aa-checkout-single-bill">
                                                                    <input type="text" placeholder="Kota">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="aa-checkout-single-bill">
                                                                    <input type="text" placeholder="Kabupaten">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="aa-checkout-single-bill">
                                                                    <input type="text" placeholder="Kode Pos">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="aa-checkout-single-bill">
                                                                    <textarea cols="8" rows="3">Catatan</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="checkout-right">
                                        <h4>Rincian Pesanan</h4>
                                        <div class="aa-order-summary-area">
                                            <table class="table table-responsive">
                                                <thead>
                                                <tr>
                                                    <th>Produk</th>
                                                    <th>Total</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>T-Shirt <strong> x  1</strong></td>
                                                    <td>$150</td>
                                                </tr>
                                                <tr>
                                                    <td>Polo T-Shirt <strong> x  1</strong></td>
                                                    <td>$250</td>
                                                </tr>
                                                <tr>
                                                    <td>Shoes <strong> x  1</strong></td>
                                                    <td>$350</td>
                                                </tr>
                                                </tbody>
                                                <tfoot>
{{--                                                <tr>--}}
{{--                                                    <th>Subtotal</th>--}}
{{--                                                    <td>$750</td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <th>Tax</th>--}}
{{--                                                    <td>$35</td>--}}
{{--                                                </tr>--}}
                                                <tr>
                                                    <th>Total</th>
                                                    <td>$785</td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <h4>Payment Method</h4>
                                        <div class="aa-payment-method">
                                            <label for="">Silahkan screenshot halaman ini dan upload ke tombol bayar dibawah</label>
                                            <a class="btn btn-success" href="https://api.whatsapp.com/send?phone=81411165221&text=Saya%20ingin%20melakukan%20konfirmasi%20pembayaran">Bayar</a>

                                        </div>
                                        <br>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Cart view section -->



@endsection
