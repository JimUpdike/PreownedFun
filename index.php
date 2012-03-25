<html xmlns="http://www.w3.org/1999/xhtml">
<?php 
session_start();
include "template.php"; ?>
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
		    <br/>
			<li class=browseLIHeader>
			Platform
		 </li>
		 <li class=browseLI>
			<a href="naviBar.php?Column=Platform&&Type=Nintendo Entertainment System (NES)">Nintendo Entertainment System (NES)</a>
		</li>
			<br/>
		 <li class=browseLI>
			<a href="naviBar.php?Column=Platform&&Type=Super Nintendo Entertainment System (NES)">Super Nintendo Entertainment System (SNES)</a>
		</li>
			<br/>
		 <li class=browseLI>
			<a href="naviBar.php?Column=Platform&&Type=Sega Saturn">Sega Saturn</a>
		</li>
			<br/>

		 <li class=browseLI>
			<a href="naviBar.php?Column=Platform&&Type=Dreamcast">Dreamcast</a>
		</li>
			<br/>
		 <li class=browseLI>
			<a href="naviBar.php?Column=Platform&&Type=Nintendo 64">Nintendo 64</a>
		</li>
			<br/>
		 <li class=browseLI>
			<a href="naviBar.php?Column=Platform&&Type=Gamecube">Gamecube</a>
		</li>	
			<br/>
		 <li class=browseLI>
			<a href="naviBar.php?Column=Platform&&Type=Gameboy Advance">Gameboy Advance</a>
		</li>	
			<br/>
		 <li class=browseLI>
			<a href="naviBar.php?Column=Platform&&Type=Nintendo Wii">Nintendo Wii</a>
		</li>	
			<br/>
		 <li class=browseLI>
			<a href="naviBar.php?Column=Platform&&Type=Nintendo DS">Nintendo DS</a>
		</li>	
			<br/>
		 <li class=browseLI>
			<a href="naviBar.php?Column=Platform&&Type=Playstation 3">Playstation 3</a>
		</li>	
			<br/>
		 <li class=browseLI>
			<a href="naviBar.php?Column=Platform&&Type=Playstation 2">Playstation 2</a>
		</li>	
			<br/>
		 <li class=browseLI>
			<a href="naviBar.php?Column=Platform&&Type=Playstation 1">Playstation 1</a>
		</li>	
			<br/>
		 <li class=browseLI>
			<a href="naviBar.php?Column=Platform&&Type=Xbox">Xbox</a>
		</li>	
			<br/>
		 <li class=browseLI>
			<a href="naviBar.php?Column=Platform&&Type=Xbox 360">Xbox 360</a>
		</li>	
			<br/>
		 <li class=browseLI>
			<a href="naviBar.php?Column=Platform&&Type=Computer">Computer</a>
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
	   </tr>
	  <?php
	include "db_connect.php";
		if (isSet($_SESSION['dbNav'])){
			 $query =  $_SESSION['dbNav'];
		}
		else{
			$query = "Select merch.*, users.username from for_sale INNER JOIN users ON for_sale.seller_id = users.user_id NATURAL JOIN merch";
		}	
		$display = mysqli_query($db, $query)
				 or die ("ERROR SELECTING 1");
	while($row = mysqli_fetch_array($display)){	 
	$game_id = $row['game_id'];
		$query_game = "select * from game_info where game_id = $game_id";
		$display2 =mysqli_query($db, $query_game);
	$i = 0;
	while($row2 = mysqli_fetch_array($display2))
	{
	$post_id = $row['merch_id'];
	$title = $row2['title'];
	$href = "<a href=gamePost.php?id=$post_id>$title</a>";
	$condition = $row['cond'];
 	$price = $row['price'];
	$seller = $row['username'];
//	$seller_rating = $row['rating'];
//	if ($seller_rating == -1){
//	 $seller_rating = "Not Rated";
//	}
	if ($i % 2 == 0){
		$td = "<td class=off>";
	}
else {
	$td = "<td>";
}
	$sellerLink = "<a href='profile.php?username=$seller'>$seller<a>";
	echo"<tr>$td $href </td> $td $condition </td> $td $price </td> $td $sellerLink </td> </tr>";
//$td $seller_rating </td></tr>";	 
	$i++;
}
}
		?>

	   </table>
</div>
</html>
