<?php
require('connection.inc.php');
require('functions.inc.php');

	if(isset($_GET['type']) && $_GET['type']!=''){
		$type=get_safe_value($con,$_GET['type']);
		if($type=='status'){
			$operation=get_safe_value($con,$_GET['operation']);
			$id=get_safe_value($con,$_GET['id']);
			if($operation=='active'){
				$status='1';
			}else{
				$status='0';
			}
			$update_status_sql="update categories set status='$status' where id='$id'";
			mysqli_query($con,$update_status_sql);
		}
		
		if($type=='delete'){
			$id=get_safe_value($con,$_GET['id']);
			$delete_sql="delete from categories where id='$id'";
			mysqli_query($con,$delete_sql);
		}
	}

	$sql="select * from categories order by categories asc";
	$res=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="icon" type="image/png" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAKSElEQVR42u1ZeVRU5xUviolNoh6RRRZxw7iTtLhhbWNd0kStptG4YDEpiXWJG4laqcbdiFalxgU1Vot41CSiEgQVNARRCCqgIqjsKiCCgMMww+y/3vsOY8MZmPcGNfrH+51zz3AO8+537+/+7v2+782vZMiQIUOGDBkyZMiQIUPGE0Kn0/U3mUzHABSTHSXzelKfAFobjcaNdT4zyIa/iLnbUfKzABiqkq7jctAMPMq8BEIl2cim+qysrPQkQrOMahUuzVyH/N3RIJiIkMUvVPIqlSqAA7ux4r9Y6+yM1Y6O2ODujJwDm0HQkv3BVp+lpaXOlGiBMicTu7p0Yp+CxQyfCQb9b8kLkXxFRcVgAJqMVWFY4+iMqCG9kL+gO86M7ointrs64c3wvCBU2tINdfHx8S1JUsqa0CDu6umG3RxdkuK5BQvtPEezoYSbBZDAYxj/X5G/fvu1IlSgpjb6MDU6euOQaBOPaIcBWb8Fuznodmzu6CO1AUk4F0EKC32ZqtToEBgMO9u+Ob3q3g6LfHNR4fC9YoXsoNjl1xpX520BQkvV8XgQ0p0C/01cqsc2tL1JcFwsBmoJ9OfnHljG9G/YP8IJJp2HZrhcj9cGDByNZ4ednTkR4D0coPmgLpU8g+35sBe47BRJKTwrEXgFg/zykPwmEk0OnI7r91MfBGdcJCqhncWM64vy8CSDoyfo05vPMmTOvkqzvlMadQGhnJ1S83xbVTEC/Bey7nqW7rsBuzwEwafVM7LJfNPm4uLg2LP2CPTHY4zwASo8T/ydg+QgLAkz/9kZYPw88vHyWK3YBgF1D0q+url7P0t/fxxMFoxw4ecGUg6ZbEEBGxPvhxwlB5kH7+i9FAAe6hZnf02Eg7rrvqReUYeE4TtrCKpb3wqG3eoJBVQ5oYJ70IHI0lxYGIMG3LnkzAb+f1CABCo8I7HLxQWXSTSY2mv088+rn5OT0YsaT/vYlTeU5FkHp/v4hJ9ygpfh1QVbochDKyVr/fJ7U1taeVt/Nw6HeLpx0fQKGD2ffDVqu+1Yc8X7PTOyoZz74aM8/ri54gH1uQ8zSr2faiYGNEgBqhYhh3WBQKbhvV5pJLSoqGg5C7IQ/onCMgyUBo73Zd6MW6fIB8nadZBVkAmj2zKqfl5fXH4DpzDvzkO22ucFgaodu4GQbtftBPXF5eQAICjIH8mtP1b9YdSURZwc4csKWNsEJNZ4nGiXgocdhHOz2J7MKpj6z6rNMq2/cwTH3vzQajKp3GCdq1RKn9IJRXQ29Xr/h3r17o0CInzwMleM54YZN9WaYVRUkuX6GrPWHWQU5AJo/9epnZ2cPBOHU8Fkocv/aajCmrwZbJUAd3Ac3ty0GoYZOfNeVWem4OsKZErVCwLDNVtfkdjziNcasAv+nXn2lUvmdOu8+Ytz9eUHrBGyfLKqC3MUDYdJrwchcOJmTtE7A+4tE173iuhS5O75nFVx7mjuCXWpqqhcAfcKEpSj1OCAaiHHnF6IEGEO8UXIsBLX38lH4XntxAj6azL5FLdb3UxC4vd5+atWvqqraqq9S4VSnjyQFYYyN5iRFrWLTCJSEzOcERa12ywyousWIq8B9KSqTb7MKYp6GCuxWrlz5Cm1Z5emLdpsPPVZN1T0GUCuBbb8VJyGkL8r9PCURoP/hIDRTf+I1RGdB8oQ1IBhpaHd84lMf7dHTQEjo/7mk6mumpUDAt/6iBOiXeXFyksxUfg+60FxJMaR0/Sf4kkaFW/2kBNjTje+Hstg0uo+vlbS4fm8+BCTvECVA/XF7ScnXzOsHhjFTISkGPhekLdjJbVAEwK7J8o+MjHQDoLvkt4EcR0pa3FSkhoDyW1aTN/2rF5QSq68JXwEz1L5nJcWRPGgZGFRA3ybLv7i4eA4IaW+slrRo7ejzYNDQjAMjbHSjBOgWd5Ysf2NOKugIfg2ASbc2S1Ist902QXG9UDhsNVn+NTU1Z/mlQ7H7fyQtqtuZy31XERQU5AvAgAshVuTvIk3+s/qCkZ6ePp/iuWxMr+K1JNmNz/ZxG9xqym5gFxAQ0IoeVmUHHpK0mKpDFEx31VAoFAfoeWe6Miej7GbDBGzqY4v8OYnawMBA98zMzJWCrAdLa4Obb28HQ6vV9rBZ/levXhVuF4WjD0qT/5RkMOjIPIKef5UOT4vAODzJcvov7yZ9+hfngE6hR8nnyzNmzHiDyNDqtuVIiqmgSygMNbWg4/Z8mw8/JSUl6wwqDUq7SiPAcLKEmb5Nz7bg9hk6dKgXtUM1rn9jQYBmfgdJyau/eBeMwsLCd9knWbuHDx9GmR5ooOp0UkJckSg9+hPfDcJsbQN7GmTHlUn5kpJX+8QCehPKysqCWD111pZIDIdODewa0qTtT58cydXL9fHxaVGXQMvo6Gg/EDQzrkjbErck8Vyy+W7wEp2iMtQR0qSm35PHizwKCwtrxwvV2csbN258C4ARF7fWI6BmSjvx4TfnNyCnIBID6whlsApcaUe4Ycx4JCm2ys8TQNDS/HjJFgL47WyZaluG+PDzPgOoDSgvLw/h1vl5G5E509vjU1BXAKGDIBCwpa/koy/FUB4cHNzGXL26z9eSk5PnCSrwTxGNT/HXeDAePXrU2RYC+AdJhWZLpnj19xeAvxsREeFRX2bC37/evn37SAAGpISadwDxm1+gr1B9Oof8QyCyvk97BweHDqTQW8YsBVQdo6wXaFIiCNyeNv1Q24YlTfu69cn/TgILnANdIcjTEoIK6He+IzBogLAxpADrBCgnOsCQeZEHasHs2bNfs+xdoR1anTp16kNB28tvWIuRVWImoJtNCmCGDdEljTrmq6npZjU0Gk3W3LlzWzcyZITB5efn9ya3FIrT+JZodQZo9i8BwXTt2rWxTGAjPplsN2qvaNQYoB4a32ic2i8yBH+5ubnONs0AGj5hUOih8oq2TN4zCoYTxeD3+OfOnRtsEahlxdrGxsZ+AsDI26JmjkfD296qcYBBz9X6mgexmdRGSHiFiaWj7n1TrhKqPqcb3p4TylhNaUKMNqBFeHj4aO5dmvAW931DVAkIBqrSx/xdkS3Gru47brdu3doolOPCbtT4OdZ/4bGZFK2t5UNPwsCBA1ubJ78YsXv37v0znzdM2Uqof3euvvw/uQwGKWWVuD/L3nXJz8//CgTjhXJo12SCZ4KpTMOVr0lLS5vJ8pa4vwrbIlkH2o6+BJ8aijOgPbCEJB8Ew/UfwaisrIwZO3asC68vwa+5FZyoWONZCdAaoT9yF9rVmdBH3GO98SXqkuUskR6wZ2Ji4jyaB9kAdNzHhG937NgxhCe8jU7t6gjz2Ldv3ziqymkmksmgS05qSkrKXK6opOQinteXk7+/f786dO7tI7pQ5tDSbculXrOBp06a5i8hflASuSGcyL7KOZO1E+lNKwA5MLvts2bJlF/pszz1tkbx0n/xcKzJOlv11ZaJ5mIv4lOzc3nzG514SdSjus5nZZ501f0o+m7M/i1hlyJAhQ4YMGTJkyJAhQ0Z9/A/MGjKdMt/y6AAAAABJRU5ErkJggg=="
      sizes="64x64"/>
 <title>Online Shopping for Women, Men, Kids Fashion & Lifestyle - Myntra</title>
  <link href="categories.css" rel="stylesheet" type="text/css" />
  <link href="utils.css" rel="stylesheet" type="text/css" />
  <!--<link rel="stylesheet" href="style3.css">-->
  <script src="https://kit.fontawesome.com/72215895a8.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="topnav" id="myTopnav">
        <a href="#home" class="active">Home</a>
        <a href="categories.php" > Categories Master</a>
        <a href="product.php" > Product Master</a>
        <a href="#" > Order Master</a>
        <a href="users.php" > User Master</a>
        <a href="contact-us.php" > Contact Us</a>
         
        <a href="#about">About</a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
      </div>
      
     
      <div class="content pb-0">
        <div class="orders">
           <div class="row">
              <div class="col-xl-12">
                 <div class="card">
                    <div class="card-body">
                       <h4 class="box title">Categories </h4>
                       <h4 class="box-link"><a href="manage_categories.php">Add Categories</a> </h4>
                    </div>
                    <div class="card-body--">
                       <div class="table-stats order-table ov-h">
                          <table class="table ">
                             <thead>
                                <tr>
                                   <th class="serial">#</th>
                                   <th>ID</th>
                                   <th>Categories</th>
                                   <th></th>
                                </tr>
                             </thead>
                             <tbody>
                                <?php 
                                $i=1;
                                while($row=mysqli_fetch_assoc($res)){?>
                                <tr>
                                   <td class="serial"><?php echo $i?></td>
                                   <td><?php echo $row['id']?></td>
                                   <td><?php echo $row['categories']?></td>
                                   <td>
                                    <?php
                                    if($row['status']==1){
                                        echo "<span class='badge badge-complete'><a href='?type=status&operation=deactive&id=".$row['id']."'>Active</a></span>&nbsp;";
                                    }else{
                                        echo "<span class='badge badge-pending'><a href='?type=status&operation=active&id=".$row['id']."'>Deactive</a></span>&nbsp;";
                                    }
                                    echo "<span class='badge badge-edit'><a href='manage_categories.php?id=".$row['id']."'>Edit</a></span>&nbsp;";
                                    
                                    echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>";
                                    
                                    ?>
                                   </td>
                                </tr>
                                <?php } ?>
                             </tbody>
                          </table>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <footer class="site-footer">
       <div class="footer-inner bg-white">
          <div class="row">
             <div class="col-sm-6">
                Copyright &copy; <?php echo date('Y')?> Vishal Gupta
             </div>
             
          </div>
       </div>
    </footer>
 </div>
  </body>
  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
    </script>
  </html>
