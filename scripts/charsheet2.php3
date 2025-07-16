<html>

<head>
		<meta http-equiv=content-type content=text/html;charset=iso-8859-1>
		<meta name=generator content=Adobe GoLive 4>
		<?php echo("<title>$charname</title>\n"); ?>
		<style type=text/css><!--
			td { font-size: 15px; font-family: Arial, Helvetica, Geneva, Swiss, SunSans-Regular }-->
		</style>
</head>

<body bgcolor=#001100 text=white link=white marginheight=0 marginwidth=0 leftmargin=0 topmargin=0>
		<?php
		echo "<table border=0 cellpadding=0 cellspacing=0>\n";
			
			echo "<tr>
				<td width=10></td>
				<td colspan=3><font size=6><b>$charname</b></font></td>
			</tr>\n";
			
			echo "<tr>
				<td width=10></td>
				<td width=120><font size=4><b>$title</b></font></td>
				<td width=25></td>
				<td width=454></td>
			</tr>\n";
			
			echo "<tr>
				<td width=10 valign=top></td>
				<td valign=top width=120><font color=black><b>Description:</b></font></td>
				<td width=25 valign=top></td>
				<td valign=top width=454></td>
			</tr>\n";
			
			echo "<tr>
				<td width=10></td>
				<td colspan=3 valign=top>&nbsp;&nbsp;$desc<br>
				</td>
			</tr>\n";
			
			echo "<tr>
				<td width=10></td>
				<td width=120 valign=top><font color=black><b>Background:</b></font></td>
				<td width=25></td>
				<td width=454></td>
			</tr>\n";
			
			echo "<tr>
				<td width=10></td>
				<td colspan=3>&nbsp;&nbsp;$background</td>
			</tr>\n";
			
		echo "</table>\n";
		echo "<br>
		<br>\n";
		echo "<table border=0 cellpadding=0 cellspacing=0>\n";
			
			echo "<tr>
				<td width=10></td>
				<td width=120 valign=top><font color=black><b>Character Age:</b></font></td>
				<td width=479></td>
			</tr>\n";
			
		echo "</table>\n";
		echo "<table border=0 cellpadding=0 cellspacing=0>n";
			
			echo "<tr>
				<td width=25></td>
				<td valign=top colspan=2><font color=black><b>$Amber Age:</b></font></td>
			</tr>\n";
			
		echo "</table>\n";
		echo "<br>
		<br>\n";
		echo "<table border=0 cellpadding=0 cellspacing=0 width=322>n";
			
			echo "<tr>\n";
				echo "<td width=322 valign=top>\n";
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
							<td width=115><b>Pattern</b></td>
							<td width=55><b>(INT):</b></td>
							<td width=30>$PAT</td>
							<td width=10></td>
							<td width=73>$PATskill</td>
						</tr>\n";
							 if ($LOG>=1)  { 						
						echo "<tr>
							<td width=25></td>
							<td width=115><b>Logrus</b></td>
							<td width=55><b>(INT):</b></td>
							<td width=30>$LOG</td>
							<td width=10></td>
							<td width=73>$LOGskill</td>
						</tr>\n";
						 $TRU=$TRU+=$TRUadd;
							 if ($TRU>=1)  { 						
						echo "<tr>
							<td width=25></td>
							<td width=115><b>Trump</b></td>
							<td width=55><b>(INT):</b></td>
							<td width=30>$TRU</td>
							<td width=10></td>
							<td width=73>$TRUskill</td>
						</tr>\n";
						}
						 $SHP=$SHP+=$SHPadd;
							 if ($SHP>=1)  { 
						echo "<tr>
							<td width=25></td>
							<td width=115><b>Shape Shifting</b></td>
							<td width=55><b>(END):</b></td>
							<td width=30>$SHP</td>
							<td width=10></td>
							<td width=73>$SHPskill</td>
						</tr>\n";
						 } 
						 $SO1=$SO1+=$SO1add;
							 if ($SO1>=1)  { 						
						echo "<tr>
							<td width=25></td>
							<td width=115><b>Sorcery 1 </b></td>
							<td width=55><b>(PSY):</b></td>
							<td width=30>$SO1</td>
							<td width=10></td>
							<td width=73>$SO1skill</td>
						</tr>\n";
						 } 
						 $SO2=$SO2+=$SO2add;
							 if ($SO2>=1)  { 						
						echo "<tr>
							<td width=25></td>
							<td width=115><b>Sorcery 2 </b></td>
							<td width=55><b>(PSY):</b></td>
							<td width=30>$SO2</td>
							<td width=10></td>
							<td width=73>$SO2skill</td>
						</tr>\n";
						 } 
						 $SO3=$SO3+=$SO3add;
							 if ($SO3>=1)  { 						
						echo "<tr>
							<td width=25></td>
							<td width=115><b>Sorcery 3 </b></td>
							<td width=55><b>(PSY):</b></td>
							<td width=30>$SO3</td>
							<td width=10></td>
							<td width=73>$SO3skill</td>
						</tr>\n";
						 } 
						 $SO4=$SO4+=$SO4add;
							 if ($SO4>=1)  { 						
						echo "<tr>
							<td width=25></td>
							<td width=115><b>Sorcery 4 </b></td>
							<td width=55><b>(PSY):</b></td>
							<td width=30>$SO4</td>
							<td width=10></td>
							<td width=73>$SO4skill</td>
						</tr>\n";
						 } 
						 $SO5=$SO5+=$SO5add;
							 if ($SO5>=1)  { 						
						echo "<tr>
							<td width=25></td>
							<td width=115><b>Sorcery 5 </b></td>
							<td width=55><b>(PSY):</b></td>
							<td width=30>$SO5</td>
							<td width=10></td>
							<td width=73>$SO5skill</td>
						</tr>\n";
						 } 
						 $SO6=$SO6+=$SO6add;
							 if ($SO6>=1)  { 						
						echo "<tr>
							<td width=25></td>
							<td width=115><b>Sorcery 6 </b></td>
							<td width=55><b>(PSY):</b></td>
							<td width=30>$SO6</td>
							<td width=10></td>
							<td width=73>$SO6skill</td>
						}
						</tr>\n";
						
					echo "</table>\n";
					echo "<br>\n";
				echo "</td>\n";
			echo "</tr>\n";
			
		echo "</table>\n";
		echo "<br>\n";
		echo "<table border=0 cellpadding=0 cellspacing=0>\n";
			
			echo "<tr>\n";
				echo "<td width=327 valign=top>\n";
					echo "<table border=0 cellpadding=0 cellspacing=0>\n";
						
						echo "<tr>\n";
							echo "<td width=322>\n";
								echo "<center>\n";
									echo "<table border=0 cellpadding=0 cellspacing=0 align=left>\n";
										
										echo "<tr>
											<td colspan=2><b>&nbsp;&nbsp;&nbsp;&nbsp;Skills:</b></td>
											<td width=38>Level:</td>
											<td width=10></td>
											<td width=28>Rank:</td>
											<td></td>
										</tr>\n";
										 if ($ATH>=1)  { 						
									echo "<tr>
											<td width=25></td>
											<td width=180><font size=4>Athletics: (END)</font></td>
											<td width=38>$ATH</td>
											<td width=10></td>
											<td width=28>$ATHskill</td>
											<td valign=top></td>
										</tr>\n";
										}
										 if ($CPU>=1)  { 						
									echo "<tr>
											<td width=25></td>
											<td width=180><font size=4>Computer: (INT)</font></td>
											<td width=38>$CPU</td>
											<td width=10></td>
											<td width=28>$CPUskill</td>
											<td valign=top></td>
										</tr>\n";
										}
										 if ($ELE>=1)  { 						
									echo "<tr>
											<td width=25></td>
											<td width=180><font size=4>Electronics: (INT)</font></td>
											<td width=38>$ELE</td>
											<td width=10></td>
											<td width=28>$ELEskill</td>
											<td valign=top></td>
										</tr>\n";
										}
										 if ($GUN>=1)  { 						
									echo "<tr>
											<td width=25></td>
											<td width=180><font size=4>Guns: (REF)</font></td>
											<td width=38>$GUN</td>
											<td width=10></td>
											<td width=28>$GUNskill</td>
											<td valign=top></td>
										</tr>\n";
										}
										 if ($UNA>=1)  { 						
									echo "<tr>
											<td width=25></td>
											<td width=180><font size=4>Unarmed: (REF/STR)</font></td>
											<td width=38>$UNA</td>
											<td width=10></td>
											<td width=28>$UNAskill</td>
											<td valign=top></td>
										</tr>\n";
										}
										 if ($INV>=1)  { 						
									echo "<tr>
											<td width=25></td>
											<td width=180><font size=4>Investigation:(AWR)</font></td>
											<td width=38>$INV</td>
											<td width=10></td>
											<td width=28>$INVskill</td>
											<td valign=top></td>
										</tr>\n";
										}
										 if ($COM>=1)  { 						
									echo "<tr>
											<td width=25></td>
											<td width=180><font size=4>Command: (CHR)</font></td>
											<td width=38>$COM</td>
											<td width=10></td>
											<td width=28>$COMskill</td>
											<td valign=top></td>
										</tr>\n";
										}
										 if ($LOR>=1)  { 						
									echo "<tr>
											<td width=25></td>
											<td width=180><font size=4>Lore:(INT)</font></td>
											<td width=38>$LOR</td>
											<td width=10></td>
											<td width=28>$LORskill</td>
											<td valign=top></td>
										</tr>\n";
										}
										 if ($MEC>=1)  { 						
									echo "<tr>
											<td width=25></td>
											<td width=180><font size=4>Mechanic:(INT)</font></td>
											<td width=38>$MEC</td>
											<td width=10></td>
											<td width=28>$MECskill</td>
											<td valign=top></td>
										</tr>\n";
										}
										 if ($MED>=1)  { 						
									echo "<tr>
											<td width=25></td>
											<td width=180><font size=4>Medicine:(INT)</font></td>
											<td width=38>$MED</td>
											<td width=10></td>
											<td width=28>$MEDskill</td>
											<td valign=top></td>
										</tr>\n";
										}
										 if ($ARM>=1)  { 						
									echo "<tr>
											<td width=25></td>
											<td width=180><font size=4>Armed:(REF)</font></td>
											<td width=38>$ARM</td>
											<td width=10></td>
											<td width=28>$ARMskill</td>
											<td valign=top></td>
										</tr>\n";
										}
										 if ($PER>=1)  { 						
									echo "<tr>
											<td width=25></td>
											<td width=180><font size=4>Perception:(AWR)</font></td>
											<td width=38>$PER</td>
											<td width=10></td>
											<td width=28>$PERskill</td>
											<td valign=top></td>
										</tr>\n";
										}
										 if ($VEH>=1)  { 						
									echo "<tr>
											<td width=25></td>
											<td width=180><font size=4>Vehicles:(REF)</font></td>
											<td width=38>$VEH</td>
											<td width=10></td>
											<td width=28>$VEHskill</td>
											<td valign=top></td>
										</tr>\n";
										}
										 if ($PRO>=1)  { 						
									echo "<tr>
											<td width=25></td>
											<td width=180><font size=4>Professional:(INT)</font></td>
											<td width=38>$PRO</td>
											<td width=10></td>
											<td width=28>$PROskill</td>
											<td valign=top></td>
										</tr>\n";
										}
										 if ($SCI>=1)  { 						
									echo "<tr>
											<td width=25></td>
											<td width=180><font size=4>Science:(INT)</font></td>
											<td width=38>$SCI</td>
											<td width=10></td>
											<td width=28>$SCIskill</td>
											<td valign=top></td>
										</tr>\n";
										}
										 if ($STE>=1)  { 						
									echo "<tr>
											<td width=25></td>
											<td width=180><font size=4>Stealth:(SPD)</font></td>
											<td width=38>$STE</td>
											<td width=10></td>
											<td width=28>$STEskill</td>
											<td valign=top></td>
										</tr>\n";
										}
										 if ($STW>=1)  { 						
									echo "<tr>
											<td width=25></td>
											<td width=180><font size=4>Streetwise:(CHR)</font></td>
											<td width=38>$STW</td>
											<td width=10></td>
											<td width=28>$STWskill</td>
											<td valign=top></td>
										</tr>\n";
										}
										 if ($SUB>=1)  { 						
									echo "<tr>
											<td width=25></td>
											<td width=180><font size=4>Subterfuge:(CHR)</font></td>
											<td width=38>$SUB</td>
											<td width=10></td>
											<td width=28>$SUBskill</td>
											<td valign=top></td>
										</tr>\n";
										}
										 if ($SUR>=1)  { 						
									echo "<tr>
											<td width=25></td>
											<td width=180><font size=4>Survival:(INT)</font></td>
											<td width=38>$SUR</td>
											<td width=10></td>
											<td width=28>$SURskill</td>
											<td valign=top></td>
										</tr>\n"; 
										}
										 if ($TAC>=1)  { 						
									echo "<tr>
											<td width=25></td>
											<td width=180><font size=4>Tactics:(INT)</font></td>
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