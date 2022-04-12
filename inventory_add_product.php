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
	<!--//<div class="dropdown">-->
	<h1  style="text-shadow:2px 4px black;color:white;font-size:3vw;background-color:DarkTurquoise;border:1px inset gray;"><b><i><center><strong>TCE TALLY</strong></center></i></b></h1><hr>
	<!--</div>-->
	<div id = "frm">  
    <h1><center>ADD PRODUCT</center></h1> 
	<form name="f3" action = "add_product.php" method = "POST" onsubmit = "return validation()">  
            <p>  
                <b style="font-size:1.5vw;">Product name:</b><br>
				<center><input type="text" id="pname" name="pname" placeholder="Product name here"></center><br>
            </p>  
            <p>  
                <b style="font-size:1.5vw;">Product ID:</b><br>
				<center><input type="text" id="pid" name="pid" placeholder="Product ID here" pattern="TT[0-9]{3}" title="Should starts with 'TT' followed by three positive numbers"></center><br><br>  
            </p> 
			<p>  
                <b style="font-size:1.5vw;">Product quantity:</b><br>
				<center><input type="number" id="pq" name="pq" placeholder="Product quantity here" ></center><br><br>  
            </p>
			<p>  
                <b style="font-size:1.5vw;">Supplier name:</b><br>
				<center><input type="" id="sname" name="sname" placeholder="Supplier name here" ></center><br><br>  
            </p>
            <p>     
                <center><input type =  "submit" name = "login" id = "btn" value = "Add product" /></center>  <br><br>
            </p>  
        </form> 		
    </div>   
    <script>  
			
            function validation()  
            {  
                var pn=document.f3.pname.value;  
                var pID=document.f3.pid.value;  
				var pq=document.f3.pq.value;
				var sn=document.f3.sname.value;
				
                if(pn.length=="" && pID.length=="" && pq == 0 && sn.length == "") {  
                    alert("Fields are valid");  
                    return false;  
                }  
                else  
                {  
                    if(pn.length=="") {  
                        alert("Product name is empty");  
                        return false;  
                    }   
                    if (pID.length=="") {  
                    alert("Product ID is empty");  
                    return false;  
                    }  
					if(pq.length==0) {  
                        alert("Product quantity is not mentioned");  
                        return false;  
                    }
					if(sn.length=="") {  
                        alert("Supplier name is empty");  
                        return false;  
                    }
                }                             
            }  
        </script>  
</div>
</body>
</html>