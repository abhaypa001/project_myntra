<?php
require('connection.inc.php');
require('functions.inc.php');
$cat_res=mysqli_query($con,"select * from categories where status=1 order by categories asc");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res)){
	$cat_arr[]=$row;	
}
?>>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="icon" type="image/png" href="data:image/png;base64,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"
      sizes="64x64"/>
 <title>Online Shopping for Women, Men, Kids Fashion & Lifestyle - Myntra</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link href="utils.css" rel="stylesheet" type="text/css" />
  <!--<link rel="stylesheet" href="style3.css">-->
  <script src="https://kit.fontawesome.com/72215895a8.js" crossorigin="anonymous"></script>
</head>
<body>
  <header class="containerHeader">
    <nav class="flex space-between">
      <div class="left flex items-center">
  <img src="https://upload.wikimedia.org/wikipedia/commons/b/bc/Myntra_Logo.png"/>
        <ul id = "navbar" class="flex items-center justify-center uppercase semibold">
          <li id="megamenu_container"><a href="men.php">men</a></li>
            <li><a href="women.php">women</a></li>
            <li><a href="#">kids</a></li>
             </ul>
      </div>
      <div class="right flex items-center">
       
       <form action="search.php" method="get">
       <input class="search" name="str" placeholder="Search for products, brands and more" class="desktop-searchBar" value="" data-reactid="904">
                                   <button type="submit"></button>
                               </form>
          <div class="rightBox">
          <div class="profile mx-2 " id="reggDropdown">
          <div id="drop">
            <a href="profile/profile.html" class="dropList">login</a>
            <a href="profile/signup.html" class="dropList">sign up</a>
        </div>
        <i class="fa-regular fa-user"></i>
          <span>profile</span></div>
        <div class="wishlist mx-2"><i class="fa-regular fa-heart"></i>
          <span>wishlist</span></div>
        <div class="bag mx-2 fa-solid "> <a href="cart.php"><i class="fa-solid fa-bag-shopping"></i>
          <span>bag</span></a></div>
          </div>
          
        
      </div>
      
  </div>
    </nav>
  </header>

    <section class="container section1">
        <img class="homeImg" src="menwatch.html" />

    </section>
    <section class="container section1 flex flex-wrap">
        <h1 class="brand_heading">categories to bag</h1>
        <div id="category_to_Bag" class="container flex">
            <div class="grid-3"><img src="https://bit.ly/3DnfTst"></div>
            <div class="grid-3"><img src="https://bit.ly/3uB2WHQ"></div>

            <div class="grid-3"><img src="https://bit.ly/3uEEhC2"></div>
            <div class="grid-3"><img
                    src="watchlog.jfif">
            </div>
        </div>
</section>
        <section class="container section1 flex flex-wrap">

<div  class="container flex"><h1 class="brand_heading inc_mar">tshirt</h1></div>
<div  class="container flex categoryBag">
<?php
							$get_product=get_product($con,'',5);
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
<section class="container section1 flex flex-wrap">

<div  class="container flex"><h1 class="brand_heading inc_mar">shirt</h1></div>
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