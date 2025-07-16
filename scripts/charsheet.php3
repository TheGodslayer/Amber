<html>

<head>
		<meta http-equiv=content-type content=text/html;charset=iso-8859-1>
		<meta name=generator content=Adobe GoLive 4>
		<?php echo("<title>$charname</title>\n"); ?>
		<style type=text/css><!--
			td { font-size: 15px; font-family: Arial, Helvetica, Geneva, Swiss, SunSans-Regular }-->
		</style>
	
	<script language="php">
$AGE=0;
if ($amberAGE>=0.5) {
$AGE==$aAGE;
}		
if ($aAGE==1) {
$aAGE='100 yrs: (The Patternfall War)';
}   
if ($aAGE==2) {
$aAGE='200 yrs:';
}   
if ($aAGE==3) {
$aAGE='300 yrs: (Moonriders out of Ghenesh)'; 
}   
if ($aAGE==4) {
$aAGE='400 yrs:'; 
}   
if ($aAGE==5) {
$aAGE='500 yrs: (Era of Queen Harla)'; 
}   
if ($aAGE==6) {
$aAGE='600 yrs: (Era of Queen Rilga)'; 
}   
if ($aAGE==7) {
$aAGE='700 yrs:'; 
}   
if ($aAGE==8) {
$aAGE='800 yrs: (Oberons affair with Moins)'; 
}   
if ($aAGE==9) {
$aAGE='900 yrs: (Era of Queen Clarissa)'; 
}   
if ($aAGE==10) {
$aAGE='1000 yrs:'; 
}  
if ($aAGE==11) {
$aAGE='1100 yrs:'; 
}  
if ($aAGE==12) {
$aAGE='1200 yrs: (Era of Queen Faiella)'; 
}  
if ($aAGE==13) {
$aAGE='1300 yrs:'; 
}  
if ($aAGE==14) {
$aAGE='1400 yrs:'; 
}  
if ($aAGE==15) {
$aAGE='1500 yrs: (Era of Queen Cymnea)';
}  


if ($chaosAGE>=0.5)  {       
$AGE=$cAGE;
}
if ($cAGE==0.5) {
$cAGE='10th Age: The Death of Swavill.'; 
}   
if ($cAGE==1) {
$cAGE='9th Age: The Black Road War.'; 
}   
if ($cAGE==1.5) {
$cAGE='8th Age:'; 
}   
if ($cAGE==2) {
$cAGE='7th Age: ';
}   
if ($cAGE==2.5) {
$cAGE='6th Age: The Rise of Chaos ';
}   
if ($cAGE==3) {
$cAGE='5th Age: The King Wars'; 
}   
if ($cAGE==3.5) {
$cAGE='4th Age: Rise of the Houses ';
}   
if ($cAGE==4) {
$cAGE='3rd Age: The Fall ';
}   
if ($cAGE==4.5) {
$cAGE='2nd Age: The God Wars ';
}   
if ($cAGE==5) {
$cAGE='1st Age: The Age of Chaos ';
}  



if ($PAT>=1)  {        
	$Pattern=("Pattern ($PAT):  $PATskill\n");
}
if ($LOG>=1)  {
	$Logrus=("Logrus ($LOG):  $LOGskill\n");
}
if ($JOJ>=1)  {
	$TheJewel=("The Jewel ($JOJ):  $JOJskill\n");
}
if ($OMP>=1)  {
	$MajorPower=("$OtherMajorPower ($OMP):  $OMPskill\n");
}
if ($TRU>=1)  {
	$Trump=("Trump ($TRU):  $TRUskill\n");
}
if ($SHP>=1)  {
	$ShapeS=("Shape Shifting ($SHP): $SHPskill\n");
}
if ($SO1>=1)  {
	$Sorcery1=("Conjuration ($SO1):  $SO1skill\n");
}
if ($SO2>=1)  {
	$Sorcery2=("Channeling ($SO2)  :$SO2skill\n");
}
if ($SO3>=1)  {
	$Sorcery3=("Glamor ($SO3):  $SO3skill\n");
}
if ($SO4>=1)  {
	$Sorcery4=("Necromancy ($SO4):  $SO4skill\n");
}
if ($SO5>=1)  {
	$Sorcery5=("Sorcery ($SO5):  $SO5skill\n");
}
if ($SO6>=1)  {
	$Sorcery6=("WitchCraft ($SO6):  $SO6skill\n");
}
if ($MOP>=1)  {
	$MinorPower=("$OtherMinorPower ($MOP):  $MOPskill\n");
}
$Powers= ("$Pattern$Logrus$TheJewel$MajorPower$Trump$ShapeS$Sorcery1$Sorcery2$Sorcery3$Sorcery4$Sorcery5$Sorcery6$MinorPower");

