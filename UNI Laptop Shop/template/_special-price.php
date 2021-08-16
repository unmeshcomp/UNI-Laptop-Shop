<!--Bank banner-->
<div>
    <img src="./assets/bnbank.jpg" alt="bannerbank1" width="1520">
</div>

<!--spcial price-->
<?php
    $brand=array_map(function ($pro){return $pro['item_brand'];},$product_shuffle);
    $unique=array_unique($brand);
    sort($unique);
    shuffle($product_shuffle);

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['special_price_submit'])){
            // call method addToCart
            $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
        }
    }
    $in_cart=$Cart->getCartId($product->getData('cart'));

?>
<section id="special-price">
    <div class="container"><br>
        <h4 class="font-rubik font-size-25">Special Price</h4>
        <hr>
        <div id="filters" class="button-group text-right font-baloo font-size-16">
            <button class="btn is-checked" data-filter="*">All Brand</button>
            <button class="btn" data-filter=".Apple">Apple</button>
            <button class="btn" data-filter=".Asus">Asus</button>
            <button class="btn" data-filter=".Hp">Hp</button>
            <button class="btn" data-filter=".Dell">Dell</button>

        </div>
        <hr>

        <div class="grid">
            <?php
            array_map(function ($item)use($in_cart){
            ?>
            <!--1-->
            <div class="grid-item border <?php echo $item['item_brand']?? "Brand";?>">
                <div class="item py-2" style="width: 250px;">
                    <div class="product font-rale">
                        <a href="<?php printf('%s?item_id=%s', 'product.php', $item['item_id'])?>"><img src="<?php echo $item['item_image']?? "./assets/products/a4.jpg";?>" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6><b><?php echo $item['item_name']?? "Unknown";?></b></h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <div class="font-size-20 text-danger font-baloo">
                                    ₹<span class="product_price"> <?php echo $item['item_price']??0 ?></span>
                                </div>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id']??'1';?>">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                if (in_array($item['item_id'],$in_cart ?? [])){
                                    echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                                }else{
                                    echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                                }
                                ?>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            },$product_shuffle)
            ?>

        </div>
    </div>
</section>


<!--!spcial price-->
