<?php
require('top.php');
?>
<section class="container section1">
  
  <img class="homeImg" src="https://assets.myntassets.com/f_webp,w_980,c_limit,fl_progressive,dpr_2.0/assets/images/2022/5/13/e34b394c-36b1-4774-8639-5aeb2c5716121652442642122-DK-TSHIRT-67--1-.gif"/>
  <img class="homeImg" src="https://assets.myntassets.com/f_webp,w_980,c_limit,fl_progressive,dpr_2.0/assets/images/2022/5/7/1e599d37-1ed6-4e39-9057-ffb4065173b51651897264796-Unbelievable-Deals.jpg"/>
</section>
<section class="container section1 flex flex-wrap">

<div  class="container flex"><h1 class="brand_heading">shirt</h1></div>
<div  class="container flex categoryBag">
<?php
							$get_product=get_product($con,'',5);
							foreach($get_product as $list){
							?>
                            <div class="grid-3">
                              <a href="product.php?id=<?php echo $list['id']?>">
                                            <img  src="<?php echo 'media/product/'.$list['image']?>" alt="product images" >
                                        </a>
                                        <h4 class="center-word pro_name"><a href="#"><?php echo $list['name']?></a></h4>
                                        <ul class="pro__prize">
                                            <li class="old__prize"><?php echo $list['mrp']?></li>
                                            <li><?php echo $list['price']?></li>
                                        </ul>
                                        </div>
                                   
            
          
            <?php }?>   
</div>

</section>
<section class="container section1 flex flex-wrap">

<div  class="container flex"><h1 class="brand_heading">shirt</h1></div>
<div  class="container flex categoryBag">
<?php
							$get_product=get_product($con,'',6);
							foreach($get_product as $list){
							?>
                            <div class="grid-3">
                              <a href="product.php?id=<?php echo $list['id']?>">
                                            <img  src="<?php echo 'media/product/'.$list['image']?>" alt="product images" >
                                        </a>
                                        <h4 class="center-word pro_name"><a href="product-details.html"><?php echo $list['name']?></a></h4>
                                        <ul class="pro__prize">
                                            <li class="old__prize"><?php echo $list['mrp']?></li>
                                            <li><?php echo $list['price']?></li>
                                        </ul>
                                        </div>
                                   
            
          
            <?php }?>   
</div>

</section>

<section class="tall">
  
</section>
<footer>
  Copyright &copy; myntra.com | All rights reserved
</footer>
<script src="script.js"></script>
</body>

</html>
        
   