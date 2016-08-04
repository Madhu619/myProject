
<?php
include("session.php");

?>


<!DOCTYPE HTML>
<html>
<head><title>Hemophilia Home</title>
<link rel="stylesheet" type="text/css" href="Style1.css" />
<style>
p
{
text-align:justify;
}
</style>
</head>
<body bgcolor=d0e4fe>

<style>
#header {height: 80px;width: 100%;z-index: 1000;
background: radial-gradient(blue,cyan,blue); /* Standard syntax */
}

.fixed {
position: fixed;left: 0;
-webkit-box-shadow: 0 7px 8px rgba(0, 0, 0, 0.12);
-moz-box-shadow: 0 7px 8px rgba(1, f, 0, 0.12);
box-shadow: 0 7px 8px rgba(0, 0, 0, 0.12);}

.inner {width: 940px;margin: 0 auto;height: 48px;}


.shadow{width: 100%;height: 5px;position: absolute;left: 0;bottom: -5px;z-index: 500;display: none;}
​</style>


<div id="header" class="fixed" style="display: block; top: 0px; ">

  <h1 style="color:#ff0"><center> Hemophilia an X-Linked Hierarchy </h1></center>	

</div>
<h2><a id="home"></a></h2>

<center>
<br/><br/><br/><br/><br/>
<?php echo "<h3 align='right'> Logged User : ".$_SESSION['login_user']."</h3>"; ?>
<div style="float:left"><h2 style="color:blue"><marquee>Hemophilia Genetics</marquee></h2></div>
<div style="float:right"><h4 align=right top><a href="logout.php">Sign Out</a></h4>       </div>
<br/><br/><br/><br/>
	<td>

<div class="drop" style="width:93%;">
<ul class="drop_menu">
<li><a href='#'>Home</a>
	<ul>
	<li align="left"><br/><a href='history.php'>History</a></li>
	<lialign="left"><br/><a href='symptoms.php'>Symptoms</a></li>
	</ul>
</li>
<!--<li><a href='#'>X-Linked</a>
	<ul>
	<li><a href='#'>Stage1</a></li>
	<li><a href='#'>Stage2</a></li>
	<li><a href='#'>Stage3</a></li>
	<li><a href='#'>Stage4</a></li>
	</ul>
</li>  -->
<li><a href='medicine.php'>Medicines</a>
	<ul>
	<li align="left"><a href='class1.php'>Class 1</a></li>
	<li align="left"><a href='class2.php'>Class 2</a></li>
	<li align="left"><a href='class3.php'>Class 3</a></li>
	
	</ul>
</li>
<li><a href='#'>Gallery</a>
	<ul>
	<li><a href='images.php'>Photos</a></li>
	<li><a href='video.php'>Videos</a></li>
	</ul>
</li>
<li><a href='contact.php'>Contact Us</a>
	
</li>


</ul>
</div>
<div style="border:1px solid black;width:60%;background:white;padding-left:20px;padding-right:20px;">
<br/><br/></td>
<center><p><h3>Basic Genetics </h3>   </center>  <p><center><img src="images/geneBasics.gif" width="366" height="398">
</center>             <p align="Left">To explain the hemophilia genetics, first you will               need to know a little about basic genetics. When a Father and a               Mother create a child the Mother gives one of the two X chromosomes               that she has. The Father gives either the X or the Y chromosome,               an X produces a girl, a Y produces a boy. So as illustrated above               they have a 50% chance of having a boy and a 50% chance of having               a girl.           

  <h3 align="center"> Hemophilia Genetics </h3>            <p><center><img src="images/geneHemophilia.gif" width="319" height="244">
</center></p>            <p align="Left">Hemophilia is carried on the X chromosome. It is called an X linked genetic disorder. A women who is a carrier for hemophilia has the genetic mutation on one of her X chromosomes as illustrated above. She will have another non mutated X chromosome that will usually somewhat compensate for the defect in the other. It is not uncommon for women who carry the hemophilia gene to have low levels of clotting factor and have bleeding problems. A man who has hemophilia has the genetic mutation on his only X chromosome. He does not have another X chromosome to compensate for the defect so he will have hemophilia. 2/3rds of the cases of hemophilia are inherited. The other 1/3 occur with no family history and are called spontaneous genetic mutations. The spontaneous genetic mutation may either occur in a female fetus or a male fetus. The female fetus will become a carrier of hemophilia. The male fetus will become a person affected by hemophilia.              

<h3 align="center"> Carrier Mother Genetics </h3>            <p><center><img src="images/geneFatherMother.gif" width="479" height="442">
</center></p>            <p align="Left"></p><p>When a Mother who is a carrier and an unaffected Father create a child there are four possible outcomes for each pregnancy. As illustrated above, they can have a son without hemophilia, a daughter who is not a carrier, a son with hemophilia or a daughter who is a carrier. With each pregnancy there is an equal chance of each of these outcomes. Whether the sons have hemophilia or the daughters are carriers depends upon which X chromosome they receive from the mother.   


           <h3 align="center"> Father with Hemophilia Genetics </h3>            <p><center><img src="images/geneFather.gif" width="381" height="421"></center></p>            <p align="Left">When a Father who has hemophilia and a unaffected by hemophilia create a child there are two possible outcomes for each pregnancy. The sons will always receive an unaffected X chromosome from the mother and an unaffected Y chromosome from the father resulting in sons all without hemophilia. The Daughters will always receive the hemophilia affected X chromosome from the father and an unaffected X chromosome from the mother resulting in daughters that are all carriers. Mother As illustrated above none of the sons will be affected by hemophilia and all of the daughters will be carriers.  

            <h3 align="center"> Father with Hemophilia and Mother Carrier Genetics             </h3>            <p><center><img src="images/geneMother.gif" width="467" height="426"></center>             </p>            <p align="Left"> This is a very rare situation. When a father who               has hemophilia and a mother who is a carrier create a child there               are four possible outcomes for each pregnancy. This depends on which               X or Y chromosome the children receive from the father and which               of the two X chromosomes the children receive from the mother. As               illustrated above they can have a son without hemophilia, a daughter               who has hemophilia, a son with hemophilia or a daughter who is a               carrier. With each pregnancy there is an equal chance of each of               these outcomes.             <p align="Left">&nbsp;            <p align="center">
<br/><br/><br/><br/></td>
	<td width="30px"></td>
</tr>
   </body>

<style>
td
{
    padding:0 25px 0 25px;
}
</style>
<center><table border="0" padding:0 15px 0 15px;> <td><a href='home.php'>Home</a></td><td><a href='medicine.php'> Medicine </a></td><td><a href='Gallery.php'> Gallery </a></td><td><a href='contact.php'>Contact </a></td></table>
<p><center> Copyright &copy;  RVCE,MCA-2015 : All rights reserved</p> 
<a href="#home"><center><img src="images/arrow19.png" /> </center></a>

	</html>
















