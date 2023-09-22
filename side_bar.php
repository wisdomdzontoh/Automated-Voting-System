<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color:lightslategrey;color:white;">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#" style="color:white;">SELECT YOUR CANDIDATE</a>
  </div>
</nav>

      

            
            
				<?php 
					require 'admin/dbcon.php';
					$query = $conn->query("SELECT * from voters where voters_id ='$_SESSION[id]'")or die (mysqli_errno ());
					$row = $query->fetch_array();
				?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style = "color:white;font-size:14pt;">
						<i class="fa fa-arrow fa-fw"></i> <?php echo $row['firstname']." ".$row['lastname'];?>
					</a>
                </li>
            </ul>
            