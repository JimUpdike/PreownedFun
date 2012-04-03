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
			<a href="naviBar.php?Column=Condition&&Type=Fair">Fair </a>
		</li>
		 <li class=browseLI>
			<a href="naviBar.php?Column=Condition&&Type=Acceptable">Acceptable </a>
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
			<a href="naviBar.php?Column=Platform&&Type=Nintendo Entertainment System">Nintendo Entertainment System (NES)</a>
		</li>
			<br/>
		 <li class=browseLI>
			<a href="naviBar.php?Column=Platform&&Type=Super Nintendo">Super Nintendo Entertainment System (SNES)</a>
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
<?php
 	if (isset($_SESSION['navDisplay'][0] )||isset($_SESSION['navDisplay'][1]) || isset($_SESSION['naviDisplay'][2]) ){
		$nowDis = "Narrowed diplayed games to games with:";
		$moreThanone1 = False;
		if (isset($_SESSION['navDisplay'][0]) ){
			$nowDis = $nowDis.$_SESSION['navDisplay'][0];
		$moreThanone1 = true;
		}
		if (isset($_SESSION['navDisplay'][1]) ){
			if ($moreThanone1 == true){
				$nowDis = $nowDis.', ';
			}	
			$nowDis = $nowDis.$_SESSION['navDisplay'][1];
		$moreThanone1 = true;
		}
		if (isset($_SESSION['navDisplay'][2] )){
			if ($moreThanone1 == true){
				$nowDis = $nowDis.', ';
			}	
			$nowDis = $nowDis.$_SESSION['navDisplay'][2];
		$moreThanone1 = true;
		}
		echo $nowDis;
	}
?>
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
			$query = "SELECT merch.*, users.username, game_info.*, for_sale.* from for_sale INNER JOIN users INNER JOIN game_info INNER JOIN merch on for_sale.seller_id = users.user_id and merch.merch_id = for_sale.merch_id and game_info.game_id = merch.game_id";

		}	
		$display = mysqli_query($db, $query) or die($query);
	while($row = mysqli_fetch_array($display)){	 
	$game_id = $row['game_id'];
	$i = 0;
	$post_id = $row['merch_id'];
	$title = $row['title'];
	$href = "<a href=gamePost.php?id=$post_id>$title</a>";
	$condition = $row['cond'];
 	$price = $row['price'];
	$seller = $row['username'];
	$seller_id = $row['seller_id'];
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
	echo"<tr>$td $href </td> $td $condition </td> $td $$price </td> $td $sellerLink </td> </tr>";
//$td $seller_rating </td></tr>";	 
	$i++;
}
		?>

	   </table>
</div>
</html>
