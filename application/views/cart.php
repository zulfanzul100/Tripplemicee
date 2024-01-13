<section class="pt-5 pb-5">
  <div class="container">
    <div class="row w-100">
        <div class="col-lg-12 col-md-12 col-12">
            <h3 class="display-5 mb-2 text-center">Shopping Cart</h3>
            <p class="mb-5 text-center">
            <table id="shoppingCart" class="table table-condensed table-responsive">
                <thead>
                    <tr>
                        <th style="width:60%">Product</th>
                        <th style="width:12%">Price</th>
                        <th style="width:10%">Quantity</th>
                        <th style="width:16%"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-md-3 text-left">
                                    <img src="<?php echo base_url();?>asset/img/mobil-4.png" alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                </div>
                                <div class="col-md-9 text-left mt-sm-2">
                                    <h4>Avanza</h4>
                                    <p class="font-weight-light">Waktu Peminjaman : 2 hari <br>Tanpa Driver</p>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">Rp.700.000</td>
                        <td data-th="Quantity">
                            <input type="number" class="form-control form-control-lg text-center" value="1">
                        </td>
                        <td class="actions" data-th="">
                            <div class="text-right">
                                <button class="btn btn-white bg-white btn-md mb-2">
                                <i class="fa fa-trash-o"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="float-right text-right">
                <h4>Subtotal:</h4>
                <h1>Rp.700.000</h1>
            </div>
        </div>
    </div>
    <div class="row mt-4 d-flex align-items-center">
        <div class="col-sm-8 order-md-2 text-right">
            <a href="catalog.html" class="btn btn-primary mb-4 btn-lg pl-5 pr-5">Checkout</a>
        </div>

    </div>
</div>
</section>