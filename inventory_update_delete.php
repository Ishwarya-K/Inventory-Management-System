<!DOCTYPE html>
<html>
<head>
<style>
		body {
		  margin: 0;
		background-color: WhiteSmoke;
			}
		}
		p{text-align:justify;}

		ul {
		  list-style-type: none;
		  margin: 25px;
		  padding: 0;
		  width: 20%;
		  background-color: DimGray;
		  position: fixed;
		  height: 100%;
		  overflow: auto;
		}

		li a {
		  display: block;
		  color: white;
		  padding: 8px 10px;
		  text-decoration: none;
		}

		li a.active {
		  background-color: DarkTurquoise;
		  color: white;
		}

		li a:hover:not(.active) {
		  background-color: #555;
		  color: white;
		}
		.dropdown-content {
 				display: none;
				position: absolute;
  				//min-width: 190px;
  				//box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  				//padding: 12px 15px;
  				//z-index: 10;
				}
		.dropdown:hover .dropdown-content {
 					 display: block;
					}
				#borderimg1 { 
						  border: 10px solid transparent;
						  padding: 15px;
						  border-image: url(border4.png) 20 round;}
					#borderimg2 { 
						  border: 10px solid transparent;
						  padding: 20px;
						  border-image: url(border5.png) 10 round;}
	#frm{  
		border: solid gray 1px;  
		width:30%;  
		border-radius: 2px;  
		margin: 90px auto;  
		background: beige;  
		padding: 50px;  
	}  
	#btn{  
		color: #fff;  
		background: #337ab7;  
		padding: 7px;  
		margin-left: 10%; 
	}
	#btn2{  
		color: #fff;  
		background: #337ab7;  
		padding: 7px;  
		margin-left: 10%; 
	}
		
					</style>
</head>
<body>

<ul>
		  <li style="font-size:2vw;"><a class="active" href="inventory_home.php"><b> Home</b></a></li>
		  <li style="font-size:2vw;"><a href="inventory_add_product.php">  Add product</a></li>
		  <li style="font-size:2vw;"><a href="inventory_view_product.php"> View product<img src="apieegif.gif" /></a>
		  <li style="font-size:2vw;"><a href="inventory_update_delete.php"> update product</a>
		  <li style="font-size:2vw;"><a href="inventory_report.php"> Report</a></li><br>
</ul>

<div style="margin-left:23%;padding:1px 16px;height:1000px;">
	<h1  style="text-shadow:2px 4px black;color:white;font-size:3vw;background-color:DarkTurquoise;border:1px inset gray;"><b><i><center><strong>TCE TALLY</strong></center></i></b></h1><hr>
	<!--</div>-->
	
	<center><?php include 'inventory_update_delete3.php';?></center>

</div>

</body>
</html>