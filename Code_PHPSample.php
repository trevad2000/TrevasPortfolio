<?php /* updated on 02/12/2019 */ ?>

<table width="100%" border="0" cellspacing="0" cellpadding="20">

        		<tr> 			

          			

          			<td width="90%" valign="top" >

					

					<h3>Cobb County Board of Elections and Registration	</h3> 

<h4 >Approved Minutes</h4>     

<p>

					Please click on the desired date to download the PDF containing that meeting's Minutes.  	 </p>



<hr />



		<?php


$connect = mysqli_connect("localhost","databasehost","password","database");

if ($connect->connect_errno)
{
echo "Failed to connect to MySQL Database: (" . $connect->connect_errno . ") " . $connect->connect_errno;
exit();

}
$year = mysqli_real_escape_string($connect, $_GET['year']);

$query2019 = "SELECT * FROM BoardMinutes where year = '2019' ORDER BY year ASC, id ASC";
$query2018 = "SELECT * FROM BoardMinutes where year = '2018' ORDER BY year ASC, id ASC";
$query2017 = "SELECT * FROM BoardMinutes where year = '2017' ORDER BY year ASC, id ASC";
$query2016 = "SELECT * FROM BoardMinutes where year = '2016' ORDER BY year ASC, id ASC";
$query2015 = "SELECT * FROM BoardMinutes where year = '2015' ORDER BY year ASC, id ASC";
$query2014 = "SELECT * FROM BoardMinutes where year = '2014' ORDER BY year ASC, id ASC";
$query2013 = "SELECT * FROM BoardMinutes where year = '2013' ORDER BY year ASC, id ASC";
$query2012 = "SELECT * FROM BoardMinutes where year = '2012' ORDER BY year ASC, id ASC";
$query2011 = "SELECT * FROM BoardMinutes where year = '2011' ORDER BY year ASC, id ASC";

$result2019 = mysqli_query($connect, $query2019);
$result2018 = mysqli_query($connect, $query2018);
$result2017 = mysqli_query($connect, $query2017);
$result2016 = mysqli_query($connect, $query2016);
$result2015 = mysqli_query($connect, $query2015);
$result2014 = mysqli_query($connect, $query2014);
$result2013 = mysqli_query($connect, $query2013);
$result2012 = mysqli_query($connect, $query2012);
$result2011 = mysqli_query($connect, $query2011);

/* 2019 MINUTES */

if ($year = 2019)
{
echo "
     
	 
<div style='float: left; height: 450px; margin-right: 20px;'>
<table width='175'>
	
<tr >
	<td style='background-color: #a6a6a9; text-align: center; padding: 10px 10px 20px 10px '> <h4 style='color: white'>
 
{$year} </h4></td>
		
	</tr>" ;

}
		
 while ($num = mysqli_fetch_array($result2019)){
	
   		echo "
    

 	<tr>

		 <td valign='top' nowrap='nowrap'> 

		 <a href='pdf/BoardMinutes/{$num['year']}/{$num['pdf']}' target='_blank' style='font-size:14px; margin-left: 10px'> {$num['month']} {$num['date']}, {$num['year']}</a>

		 

		</td>

		 	</tr>
	";

	
 }



 mysqli_free_result($result2019);
{

echo "

</table>
</div>	";
}



/* 2018 MINUTES */

if ($year = 2018)
{
echo "
     
	 
<div style='float: left; height: 450px; margin-right: 20px;'>
<table width='175'>
	
<tr >
	<td style='background-color: #a6a6a9; text-align: center; padding: 10px 10px 20px 10px '> <h4 style='color: white'>
 
{$year} </h4></td>
		
	</tr>" ;

}
		
 while ($num = mysqli_fetch_array($result2018)){
	
   		echo "
    

 	<tr>

		 <td valign='top' nowrap='nowrap'> 

		 <a href='pdf/BoardMinutes/{$num['year']}/{$num['pdf']}' target='_blank' style='font-size:14px; margin-left: 10px'> {$num['month']} {$num['date']}, {$num['year']}</a>

		 

		</td>

		 	</tr>
	";

	
 }



 mysqli_free_result($result2018);
{

echo "

</table>
</div>	";
}




/* 2017 MINUTES */

if ($year = 2017)
{
echo "
     
	 
<div style='float: left; height: 450px; margin-right: 20px;'>
<table width='175'>
	
<tr >
	<td style='background-color: #a6a6a9; text-align: center; padding: 10px 10px 20px 10px '> <h4 style='color: white'>
 
{$year} </h4></td>
		
	</tr>" ;

}
		
 while ($num = mysqli_fetch_array($result2017)){
	
   		echo "
    

 	<tr>

		 <td valign='top'  nowrap='nowrap'> 

		 <a href='pdf/BoardMinutes/{$num['year']}/{$num['pdf']}' target='_blank' style='font-size:14px; margin-left: 10px'> {$num['month']} {$num['date']}, {$num['year']}</a>

		 

		</td>

		 	</tr>
	";

	
 }



 mysqli_free_result($result2017);
{

echo "

</table>
</div>	";
}





/* 2016 MINUTES */


