<?php 
include ("config.php");
$selectsql="select * from medicine where class='class1'";
$result=mysql_query($selectsql);
while($row = mysql_fetch_array($result))
{

if ($row['name']=="Advate")
{

?>
<h2>
Advate contains recombinant antihemophilic factor. Antihemophilic factor is a naturally occurring protein in the blood that helps blood to clot. A lack of 
antihemophilic factor VIII is the cause of hemophilia A.

How should I use Advate?

Use Advate exactly as prescribed by your doctor. Follow all directions on your prescription label. Do not use this medicine in larger or smaller amounts or for longer than recommended. Always check the strength of the medicine on the label to be sure you are using the correct potency.

Advate is injected into a vein through an IV. You may be shown how to use an IV at home. Do not self-inject this medicine if you do not understand how to give the injection and properly dispose of used needles, IV tubing, and other items used to inject the medicine.

Advate is usually given every 8 to 24 hours for 1 to 4 days, depending on the reason you are using the medicine
</h2>

<h2> Alphanate 

Generic Name: antihemophilic factor, von willebrand factor complex (human) Dosage Form: injection Indications and Usage for Alphanate Hemophilia A Alphanate®, Antihemophilic Factor / von Willebrand Factor Complex (Human), is indicated for the control and prevention of bleeding in patients with Factor... 
</h2>

<h2>  Autoplaex T

Anti-inhibitor coagulant complex injection is used to control bleeding episodes or bleeding during surgery in patients with hemophilia A and hemophilia B. Anti-inhibitor coagulant complex contains substances called coagulation factors (e.g., non-activated Factors II, IX, and X, and activated Factor VII)... 
</h2>

<h2>
DDAVP

Generic Name: desmopressin acetate Dosage Form: injection DDAVP® Injection (desmopressin acetate) 4 mcg / mL DDAVP Description DDAVP® Injection (desmopressin acetate) 4 mcg / mL is a synthetic analogue of the natural pituitary hormone 8-arginine vasopressin (ADH), an antidiuretic hormone affecting... 
</h2>
