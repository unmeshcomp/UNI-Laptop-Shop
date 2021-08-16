<!--product-->
<?php
    $item_id=$_GET['item_id'] ?? 1;
    foreach ($product->getData()as $item) :
        if ($item['item_id']==$item_id):
?>
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['item_image']?? "./assets/products/a1.jpg" ?>" alt="product" class="img-fluid">
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="col">
                        <center>
                            <div>
                                <button style="width: 300px;" type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
                            </div>
                        </center>
                        <br>
                        <center>
                            <button style="width: 300px;" type="submit" class="btn btn-warning form-control">Add to Cart</button>
                        </center>


                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20"> <b> <?php echo $item['item_name']?? "Unknown"; ?></b> (13.3-inch/33.78 cm, Apple M1 chip with 8‑core CPU and 8‑core GPU, 8GB RAM, 256GB SSD) - Space Grey</h5>
                <small> <?php echo $item['item_brand']?? "Unknown"; ?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-rale font-size-14" style="color: darkgreen;">2,420 ratings | 100+ answered questions</a>
                </div>
                <hr class="m-0">

                <!---    product price       -->
                <table class="my-3">
                    <tr class="font-baloo font-size-14">
                        <td>M.R.P:</td>
                        <td><strike>₹ 2,70,990</strike></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Deal Price:</td>
                        <td class="font-baloo font-size-20 text-danger">₹<span> <?php echo $item['item_price']?? "0"; ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>You Save:</td>
                        <td><span class="font-baloo font-size-16 text-danger">₹ 30,000</span></td>
                    </tr>
                </table>
                <!---    !product price       -->
                <h4 style="color: darkgreen;">In stock.</h4>

                <!--    #policy -->
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">10 Days <br> Replacement</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-truck  border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">Daily Tuition <br>Deliverd</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">1 Year <br>Warranty</a>
                        </div>
                    </div>
                </div>
                <!--    !policy -->
                <hr>

                <!-- order-details -->
                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Delivery by : Mar 29  - Apr 1</small>
                    <small>Sold by <a href="#">Daily Electronics </a>(4.5 out of 5 | 2,420 ratings)</small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 424201</small>
                </div>
                <!-- !order-details -->

                <div class="row">
                    <div class="col-6">
                        <!-- color -->
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-baloo">Color:</h6>
                                <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                            </div>
                        </div>
                        <!-- !color -->
                    </div>
                    <div class="col-6">
                        <!-- product qty section -->
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Qty</h6>
                            <div class="px-4 d-flex font-rale">
                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                        <!-- !product qty section -->
                    </div>
                </div>

                <!-- size -->
                <div class="size my-3">
                    <h6 class="font-baloo">Size :</h6>
                    <div class="d-flex justify-content-between w-75">
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">128 GB</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">256 GB</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">1 TB</button>
                        </div>
                    </div>
                </div>
                <!-- !size -->


            </div>

            <div class="col-12">
                <h6 class="font-rubik">Product Description</h6>
                <hr>
                <p class="font-rale font-size-14">- Apple-designed M1 chip for a giant leap in CPU, GPU, and machine learning performance</p>
                <p class="font-rale font-size-14">- Get more done with up to 20 hours of battery life, the longest ever in a Mac</p>
                <p class="font-rale font-size-14">- 8-core CPU delivers up to 2.8x faster performance to fly through workflows quicker than ever</p>
                <p class="font-rale font-size-14">- 8-core GPU with up to 5x faster graphics for graphics-intensive apps and games</p>
                <p class="font-rale font-size-14">- 16-core Neural Engine for advanced machine learning</p>
                <p class="font-rale font-size-14">- 8GB of unified memory so everything you do is fast and fluid</p>
                <p class="font-rale font-size-14">- Superfast SSD storage launches apps and opens files in an instant</p>
                <p class="font-rale font-size-14">- 33.78cm (13.3-inch) Retina display with 500 nits of brightness for vibrant colors and incredible image detail</p>
            </div>
        </div>
    </div>
</section>

<!--!!product-->
<?php
        endif;
        endforeach;

?>