if ($year = 2016)
{
echo "
     
	 
<div style='float: left; height: 450px; margin-right: 20px;'>
<table width='175'>
	
<tr >
	<td style='background-color: #a6a6a9; text-align: center; padding: 10px 10px 20px 10px '> <h4 style='color: white'>
 
{$year} </h4></td>
		
	</tr>" ;

}
		
 while ($num = mysqli_fetch_array($result2016)){
	
   		echo "
    

 	<tr>

		 <td valign='top' nowrap='nowrap'> 

		 <a href='pdf/BoardMinutes/{$num['year']}/{$num['pdf']}' target='_blank' style='font-size:14px; margin-left: 10px'> {$num['month']} {$num['date']}, {$num['year']}</a>

		 

		</td>

		 	</tr>
	";

	
 }



 mysqli_free_result($result2016);
{

echo "

</table>
	</div>";
}




/* 2015 MINUTES */

if ($year = 2015)
{
echo "
     
	 
<div style='float: left; height: 450px; margin-right: 20px;'>
<table width='175'>
	
<tr >
	<td style='background-color: #a6a6a9; text-align: center; padding: 10px 10px 20px 10px '> <h4 style='color: white'>
 
{$year} </h4></td>
		
	</tr>" ;

}
		
 while ($num = mysqli_fetch_array($result2015)){
	
   		echo "
    

 	<tr>

		 <td valign='top' nowrap='nowrap'> 

		 <a href='pdf/BoardMinutes/{$num['year']}/{$num['pdf']}' target='_blank' style='font-size:14px; margin-left: 10px'> {$num['month']} {$num['date']}, {$num['year']}</a>

		 

		</td>

		 	</tr>
	";

	
 }



 mysqli_free_result($result2015);
{

echo "

</table>
	</div>";
}



/* 2014 MINUTES */

if ($year = 2014)
{
echo "
     
	<div style='float: left; height: 450px; margin-right: 20px;'>
<table width='175'>
	
<tr >
	<td style='background-color: #a6a6a9; text-align: center; padding: 10px 10px 20px 10px '> <h4 style='color: white'>
 
{$year} </h4></td>
		
	</tr>" ;

}
		
 while ($num = mysqli_fetch_array($result2014)){
	
   		echo "
    

 	<tr>

		 <td valign='top' nowrap='nowrap'> 

		 <a href='pdf/BoardMinutes/{$num['year']}/{$num['pdf']}' target='_blank' style='font-size:14px; margin-left: 10px'> {$num['month']} {$num['date']}, {$num['year']}</a>

		 

		</td>

		 	</tr>
	";

	
 }



 mysqli_free_result($result2014);
{

echo "

</table>
</div>
";
}



/* 2013 MINUTES */

if ($year = 2013)
{
echo "
     
<div style='float: left; height: 450px; margin-right: 20px;'>
<table width='175'>
	
<tr >
	<td style='background-color: #a6a6a9; text-align: center; padding: 10px 10px 20px 10px '> <h4 style='color: white'>
 
{$year} </h4></td>
		
	</tr>" ;

}
		
 while ($num = mysqli_fetch_array($result2013)){
	
   		echo "
    

 	<tr>

		 <td valign='top' nowrap='nowrap'> 

		 <a href='pdf/BoardMinutes/{$num['year']}/{$num['pdf']}' target='_blank' style='font-size:14px; margin-left: 10px'> {$num['month']} {$num['date']}, {$num['year']}</a>

		 

		</td>

		 	</tr>
	";

	
 }



 mysqli_free_result($result2013);
{

echo "

	</table>
</div>";
}




/* 2012 MINUTES */

if ($year = 2012)
{
echo "
     
	 
<div style='float: left; height: 450px; margin-right: 20px;'>
<table width='175'>
	
<tr >
	<td style='background-color: #a6a6a9; text-align: center; padding: 10px 10px 20px 10px '> <h4 style='color: white'>
 
{$year} </h4></td>
		
	</tr>" ;

}
		
 while ($num = mysqli_fetch_array($result2012)){
	
   		echo "
    

 	<tr>

		 <td valign='top' nowrap='nowrap'> 

		 <a href='pdf/BoardMinutes/{$num['year']}/{$num['pdf']}' target='_blank' style='font-size:14px; margin-left: 10px'> {$num['month']} {$num['date']}, {$num['year']}</a>

		 

		</td>

		 	</tr>
	";

	
 }



 mysqli_free_result($result2012);
{

echo "

</table>
</div>
";
}



/* 2011 MINUTES */

if ($year = 2011)
{
echo "
     <div style='float: left; height: 450px; margin-right: 20px;'>
<table width='175'>
	
<tr>
	<td style='background-color: #a6a6a9; text-align: center; padding: 10px 10px 20px 10px '> <h4 style='color: white'>
 
{$year} </h4></td>
		
	</tr>" ;

}
		
 while ($num = mysqli_fetch_array($result2011)){
	
   		echo "
    

 	<tr>

		 <td valign='top' nowrap='nowrap'> 

		 <a href='pdf/BoardMinutes/{$num['year']}/{$num['pdf']}' target='_blank' style='font-size:14px; margin-left: 10px'> {$num['month']} {$num['date']}, {$num['year']}</a>

		 

		</td>

		 	</tr>
	";

	
 }



 mysqli_free_result($result2011);
{

echo "

</table>
	</div>";
}
mysqli_close($connect);


?>


						

			</td></tr></table>		</td></tr></table>