<?php

require('top.inc.php');
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

   
      
     
      <div >
        <div >
           <div >
              <div >
                 <div >
                    <div  style="background-color:white;">
                       <h4 class="box title">Categories </h4>
                       <h4 class="box-link"><a href="manage_categories.php">Add Categories</a> </h4>
                    </div>
                    <div >
                       <div class="table-stats">
                          <table class="table">
                             <thead>
                                <tr>
                                   <th class="serial">#</th>
                                   <th>ID</th>
                                   <th>Categories</th>
                                   <th></th>
                                </tr>
                             </thead>
                             <tbody style="background-color:white;">
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
                                        echo "<span class='button-active'><a href='?type=status&operation=deactive&id=".$row['id']."'>Active</a></span>&nbsp;";
                                    }else{
                                        echo "<span class='button-deactive'><a href='?type=status&operation=active&id=".$row['id']."'>Deactive</a></span>&nbsp;";
                                    }
                                    echo "<span class='button-edit'><a href='manage_categories.php?id=".$row['id']."'>Edit</a></span>&nbsp;";
                                    
                                    echo "<span class='button-delete'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>";
                                    
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
    <div ></div>
    <footer >
       <div >
          <div >
             <div >
                Copyright &copy; <?php echo date('Y')?> Abhay pratap
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