if ($ATH>=1)  {       
	$Athletics=("Athletics ($ATH):  $ATHskill\n");
}
if ($CPU>=1)  {       
$Computer=("Computer: ($CPU) $CPUskill\n");
}
if ($ELE>=1)  {  
$Electronics=("Electronics: ($ELE) $ELEskill\n");
}
if ($GUN>=1)  {       
$Guns=("Guns: ($GUN) $GUNskill\n");
}
if ($UNA>=1)  {       
$Unarmed=("Unarmed: ($UNA) $UNAskill\n");
}
if ($INV>=1)  {       
$Investigation=("Investigation: ($INV) $INVskill\n");
}
if ($COM>=1)  {       
$Command=("Command:  ($COM) $COMskill\n");
}
if ($LOR>=1)  {       
$Lore=("Lore: ($LOR) $LORskill\n");
}
if ($MEC>=1)  {       
$Mechanic=("Mechanic: ($MEC) $MECskill\n");
}
if ($MED>=1)  {       
$Medicine=("Medicine: ($MED) $MEDskill\n");
}
if ($ARM>=1)  {       
$Armed=("Armed: ($ARM) $ARMskill\n");
}
if ($PER>=1)  {       
$Perception=("Perception: ($PER) $PERskill\n");
}
if ($VEH>=1)  {       
$Vehicles=("Vehicles: ($VEH) $VEHskill\n");
}
if ($PRO>=1)  {       
$Professional=("Professional: ($PRO) $PROskill\n");
}
if ($SCI>=1)  {       
$Science=("Science: ($SCI) $SCIskill\n");
}
if ($STE>=1)  {       
$Stealth=("Stealth: ($STE) $STEskill\n");
}
if ($STW>=1)  {       
$Streetwise=("Streetwise: ($STW) $STWskill\n");
}
if ($SUB>=1)  {       
$Subterfuge=("Subterfuge: ($SUB) $SUBskill\n");
}
if ($SUR>=1)  {       
$Survival=("Survival: ($SUR) $SURskill\n");
}
if ($TAC>=1)  {       
$Tactics=("Tactics: ($TAC) $TACskill\n");
}
$DMG=round(($STR+$SIZ)/10);
$HP=round($STR+$SIZ);
$Skills= ("$Armed$Athletics$Command$Computer$Electronics$Guns$Investigation$Lore$Mechanic$Medicine$Perception$Professional$Science$Stealth$Streetwise$Subterfuge$Survival$Tactics$Unarmed$Vehicles");

</script>
</head>

<body bgcolor=#001100 text=white link=white marginheight=0 marginwidth=0 leftmargin=0 topmargin=0>
	<?php

$AGE=$aAGE;

