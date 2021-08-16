<!--New Phones-->
<?php

    $product_shuffle=$product->getData();
    shuffle($product_shuffle);

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['new_laptop_submit'])){
            // call method addToCart
            $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
        }
    }
?>

<section id="new-laptops">
    <div class="container">
        <h4 class="font-rubil font-size-25">New Laptops</h4>
        <hr>

        <!--owl carousel-->

        <div class="owl-carousel owl-theme">
            <?php
            foreach ($product_shuffle as $item){
                ?>
                <div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="<?php printf('%s?item_id=%s', 'product.php', $item['item_id'])?>"><img src="<?php echo $item['item_image']??"./assets/product/a1.jpg" ?>" alt="product1" class="img-fluid"></a>
                        <div class="text-center">

                            <h6><br><b><?php echo $item['item_name']?? "Unknown"; ?></b></h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <div class="font-size-20 text-danger font-baloo">
                                    ₹<span class="product_price"> <?php echo $item['item_price'] ?? '0'; ?></span>
                                </div>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id']??'1';?>">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                    echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                                }else{
                                    echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
                <?php
            } // closing foreach function
            ?>


        </div>
        <!--!owl carousel-->
    </div>

</section>
<!--! New Phones-->
<br>