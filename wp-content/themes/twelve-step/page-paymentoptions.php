    <?php get_header(); ?>
    <div id="my-body">
        <p>Please choose your prefered payment method</p>
        <?php
            $cart_id;
            /*if(!isset($_COOKIE['cart_id'])){
                $cart_id = create_shopping_cart();
                setcookie('cart_id',$cart_id,time()+25920000,"/");
            } else {
                $cart_id = $_COOKIE['cart_id'];
            }*/
            $cart_id = create_shopping_cart();
            
            $thanks_link = page_url("thanks",true);
            $thanks_link = $thanks_link."/".$cart_id;
        ?>
        <div style="text-align: center">
        <div class="paymentoption"><a href="<?php echo $thanks_link; ?>">Pay Via Credit Card</a></div>
        <div class=paymentoption><a href="<?php echo $thanks_link; ?>">Via PayPal</a></div>
        </div>
    </div>
    <?php get_footer(); ?>