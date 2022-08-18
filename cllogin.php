
<?php

	

	$con=mysqli_connect('localhost','root','','event');



	$username=$_POST['username'];
	$password=$_POST['password'];
	


	$query="SELECT * FROM `clgreg` WHERE `username`=`$username`AND `password`=`$password`";
	$run=mysqli_query($con,$query);

	if($run==true)
	{
		echo "<script>alert('Successfully Login');</script>";
	}
	else {
		
		echo "<script>alert('username or password not Match'); window.open('collogin.html''_self');     </script>";
	}



	

?>


<?php 
				$con=mysqli_connect('localhost','root','','event');  //connect with database
				 
				function showData(){
					global $con;
					$query="SELECT * FROM `cllogin`";
					$run=mysqli_query($con,$query);                       //Exicute query
                    
					if($run==true)
					{
						?>
						   <div class="row justify-content-center">
								<table class="table" style="color:white">
						<thead class="thead-dark">
						<tr>
                            <th>Username</th>
							<th>Password</th>
							
							
							

						</tr>
						</thead>
						
						<?php
						while($data=mysqli_fetch_assoc($run))
						{
							?>
						
								<tr>
                                    <td><?php echo $data['username']; ?></td>
									<td><?php echo $data['password']; ?></td>
									
                                    
								</tr>
							
							 
							<?php
							
							
						}
						?>		</table>
							</div>
						<?php
					}
					else{
						echo "error";
					}
				}
		   ?>
		 
			
			
			<?php showData();?>