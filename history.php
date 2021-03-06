<?php
include("session.php");

echo "<h3 align='right'> Logged User : ".$_SESSION['login_user']."</h3>";
?>


<?php

if (isset($_SESSION['login_user']))
{

?>

<style>
div#log{
   width:450px;
margin: 1 auto;
text-align: center;
padding: 10px;
color: #111;

    animation-name: example;
    animation-duration: 20s;
}

#formbox{
width: 500px;
margin: 0 auto;
text-align: center;
padding: 10px;
color: #111;
background : lightblue;
border-radius: 10px;
-webkit-border-radius:10px;
-moz-border-radius:10px;
}

body
{

    background:  url(images/blood.jpg) no-repeat center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
<title> History </title>
<body>
<a style="float:right" href="logout.php">Sign Out</a>


<center><div style="align:center;border:1px solid black;width:60%;background:white;padding-left:40px;padding-right:40px;">
<div style="float:center"><center style="color:blue"> <h1> History of Hemophilia </h1></center> <td> <h4 align=right top></h4> </td> </div>
<br/><br/><center style="color:red"> <h2>Hemophilia a Royal Disease </h2></center>
<p align="left">In the whole history of hemophilia, the Jews were first to recognize it. They enacted a law that if a women had two sons that died from circumcision her third son would not be required to be circumcised. This shows that they recognized that women carried the hemophilia gene and passed it down to their sons.
<div style="vertical-align:top float:right"> <img style="float: left" src="images/history.jpg">
<br/><p align="justify">  The hemophilia blood disorder became known as the royal disease because Queen Victoria was a carrier and passed the carrier status down to many of her daughters. In those days the royal families of many of the nations of Europe would marry into each others families.This caused several generations of royalty to become affected by the hemophilia gene. The most famous being Alexei son of Alexandra and Nicholas, Czar of Russia. Nicholas and Alexandra were pre-occupied by the health problems of their son at a time when Russia was in turmoil.
<br/><br/><br/><br/><br/><div style="vertical-align:top float:left"> <img style="float: right" src="images/history2.jpg"/>
<p align="left"><br/><br/><br/><br/>The monk Rasputin gained great influence in the Russian court, partly because he was the only one able to help the young Tsarevich. He used hypnosis to relieve Alexei's pain. The use of hypnosis not only relieved pain, but may have also helped slow or stop the boy's hemorrhages. The illness of the heir to the Tsar's throne, the strain it placed on the Royal family, and the power wielded by the mad monk Rasputin were all factors leading to the Russian Revolution of 1917. </div><BR/>
<BR/><BR/><BR/>
<h2 style="color:red;">What is the history of hemophilia in the 20th century?</h2>

<p align="justify">In the 20th century doctors looked for the cause of hemophilia. Until then, they had believed that the blood vessels of hemophiliacs were simply more fragile. In the 1930s doctors looked at defective platelets as the likely cause. Then, in 1937, Patek and Taylor, two doctors at Harvard, found they could correct the clotting problem by adding a substance which came from the plasma in blood. This was called anti-hemophilic globulin. In 1944, Pavlosky, a doctor from Buenos Aires, Argentina, did a lab test which showed that blood from one hemophiliac could correct the clotting problem in a second hemophiliac and vice-versa. He had stumbled upon two hemophiliacs each with a deficiency in different proteins - factor VIII and factor IX. This led to the recognition in 1952 of hemophilia A and hemophilia B as two distinct diseases.<br/>
<br/>
In the 1960s the clotting factors were identified and named. An article in Nature in 1964 described the clotting process in detail. The interaction of the different factors in blood clotting was named the coagulation cascade.
<BR/><br/>
In the 1950s and early 1960s, hemophiliacs were treated with whole blood or fresh plasma. Unfortunately, there wasn't enough of the factor VIII or IX proteins in these blood products to stop serious internal bleeding. Most people with severe hemophilia and some people with mild or moderate hemophilia died in childhood or early adulthood. The most common causes of death were bleeding in vital organs, especially the brain, and bleeding after minor surgery or after an injury.
<br/><BR/>
Those who survived were usually crippled by the long-term effects of repeated hemorrhages into the joints. The pressure of massive bleeding into joints and muscles made hemophilia one of the most painful diseases known to medicine. Then, in the 1960s, cryoprecipitate was discovered by Dr. Judith Pool. Dr. Pool found that the sludge that sunk to the bottom of thawing plasma was rich in factor VIII. For the first time, enough factor VIII clotting factor could be infused to control serious bleeding. Even surgery became possible.
<br/><BR/>
Then, later in the 1960s and early 1970s, concentrates containing factor VIII and IX began to be available. These freeze-dried powdered concentrates could be kept at home and used as needed. They revolutionized hemophilia care. Hemophiliacs were now independent of hospitals. They could travel, hold steady jobs and hope to lead normal lives. Tragically, these same blood products carried blood-borne viruses like hepatitis C and HIV. Many hemophiliacs were infected.
<BR/><br/>
In the 1990s, modern treatment, using safer factor concentrates, again improved the outlook. (See Table 1.) Most children born with hemophilia in Canada today can look forward to long, healthy, active and productive lives.
<BR/><br/>
Unfortunately, only 25% of the world's hemophiliacs enjoy this level of care. The ones who do not have access to modern hemophilia care face the same fate as Queen Victoria's offspring in the 1800s - a life of pain and crippling, and an early death.</p>
<br/><br/>
<div class="drop" style="width:93%;">
<ul class="drop_menu">
<style type="text/css">
td
{
    padding:0 25px 0 25px;
}
</style>

<center><table border="0" padding:0 15px 0 15px;> <td><a href='home.php'>Home</a></td><td><a href='xlink.php'> X-Linked</a></td><td><a href='medicine.php'> Medicine </a></td><td><a href='Gallery.php'> Gallery </a></td><td><a href='contact.php'>Contact </a></td></table>
<p><center> Copyright &copy;  RVCE,MCA-2015 : All rights reserved</p> 
<br/><br/>
</div>
</body>
<?php 
}
else{

header("location:login.php");
}
?>
