<?php 
require('top.php');

if(isset($_GET['id'])){
	$product_id=mysqli_real_escape_string($con,$_GET['id']);
	if($product_id>0){
		$get_product=get_product($con,'','',$product_id);
	}else{
		?>
		<script>
		window.location.href='index.php';
		</script>
		<?php
	}
}else{
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}
?>

<section class="container section1 flex flex-wrap">
    <div class="product">
    <img src="<?php echo 'media/product/'.$get_product['0']['image']?>" alt="full-image">
    </div>
    <div class="about_product">
    <h2 id="heading_pro"><?php echo $get_product['0']['name']?></h2>
                                <ul  class="pro__prize  mar">
                                    <li class="old__prize" ><?php echo $get_product['0']['mrp']?></li>
                                    <li><?php echo $get_product['0']['price']?></li>
                                </ul>
    
    <p class="old__prize" ><?php echo $get_product['0']['short_desc']?></p>
	<p><span>Qty:</span> 
										<select id="qty">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
										</select>
										</p>
    <p><span>Categories:</span>&nbsp<span class="old__prize"><?php echo $get_product['0']['categories']?></sapn></p>
    <a class="add_to_cart" href="javascript:void(0)" onclick="manage_cart('<?php echo $get_product['0']['id']?>','add')">Add to cart</a>
    </div>

</section>

<script src="js/custom.js"></script>

</body>
</html>										


