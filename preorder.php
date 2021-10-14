

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	
</head>
<body>
	<div class = "dropdown">
		

				<nav>

		<a href="studenthome.php"><img src="new_logo.png" class="logo"></a>
		<ul>
			<li ><a href="studenthome.php">Home</a></li>
			<li><a href="#">Order<i class="fas fa-caret-down"></i></a>
				<ul>
					<li><a href="quarantinedelivery.php" style="font-size: 14px">Quarantine Delivery</a></li>
					<li><a href="preorder.php" style="font-size: 14px">Pre-Order A-La-Carte</a></li>
					<li><a href="menu.php" style="font-size: 14px">View Our Menu</a></li>
					
				</ul>
			</li>
			<li><a href="#">Your Profile<i class="fas fa-caret-down"></i></a>
				<ul>
					<li><a href="viewstudentprofile.php" style="font-size: 14px">E-Mess Card</a></li>
					
				</ul>
		    </li>
		     <!-- <li><a href="#">Contact Us</a></li> -->
		    <li><a href="studentfeedback.php">Feedback</a></li>
		    <li><a href="logout.php">Logout</a></li>
		</ul>

		</nav>
		</div>
		<div>
			
			<form method="post" action="preorder1.php">
			<h3 style="margin-top: 100px; margin-left: 100px; font-size: 25px"> Enter SNU ID <input type="text" name="id" class="form control" style="margin-left: 10px;  font-size: 25px"></h3>
			<h1 style="margin-left: 100px;  font-size: 25px">What would you like to Order? <!--<input type="submit" name="submit" value="Selected">--><?php
             include "preorder2.php";

            // echo "<datalist id='food items' >";
             $sq1 = "SELECT category FROM fooditems where food_item_no = '1' OR food_item_no = '21' OR food_item_no = '51'";


             $query=mysqli_query($con,$sq1);
             //echo "<input type='search' list='dtlist2' name = 'dtlist2'/> ";
             echo "<select name = 'option'>";
             while($row=mysqli_fetch_array($query))
             {
                echo "<option>$row[category]</option>";
             } 
             echo " </select>";



            ?></h1>
            
        	
        	
			
			<h3 style="margin-left: 100px; font-size: 25px" >View our menu here:  <a href="https://drive.google.com/file/d/1XCSVNnYh0gqwp5wgerZVBxFzVOUkt76G/view?usp=sharing" target="_blank">click</a></h3>
			<h3 style="margin-left: 100px; font-size: 25px"> Kindly order 2 food items from the menu</h3>
			<h3 style="margin-left: 100px; font-size: 25px">Food item 1 <?php
             //include "preorder1.php";

            // echo "<datalist id='food items' >";
             $sq1 = "SELECT food_item_no FROM fooditems ";
             

             $query=mysqli_query($con,$sq1);
             //echo "<input type='search' list='dtlist1'/> ";
             echo "<select name='fooditem1'>";
             while($row=mysqli_fetch_array($query))
             {
                echo "<option>$row[food_item_no]</option>";
             }
             echo " </select>";
             

            ?>			</h3>
			<h3 style="margin-left: 100px; font-size: 25px"> Quantity <input type="text" name="quantity1" class="form control" style="margin-left: 10px;  font-size: 25px"></h3>
			<h3 style="margin-left: 100px; font-size: 25px">Food item 2 <?php
             //include "preorder1.php";

            // echo "<datalist id='food items' >";
             $sq1 = "SELECT food_item_no FROM fooditems ";


             $query=mysqli_query($con,$sq1);
             //echo "<input type='search' list='dtlist1'/> ";
             echo "<select name='fooditem2'>";
             while($row=mysqli_fetch_array($query))
             {
                echo "<option>$row[food_item_no]</option>";
             }
             echo " </select>";

            ?></h3>
			<h3 style="margin-left: 100px; font-size: 25px"> Quantity <input type="text" name="quantity2" class="form control" style="margin-left: 10px;  font-size: 25px"></h3>
			<button type ="submit" class="btn btn-primary" name = "proceed"style="margin-left: 100px; font-size: 25px; background-color: white"> Proceed to checkout 
				
					
				</button><br><br><br>
		</form>
				


				
			


			
		</div>	

	
</body>
</html>