($body="$charname
$title              $points Points

Description:
$desc

Background:
$background

Character Age: $AGE

Strength     (STR): $STR	     Damage Code: (DMG) $DMG
Reflexes     (REF): $REF	     Hit Points:  (HP)  $HP
Endurance    (END): $END	
Size            (SIZ): $SIZ
Intelligence  (INT): $INT
Psyche       (PSY): $PSY
Awarness   (AWR): $AWR
Charisma    (CHR): $CHR

Powers:    	   Rank:
$Powers

Skills:   Level: Rank:
$Skills

");	

mail("erikh@crystalcanyon.com", "[AmberRPG] $charname",	$body);		

	echo "<table border=0 cellpadding=0 cellspacing=0>\n";

		echo "<tr>
			<td width=10></td>
			<td colspan=3><font size=6><b>$charname</b></font></td>
		</tr>\n";

		echo "<tr>
			<td width=10></td>
			<td width=200><font size=4><b>$title</font></b></td>
			<td width=100><b>$points Points</b></td>
			<td></td>
		</tr>\n";

		echo "<tr>
			<td width=10 valign=top></td>
			<td valign=top width=120><font color=white><b>Description:</b></font></td>
			<td width=25 valign=top></td>
			<td valign=top width=455></td>
		</tr>\n";

		echo "<tr>
			<td width=10></td>
			<td colspan=3 valign=top width=455>&nbsp;&nbsp;$desc<br>
			</td>
		</tr>\n";

		echo "<br><br>\n";

		echo "<tr>
			<td width=10></td>
			<td width=120 valign=top width=455><font color=white><b>Background:</b></font></td>
			<td width=25></td>
			<td width=455></td>
		</tr>\n";

		echo "<tr>
			<td width=10></td>
			<td colspan=3 width=455>&nbsp;&nbsp;$background</td>
		</tr>\n";

	echo "</table>\n";
	echo "<br>
	<br>\n";

		if ($aAGE>=1)  { 						
	echo "<table border=0 cellpadding=0 cellspacing=0>\n";

		echo "<tr>
			<td width=10></td>
			<td width=120 valign=top><font color=white><b>Character Age:</b></font></td>
			<td width=479>$aAGE</td>
		</tr>\n";

	echo "</table>\n";
	echo "<table border=0 cellpadding=0 cellspacing=0>\n";

		echo "<tr>
			<td width=30></td>
			<td valign=top colspan=2><font color=white><b>\n";
			
				
	if ($aAGE==1) {
		$aAGE=printf("100 yrs: (The Patternfall War)\n"); 
} 		
	if ($aAGE==2) {
		$aAGE=printf("200 yrs:\n"); 
} 		
	if ($aAGE==3) {
		$aAGE=printf("300 yrs: (Moonriders out of Ghenesh)\n"); 
} 		
	if ($aAGE==4) {
		$aAGE=printf("400 yrs:\n"); 
} 		
	if ($aAGE==5) {
		$aAGE=printf("500 yrs: (Era of Queen Harla)\n"); 
} 		
	if ($aAGE==6) {
		$aAGE=printf("600 yrs: (Era of Queen Rilga)\n"); 
} 		
	if ($aAGE==7) {
		$aAGE=printf("700 yrs:\n"); 
} 		
	if ($aAGE==8) {
		$aAGE=printf("800 yrs:(Oberon's affair with Moins)\n"); 
} 		
	if ($aAGE==9) {
		$aAGE=printf("900 yrs: (Era of Queen Clarissa)\n"); 
} 		
	if ($aAGE==10) {
		$aAGE=printf("1000 yrs:\n"); 
} 	
	if ($aAGE==11) {
		$aAGE=printf("1100 yrs:\n"); 
} 	
	if ($aAGE==12) {
		$aAGE=printf("1200 yrs: (Era of Queen Faiella)\n"); 
} 	
	if ($aAGE==13) {
		$aAGE=printf("1300 yrs:\n"); 
} 	
	if ($aAGE==14) {
		$aAGE=printf("1400 yrs:\n"); 
} 	
	if ($aAGE==15) {
		$aAGE=printf("1500 yrs: (Era of Queen Cymnea)\n"); 
} 	
				
echo "</b></font></td>
			</tr>\n";

		echo "</table>\n";
		}
		
			if ($chaosAGE>=0.5)  { 						
		echo "<table border=0 cellpadding=0 cellspacing=0>\n";

			echo "<tr>
				<td width=10></td>
				<td width=120 valign=top><font color=white><b>Character Age:</b></font></td>
				<td width=479>$cAGE</td>
			</tr>\n";

		echo "</table>\n";
		echo "<table border=0 cellpadding=0 cellspacing=0>\n";
		
			echo "<tr>
				<td width=30></td>
				<td valign=top colspan=2><font color=white><b>\n";
				
				
	if ($cAGE==0.5) {
		$cAGE=printf("10th Age: The Death of Swavill.\n"); 
} 		
	if ($cAGE==1) {
		$cAGE=printf("9th Age: The Black Road War.\n"); 
} 		
	if ($cAGE==1.5) {
		$cAGE=printf("8th Age:\n"); 
} 		
	if ($cAGE==2) {
		$cAGE=printf("7th Age:\n"); 
} 		
	if ($cAGE==2.5) {
		$cAGE=printf("6th Age: The Rise of Chaos\n"); 
} 		
	if ($cAGE==3) {
		$cAGE=printf("5th Age: The King Wars\n"); 
} 		
	if ($cAGE==3.5) {
		$cAGE=printf("4th Age: Rise of the Houses\n"); 
} 		
	if ($cAGE==4) {
		$cAGE=printf("3rd Age: The Fall\n"); 
} 		
	if ($cAGE==4.5) {
		$cAGE=printf("2nd Age: The God Wars\n"); 
} 		
	if ($cAGE==5) {
		$cAGE=printf("1st Age: The Age of Chaos\n"); 
} 	
				
echo "</b></font></td>
			</tr>\n";

		echo "</table>\n";
}		
		
		echo "<br>
		<br>\n";
		echo "<table border=0 cellpadding=0 cellspacing=0 width=600>\n";
			
			echo "<tr>\n";
				echo "<td width=600 valign=top>\n";
					echo "<table border=0 cellpadding=0 cellspacing=0 width=273>\n";
						
						echo "<tr>
							<td width=25></td>
							<td width=115 valign=top>
								<div align=left>
									<b>Strength </b></div>
							</td>
							<td width=50 valign=top>
								<div align=left>
									<b>(STR):</b></div>
							</td>
							<td width=10 valign=top></td>
							<td width=40 valign=top>$STR</td>
						</tr>\n";
						
						echo "<tr>
							<td width=25></td>
							<td width=115 valign=top><b>Reflexes </b></td>
							<td width=50 valign=top><b>(REF):</b></td>
							<td width=10 valign=top></td>
							<td width=40 valign=top>$REF</td>
						</tr>\n";
						
						echo "<tr>
							<td width=25></td>
							<td width=115 valign=top><b>Endurance</b></td>
							<td width=50 valign=top><b>(END):</b></td>
							<td width=10></td>
							<td width=40>$END</td>
						</tr>\n";
						
						echo "<tr>
							<td width=25></td>
							<td width=115 valign=top><b>Size</b></td>
							<td width=50 valign=top><b>(SIZ):</b></td>
							<td width=10></td>
							<td width=40>$SIZ</td>
						</tr>\n";
						
						echo "<tr>
							<td width=25></td>
							<td width=115 valign=top><b>Intelligence </b></td>
							<td width=50 valign=top><b>(INT):</b></td>
							<td width=10></td>
							<td width=40>$INT</td>
						</tr>\n";
						
						echo "<tr>
							<td width=25></td>
							<td width=115 valign=top><b>Psyche </b></td>
							<td width=50 valign=top><b>(PSY):</b></td>
							<td width=10></td>
							<td width=40>$PSY</td>
						</tr>\n";
						
						echo "<tr>
							<td width=25></td>
							<td width=115 valign=top><b>Awareness </b></td>
							<td width=50 valign=top><b>(AWR):</b></td>
							<td width=10></td>
							<td width=40>$AWR</td>
						</tr>\n";
						
						echo "<tr>
							<td width=25></td>
							<td width=115 valign=top><b>Charisma </b></td>
							<td width=50 valign=top><b>(CHR):</b></td>
							<td width=10></td>
							<td width=40>$CHR</td>
						</tr>\n";
						
						echo "<tr>
							<td colspan=5><br>
							</td>
						</tr>\n";
						
					echo "</table>\n";
					echo "<br>\n";
					echo "<table border=0 cellpadding=0 cellspacing=0>\n";
						
						echo "<tr>
							<td width=25></td>
							<td colspan=2><b>Powers:</b></td>
							<td width=30><b>Level</b>:</td>
							<td width=10></td>
							<td width=73><b>Rank:</b></td>
						</tr>\n";
							 if ($PAT>=1)  { 						
						echo "<tr>
							<td width=25></td>
							<td width=135><b>Pattern</b></td>
							<td width=70><b>(INT):</b></td>
							<td width=30>$PAT</td>
							<td width=10></td>
							<td width=73>$PATskill</td>
						</tr>\n";
						}
							 if ($LOG>=1)  { 						
						echo "<tr>
							<td width=25></td>
							<td width=135><b>Logrus</b></td>
							<td width=70><b>(INT):</b></td>
							<td width=30>$LOG</td>
							<td width=10></td>
							<td width=73>$LOGskill</td>
						</tr>\n";
						}
							 if ($JOJ>=1)  { 						
						echo "<tr>
							<td width=25></td>
							<td width=135><b>The Jewel</b></td>
							<td width=70><b>(INT):</b></td>
							<td width=30>$JOJ</td>
							<td width=10></td>
							<td width=73>$JOJskill</td>
						</tr>\n";
						}	
							 if ($OMP>=1)  { 						
						echo "<tr>
							<td width=25></td>
							<td width=135><b>$OtherMajorPower</b></td>
							<td width=70><b>(INT):</b></td>
							<td width=30>$OMP</td>
							<td width=10></td>
							<td width=73>$OMPskill</td>
						</tr>\n";
						}						
						 $TRU=$TRU+=$TRUadd;
							 if ($TRU>=1)  { 						
						echo "<tr>
							<td width=25></td>
							<td width=135><b>Trump</b></td>
							<td width=70><b>(INT):</b></td>
							<td width=30>$TRU</td>
							<td width=10></td>
							<td width=73>$TRUskill</td>
						</tr>\n";
						}
						 $SHP=$SHP+=$SHPadd;
							 if ($SHP>=1)  { 
						echo "<tr>
							<td width=25></td>
							<td width=135><b>Shape Shifting</b></td>
							<td width=70><b>(END):</b></td>
							<td width=30>$SHP</td>
							<td width=10></td>
							<td width=73>$SHPskill</td>
						</tr>\n";
						 } 
						 $SO1=$SO1+=$SO1add;
							 if ($SO1>=1)  { 						
						echo "<tr>
							<td width=25></td>
							<td width=135><b>Sorcery 1 </b></td>
							<td width=70><b>(PSY):</b></td>
							<td width=30>$SO1</td>
							<td width=10></td>
							<td width=73>$SO1skill</td>
						</tr>\n";
						 } 
						 $SO2=$SO2+=$SO2add;
							 if ($SO2>=1)  { 						
						echo "<tr>
							<td width=25></td>
							<td width=135><b>Sorcery 2 </b></td>
							<td width=70><b>(PSY):</b></td>
							<td width=30>$SO2</td>
							<td width=10></td>
							<td width=73>$SO2skill</td>
						</tr>\n";
						 } 
						 $SO3=$SO3+=$SO3add;
							 if ($SO3>=1)  { 						
						echo "<tr>
							<td width=25></td>
							<td width=135><b>Sorcery 3 </b></td>
							<td width=70><b>(PSY):</b></td>
							<td width=30>$SO3</td>
							<td width=10></td>
							<td width=73>$SO3skill</td>
						</tr>\n";
						 } 
						 $SO4=$SO4+=$SO4add;
							 if ($SO4>=1)  { 						
						echo "<tr>
							<td width=25></td>
							<td width=135><b>Sorcery 4 </b></td>
							<td width=70><b>(PSY):</b></td>
							<td width=30>$SO4</td>
							<td width=10></td>
							<td width=73>$SO4skill</td>
						</tr>\n";
						 } 
						 $SO5=$SO5+=$SO5add;
							 if ($SO5>=1)  { 						
						echo "<tr>
							<td width=25></td>
							<td width=135><b>Sorcery 5 </b></td>
							<td width=70><b>(PSY):</b></td>
							<td width=30>$SO5</td>
							<td width=10></td>
							<td width=73>$SO5skill</td>
						</tr>\n";
						 } 
						 $SO6=$SO6+=$SO6add;
							 if ($SO6>=1)  { 						
						echo "<tr>
							<td width=25></td>
							<td width=135><b>Sorcery 6 </b></td>
							<td width=70><b>(PSY):</b></td>
							<td width=30>$SO6</td>
							<td width=10></td>
							<td width=73>$SO6skill</td>
						</tr>\n";
						}
						 $MOP=$MOP+=$MOPadd;
							 if ($SO6>=1)  { 						
						echo "<tr>
							<td width=25></td>
							<td width=135><b>$OtherMinorPower </b></td>
							<td width=70><b>(INT):</b></td>
							<td width=30>$OMP</td>
							<td width=10></td>
							<td width=73>$MOPskill</td>
						</tr>\n";
						}						
					echo "</table>\n";
					echo "<br>\n";
				echo "</td>\n";
				echo "<td></td>\n";
			echo "</tr>\n";
			
echo "</table>\n";
echo "<br>\n";
echo "<table border=0 cellpadding=0 cellspacing=0>\n";

echo "<tr>\n";
echo "<td width=600 valign=top>\n";
	echo "<table border=0 cellpadding=0 cellspacing=0>\n";

		echo "<tr>\n";
			echo "<td width=600>\n";
				echo "<center>\n";
					echo "<table border=0 cellpadding=0 cellspacing=0 align=left>\n";

						echo "<tr>
							<td width=25></td>
							<td width=125><b>Skills:</b></td>
							<td width=25><b>Level:</b></td>
							<td width=10></td>
							<td width=28><b>Rank:</b></td>
							<td></td>
						</tr>\n";
						 if ($ATH>=1)  { 						
					echo "<tr>
							<td width=25></td>
							<td width=205><font size=4>Athletics: (END)</font></td>
							<td width=38>$ATH</td>
							<td width=10></td>
							<td width=28>$ATHskill</td>
							<td valign=top></td>
						</tr>\n";
						}
						 if ($CPU>=1)  { 						
					echo "<tr>
							<td width=25></td>
							<td width=205><font size=4>Computer: (INT)</font></td>
							<td width=38>$CPU</td>
							<td width=10></td>
							<td width=28>$CPUskill</td>
							<td valign=top></td>
						</tr>\n";
						}
						 if ($ELE>=1)  { 						
					echo "<tr>
							<td width=25></td>
							<td width=205><font size=4>Electronics: (INT)</font></td>
							<td width=38>$ELE</td>
							<td width=10></td>
							<td width=28>$ELEskill</td>
							<td valign=top></td>
						</tr>\n";
						}
						 if ($GUN>=1)  { 						
					echo "<tr>
							<td width=25></td>
							<td width=205><font size=4>Guns: (REF)</font></td>
							<td width=38>$GUN</td>
							<td width=10></td>
							<td width=28>$GUNskill</td>
							<td valign=top></td>
						</tr>\n";
						}
						 if ($UNA>=1)  { 						
					echo "<tr>
							<td width=25></td>
							<td width=205><font size=4>Unarmed: (REF/STR)</font></td>
							<td width=38>$UNA</td>
							<td width=10></td>
							<td width=28>$UNAskill</td>
							<td valign=top></td>
						</tr>\n";
						}
						 if ($INV>=1)  { 						
					echo "<tr>
							<td width=25></td>
							<td width=205><font size=4>Investigation:(AWR)</font></td>
							<td width=38>$INV</td>
							<td width=10></td>
							<td width=28>$INVskill</td>
							<td valign=top></td>
						</tr>\n";
						}
						 if ($COM>=1)  { 						
					echo "<tr>
							<td width=25></td>
							<td width=205><font size=4>Command: (CHR)</font></td>
							<td width=38>$COM</td>
							<td width=10></td>
							<td width=28>$COMskill</td>
							<td valign=top></td>
						</tr>\n";
						}
						 if ($LOR>=1)  { 						
					echo "<tr>
							<td width=25></td>
							<td width=205><font size=4>Lore:(INT)</font></td>
							<td width=38>$LOR</td>
							<td width=10></td>
							<td width=28>$LORskill</td>
							<td valign=top></td>
						</tr>\n";
						}
						 if ($MEC>=1)  { 						
					echo "<tr>
							<td width=25></td>
							<td width=205><font size=4>Mechanic:(INT)</font></td>
							<td width=38>$MEC</td>
							<td width=10></td>
							<td width=28>$MECskill</td>
							<td valign=top></td>
						</tr>\n";
						}
						 if ($MED>=1)  { 						
					echo "<tr>
							<td width=25></td>
							<td width=205><font size=4>Medicine:(INT)</font></td>
							<td width=38>$MED</td>
							<td width=10></td>
							<td width=28>$MEDskill</td>
							<td valign=top></td>
						</tr>\n";
						}
						 if ($ARM>=1)  { 						
					echo "<tr>
							<td width=25></td>
							<td width=205><font size=4>Armed:(REF)</font></td>
							<td width=38>$ARM</td>
							<td width=10></td>
							<td width=28>$ARMskill</td>
							<td valign=top></td>
						</tr>\n";
						}
						 if ($PER>=1)  { 						
					echo "<tr>
							<td width=25></td>
							<td width=205><font size=4>Perception:(AWR)</font></td>
							<td width=38>$PER</td>
							<td width=10></td>
							<td width=28>$PERskill</td>
							<td valign=top></td>
						</tr>\n";
						}
						 if ($VEH>=1)  { 						
					echo "<tr>
							<td width=25></td>
							<td width=205><font size=4>Vehicles:(REF)</font></td>
							<td width=38>$VEH</td>
							<td width=10></td>
							<td width=28>$VEHskill</td>
							<td valign=top></td>
						</tr>\n";
						}
						 if ($PRO>=1)  { 						
					echo "<tr>
							<td width=25></td>
							<td width=205><font size=4>Professional:(INT)</font></td>
							<td width=38>$PRO</td>
							<td width=10></td>
							<td width=28>$PROskill</td>
							<td valign=top></td>
						</tr>\n";
						}
						 if ($SCI>=1)  { 						
					echo "<tr>
							<td width=25></td>
							<td width=205><font size=4>Science:(INT)</font></td>
							<td width=38>$SCI</td>
							<td width=10></td>
							<td width=28>$SCIskill</td>
							<td valign=top></td>
						</tr>\n";
						}
						 if ($STE>=1)  { 						
					echo "<tr>
							<td width=25></td>
							<td width=205><font size=4>Stealth:(SPD)</font></td>
							<td width=38>$STE</td>
							<td width=10></td>
							<td width=28>$STEskill</td>
							<td valign=top></td>
						</tr>\n";
						}
						 if ($STW>=1)  { 						
					echo "<tr>
							<td width=25></td>
							<td width=205><font size=4>Streetwise:(CHR)</font></td>
							<td width=38>$STW</td>
							<td width=10></td>
							<td width=28>$STWskill</td>
							<td valign=top></td>
						</tr>\n";
						}
						 if ($SUB>=1)  { 						
					echo "<tr>
							<td width=25></td>
							<td width=205><font size=4>Subterfuge:(CHR)</font></td>
							<td width=38>$SUB</td>
							<td width=10></td>
							<td width=28>$SUBskill</td>
							<td valign=top></td>
						</tr>\n";
						}
						 if ($SUR>=1)  { 						
					echo "<tr>
							<td width=25></td>
							<td width=205><font size=4>Survival:(INT)</font></td>
							<td width=38>$SUR</td>
							<td width=10></td>
							<td width=28>$SURskill</td>
							<td valign=top></td>
						</tr>\n"; 
						}
						 if ($TAC>=1)  { 						
					echo "<tr>
							<td width=25></td>
							<td width=205><font size=4>Tactics:(INT)</font></td>
							<td width=38>$TAC</td>
							<td width=10></td>
							<td width=28>$TACskill</td>
							<td valign=top></td>
						</tr>\n";
						}
					echo "</table>\n";
				echo "</center>\n";
			echo "</td>\n";
		echo "</tr>\n";

	echo "</table>\n";
echo "</td>\n";
echo "</tr>\n";

echo "</table>\n";
echo "<br>
<br>\n";
?>
</body>

</html>