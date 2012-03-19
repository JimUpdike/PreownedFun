<html xmlns="http://www.w3.org/1999/xhtml">
<?php include "template.php"; ?>
<div id="left">
<i><b><u>Browse Box</u></b></i>
		<ul class=browseUL>
		<li class=browseLIHeader>
			Price:
		 </li>
		 <li class=browseLI>
		<a href="naviBar.php?Column=Price&&Type=0.00">	$0.00-9.99</a>
			</li>
			<li=browseLI>
		<a href="naviBar.php?Column=Price&&Type=10.00">	$10.00-19.99</a>
			</li>
			<li=browseLI>
		<a href="naviBar.php?Column=Price&&Type=20.00">	$20.00-29.99</a>
			</li>
			<li=browseLI>
		<a href="naviBar.php?Column=Price&&Type=30.00">	$30.00-39.99</a>
			</li>
			<li=browseLI>
		<a href="naviBar.php?Column=Price&&Type=40.00">	$40.00-49.99</a>
			</li>
			<li=browseLI>
		<a href="naviBar.php?Column=Price&&Type=50.00">	$50.00-59.99</a>
			</li>
			<li=browseLI>
		<a href="naviBar.php?Column=Price&&Type=60.00">	$60.00-69.99</a>
			</li>
			<li=browseLI>
		<a href="naviBar.php?Column=Price&&Type=70.00">	$70.00-79.99</a>
			</li>
			<li=browseLI>
		<a href="naviBar.php?Column=Price&&Type=80.00">	$80.00-89.99</a>
			</li>

			<li=browseLI>
		<a href="naviBar.php?Column=Price&&Type=90.00">	$90.00-99.99</a>
			</li>
			</br>
			<li=browseLI>
		<a href="naviBar.php?Column=Price&&Type=100.00">$100.00+</a>
			</li>
		   </li>
		    <br/>
			<li class=browseLIHeader>
			Condition
		 </li>
		
		 <li class=browseLI>
			<a href="naviBar.php?Column=Condition&&Type=Poor">Poor </a>
		</li>
		 <li class=browseLI>
			<a href="naviBar.php?Column=Condition&&Type=Mediocre">Mediocre </a>
		</li>
		 <li class=browseLI>
			<a href="naviBar.php?Column=Condition&&Type=Fair">Fair </a>
		</li>
		 <li class=browseLI>
			<a href="naviBar.php?Column=Condition&&Type=Good">Good </a>
		</li>
		 <li class=browseLI>
			<a href="naviBar.php?Column=Condition&&Type=Great">Great </a>
		</li>
		 <li class=browseLI>
			<a href="naviBar.php?Column=Condition&&Type=Mint">Mint </a>
		</li>
		</ul>

<br/>
	
<?php
 if (isset($_SESSION['dbNav'])){
		echo '<a href="removeNavigation.php"> Remove Navigation </a>';
	}
?>
</div>
<div id="right">
       <table class="displayTable">
	   <tr>
	   <th> Name </th>
	   <th> Quality </th>
	   <th> Price </th>
	   <th> Seller </th>
	   <th> Seller Rating </th>
	   </tr>
	  <?php
	include "db_connect.php";
		if (isSet($_SESSION['dbNav'])){
			 $query =  $_SESSION['dbNav'];
		}
		else{
			$query = "Select currentPostings.*, userRep.username, userRep.rating from currentPostings INNER JOIN userRep ON currentPostings.seller_id = userRep.id";
		}	
		$display = mysqli_query($db, $query)
				 or die ("ERROR SELECTING");
		
	
	$i = 0; 
	while($row = mysqli_fetch_array($display)){
	$post_ID = $row['post_id'];
	$title = $row['gameName'];
	$href = "<a href=gamePost.php?id=$post_ID>$title</a>";
	$condition = $row['cond'];
 	$price = $row['price'];
	$seller = $row['username'];
	$seller_rating = $row['rating'];
	if ($seller_rating == -1){
	 $seller_rating = "Not Rated";
	}
	if ($i % 2 == 0){
		$td = "<td class=off>";
	}
else {
	$td = "<td>";
}
	echo"<tr>$td $href </td> $td $condition </td> $td $price </td> $td $seller </td> $td $seller_rating </td></tr>";	 
	$i++;
}
		?>

	   </table>
</div>
</html>
