<?php
    ob_start();
     //include header.php file
    include("header.php");

?>

<?php

    /* include banner area*/
    include("template/_banner-area.php");
    /* include banner area*/


    /* include Top Sale */
    include("template/_top-sale.php");
    /* include Top Sale */

    /* include special price */
    include("template/_special-price.php");
    /* include special price */

    /* include Banner adds */
    include("template/_banner-adds.php");
    /* include Banner adds */

    /* include New laptops */
    include("template/_new-laptops.php");
    /* include New laptops */

    /* include Blogs */
    include("template/_blogs.php");
    /* include Blogs */
?>

<?php
//include footer.php file
include("footer.php");
?>
