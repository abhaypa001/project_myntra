<?php 
require('top.php');
$str=mysqli_real_escape_string($con,$_GET['str']);
if($str!=''){
	$get_product=get_product_fromname($con,'','','',$str);
}else{
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}										
?>

  <section class="container section1 flex flex-wrap">

    
    <div  class="container flex categoryBag">
  
    <?php if(count($get_product)>0){?>

                                <div class="grid-3">
                                <?php
											foreach($get_product as $list){
                                                ?>
                                                <div class="grid-3">
                                                  <a href="product.php?id=<?php echo $list['id']?>">
                                                  <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="product images" >
                                                            </a>
                                                            <h4 class="center-word pro_name"><a href="#"><?php echo $list['name']?></a></h4>
                                                            <ul class="pro__prize">
                                                                <li class="old__prize"><?php echo $list['mrp']?></li>
                                                                <li><?php echo $list['price']?></li>
                                                            </ul>
                                                            </div>
                                                       
                                
                              
                                <?php }?>   
    <?php } else { ?>
						<div  class="container flex categoryBag not_found">
                        <img src="not_found_image_2.jpg" alt="not found">
                         </div>
					<?php } ?>
 
    
   
    
    
    </section>
    <section class="tall">

    </section>
    <footer>
        Copyright &copy; myntra.com | All rights reserved
    </footer>
    <script src="script.js"></script>
</body>
</html>