
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                    <span>Shopping cart</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Shop Cart Section Begin -->
<section class="shop-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop__cart__table" id="cart">
                    <table id="data-cart">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $_SESSION['sum_total'] = 0;
                                foreach ($_SESSION['carts'] as $id => $pro) {
                            ?>
                               <tr>
                                    <td class="cart__product__item">
                                        <div style="width: 100px;"><img src="<?php echo $pro['avatar']; ?>" alt="" ></div>
                                        <div class="cart__product__item__title">
                                            <h6><?php echo $pro['name'];?></h6>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__price"><?php echo $pro['price']; ?>VNĐ</td>
                                    <td class="cart__quantity">
                                        <div class="pro-qty">
                                             <input min="1"  name="<?php echo $pro['id']; ?>" type="number" class="update-cart" pattern="[0-9]" value="<?php echo $pro['qty']; ?>" >
                                        </div>
                                    </td>
                                    <td class="cart__total">    
                                        <?php  
                                        $total = $pro['price'] * $pro['qty']; 
                                        $_SESSION['sum_total'] += $total; 
                                        echo $total.'VNĐ';
                                        ?>
                                        
                                    </td>
                                    <!-- <td class="cart__close"><span class="icon_close"></span></td> -->
                                    <td><button class="btn-danger del-cart" value="<?php echo $pro['id'];?>" style="border: 0px;border-radius: 50%; width: 40px;height: 40px"><span class="icon_close"></span></button>
                               </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="cart__btn">
                <a href="index.php">Continue Shopping</a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
        
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="discount__content">
                <h6>Discount codes</h6>
                <form action="#">
                    <input type="text" placeholder="Enter your coupon code">
                    <button type="submit" class="site-btn">Apply</button>
                </form>
            </div>
        </div>
        <div class="col-lg-4 offset-lg-2" id="total-price">
            <div class="cart__total__procced total-price">
                <h6>Cart total</h6>
                <ul>
                    <li>Subtotal <span></span></li>
                    <li>Total <span><?php echo $_SESSION['sum_total']; ?>VNĐ</span></li>
                </ul>
                <a href="index.php?page=checkout" class="primary-btn">Proceed to checkout</a>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Shop Cart Section End -->

<!-- Instagram Begin -->
<div class="instagram">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="img/instagram/insta-1.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="img/instagram/insta-2.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="img/instagram/insta-3.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="img/instagram/insta-4.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="img/instagram/insta-5.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="img/instagram/insta-6.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Instagram End -->

