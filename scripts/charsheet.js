var points=0;
var pointsleft=300;
stats = new Array(0, -20, -18, -16, -14, -12, -10, -8, -4, -2, 0, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 28, 30, 32, 34, 36, 38, 40, 42, 44, 46, 48, 50, 52, 54, 56, 58, 60, 62, 64, 66, 68, 70, 72, 74, 76, 78, 80);
powers = new Array(0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100);
joj = new Array(0, 15, 30, 45, 60, 75, 90, 105, 120, 135, 150);
skills = new Array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
amberage = new Array(0, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75);
chaosage = new Array(0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100);
mpowers = new Array(0, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50);

function checktotal(form) {
   sumpoints(form);
   if (points != 300) {
      alert("Point total is not equal to 300. You can't save this character until the point total is 300.");
      return false;
   } else {
      return true;
   }
}

function sumpoints(form) {
   var tmpts = 0;
   tmpts = tmpts + stats[parseInt(form.STR.value/3)];
   tmpts = tmpts + stats[parseInt(form.END.value/3)];
   tmpts = tmpts + stats[parseInt(form.REF.value/3)];
   tmpts = tmpts + stats[parseInt(form.INT.value/3)];
   tmpts = tmpts + stats[parseInt(form.PSY.value/3)];
   tmpts = tmpts + stats[parseInt(form.AWR.value/3)];
   tmpts = tmpts + stats[parseInt(form.CHR.value/3)];
   tmpts = tmpts + stats[parseInt(form.SIZ.value)];
   tmpts = tmpts + powers[parseInt(form.PAT.value)];
   tmpts = tmpts + powers[parseInt(form.LOG.value) + parseInt(eval(form.cAGE.value))*-1];
   tmpts = tmpts + joj[parseInt(form.JOJ.value)];
   tmpts = tmpts + powers[parseInt(form.OMP.value)];
   tmpts = tmpts + mpowers[parseInt(form.TRU.value)];
   tmpts = tmpts + mpowers[parseInt(form.SHP.value)];
   tmpts = tmpts + mpowers[parseInt(form.SO1.value)];
   tmpts = tmpts + mpowers[parseInt(form.SO2.value)];
   tmpts = tmpts + mpowers[parseInt(form.SO3.value)];
   tmpts = tmpts + mpowers[parseInt(form.SO4.value)];
   tmpts = tmpts + mpowers[parseInt(form.SO5.value)];
   tmpts = tmpts + mpowers[parseInt(form.SO6.value)];
   tmpts = tmpts + mpowers[parseInt(form.MOP.value)];
   tmpts = tmpts + skills[parseInt(form.ATH.value)];
   tmpts = tmpts + skills[parseInt(form.CPU.value)];
   tmpts = tmpts + skills[parseInt(form.ELE.value)];
   tmpts = tmpts + skills[parseInt(form.GUN.value)];
   tmpts = tmpts + skills[parseInt(form.UNA.value)];
   tmpts = tmpts + skills[parseInt(form.INV.value)];
   tmpts = tmpts + skills[parseInt(form.COM.value)];
   tmpts = tmpts + skills[parseInt(form.LOR.value)];
   tmpts = tmpts + skills[parseInt(form.MEC.value)];
   tmpts = tmpts + skills[parseInt(form.MED.value)];
   tmpts = tmpts + skills[parseInt(form.ARM.value)];
   tmpts = tmpts + skills[parseInt(form.PER.value)];
   tmpts = tmpts + skills[parseInt(form.PRO.value)];
   tmpts = tmpts + skills[parseInt(form.VEH.value)];
   tmpts = tmpts + skills[parseInt(form.SCI.value)];
   tmpts = tmpts + skills[parseInt(form.STE.value)];
   tmpts = tmpts + skills[parseInt(form.STW.value)];
   tmpts = tmpts + skills[parseInt(form.SUB.value)];
   tmpts = tmpts + skills[parseInt(form.SUR.value)];
   tmpts = tmpts + skills[parseInt(form.TAC.value)];
   tmpts = tmpts + amberage[parseInt(form.amberAGE.value)];
   tmpts = tmpts + chaosage[parseInt(form.chaosAGE.value)];
   re = /\$/g;
   

// Power Skills**************************************

form.PATskill.value = parseInt(eval(form.INT.value/5)) + parseInt(eval(form.PAT.value));
   if (form.PAT.value<1)
{
form.PATskill.value = 0;
}
form.LOGskill.value = parseInt(eval(form.INT.value/5)) + parseInt(eval(form.LOG.value));
   if (form.LOG.value<1)
{
form.LOGskill.value = 0;
} 
form.JOJskill.value = parseInt(eval(form.INT.value/5)) + parseInt(eval(form.JOJ.value));
   if (form.JOJ.value<1)
{
form.JOJskill.value = 0;
} 
form.OMPskill.value = parseInt(eval(form.INT.value/5)) + parseInt(eval(form.OMP.value));
   if (form.OMP.value<1)
{
form.OMPskill.value = 0;
} 
form.TRUskill.value = parseInt(eval(form.INT.value/5))+parseInt(eval(form.TRU.value)) + eval(form.TRUadd.value);
   if (eval(form.TRU.value)+eval(form.TRUadd.value)<1)
{
form.TRUskill.value = 0;
}
form.SHPskill.value = parseInt(eval(form.END.value/5))+parseInt(eval(form.SHP.value)) + eval(form.SHPadd.value);
   if (eval(form.SHP.value)+eval(form.SHPadd.value)<1)
{
form.SHPskill.value = 0;
}
form.SO1skill.value = parseInt(eval(form.PSY.value/5))+parseInt(eval(form.SO1.value)) + eval(form.SO1add.value);
   if (eval(form.SO1.value)+eval(form.SO1add.value)<1)
{
form.SO1skill.value = 0;
}
form.SO2skill.value = parseInt(eval(form.PSY.value/5))+parseInt(eval(form.SO2.value)) + eval(form.SO2add.value);
   if (eval(form.SO2.value)+eval(form.SO2add.value)<1)
{
form.SO2skill.value = 0;
}
form.SO3skill.value = parseInt(eval(form.INT.value/5))+parseInt(eval(form.SO3.value)) + eval(form.SO3add.value);
   if (eval(form.SO3.value)+eval(form.SO3add.value)<1)
{
form.SO3skill.value = 0;
}
form.SO4skill.value = parseInt(eval(form.PSY.value/5))+parseInt(eval(form.SO4.value)) + eval(form.SO4add.value);
   if (eval(form.SO4.value)+eval(form.SO4add.value)<1)
{
form.SO4skill.value = 0;
}
form.SO5skill.value = parseInt(eval(form.PSY.value/5))+parseInt(eval(form.SO5.value)) + eval(form.SO5add.value);
   if (eval(form.SO5.value)+eval(form.SO5add.value)<1)
{
form.SO5skill.value = 0;
}
form.SO6skill.value = parseInt(eval(form.PSY.value/5))+parseInt(eval(form.SO6.value)) + eval(form.SO6add.value);
   if (eval(form.SO6.value)+eval(form.SO6add.value)<1)
{
form.SO6skill.value = 0;
}
form.MOPskill.value = parseInt(eval(form.INT.value/5))+parseInt(eval(form.MOP.value)) + eval(form.MOPadd.value);
   if (eval(form.MOP.value)+eval(form.MOPadd.value)<1)
{
form.MOPskill.value = 0;
}

// Skills ********************************************

form.ATHskill.value = parseInt(eval(form.END.value/5))+parseInt(eval(form.amberAGE.value/3))+parseInt(eval(form.ATH.value));
   if (form.ATH.value<1)
{
form.ATHskill.value = 0;
}
form.CPUskill.value = parseInt(eval(form.INT.value/5))+parseInt(eval(form.amberAGE.value/3))+parseInt(eval(form.CPU.value));
   if (form.CPU.value<1)
{
form.CPUskill.value = 0;
}   
form.ELEskill.value = parseInt(eval(form.INT.value/5))+parseInt(eval(form.amberAGE.value/3))+parseInt(eval(form.ELE.value));
   if (form.ELE.value<1)
{
form.ELEskill.value = 0;
}
form.GUNskill.value = parseInt(eval(form.REF.value/5))+parseInt(eval(form.amberAGE.value/3))+parseInt(eval(form.GUN.value));
   if (form.GUN.value<1)
{
form.GUNskill.value = 0;
}
form.UNAskill.value = parseInt(eval(form.REF.value/5))+parseInt(eval(form.amberAGE.value/3))+parseInt(eval(form.UNA.value));
   if ((form.REF.value)<(form.STR.value))
{
form.UNAskill.value = parseInt(eval(form.STR.value/5))+parseInt(eval(form.amberAGE.value/3))+parseInt(eval(form.UNA.value));
}
   if (form.UNA.value<1)
{
form.UNAskill.value = 0;
}
form.INVskill.value = parseInt(eval(form.AWR.value/5))+parseInt(eval(form.amberAGE.value/3))+parseInt(eval(form.INV.value));
   if (form.INV.value<1)
{
form.INVskill.value = 0;
}
form.COMskill.value = parseInt(eval(form.CHR.value/5))+parseInt(eval(form.amberAGE.value/3))+parseInt(eval(form.COM.value));
   if (form.COM.value<1)
{
form.COMskill.value = 0;
}
form.LORskill.value = parseInt(eval(form.INT.value/5))+parseInt(eval(form.amberAGE.value/3))+parseInt(eval(form.LOR.value));
   if (form.LOR.value<1)
{
form.LORskill.value = 0;
}
form.MECskill.value = parseInt(eval(form.INT.value/5))+parseInt(eval(form.amberAGE.value/3))+parseInt(eval(form.MEC.value));
   if (form.MEC.value<1)
{
form.MECskill.value = 0;
}
form.MEDskill.value = parseInt(eval(form.INT.value/5))+parseInt(eval(form.amberAGE.value/3))+parseInt(eval(form.MED.value));
   if (form.MED.value<1)
{
form.MEDskill.value = 0;
}
form.ARMskill.value = parseInt(eval(form.REF.value/5))+parseInt(eval(form.amberAGE.value/3))+parseInt(eval(form.ARM.value));
   if (form.ARM.value<1)
{
form.ARMskill.value = 0;
}
form.PERskill.value = parseInt(eval(form.AWR.value/5))+parseInt(eval(form.amberAGE.value/3))+parseInt(eval(form.PER.value));
   if (form.PER.value<1)
{
form.PERskill.value = 0;
}   
form.VEHskill.value = parseInt(eval(form.REF.value/5))+parseInt(eval(form.amberAGE.value/3))+parseInt(eval(form.VEH.value));
   if (form.VEH.value<1)
{
form.VEHskill.value = 0;
}
form.PROskill.value = parseInt(eval(form.INT.value/5))+parseInt(eval(form.amberAGE.value/3))+parseInt(eval(form.PRO.value));
   if (form.PRO.value<1)
{
form.PROskill.value = 0;
}
form.SCIskill.value = parseInt(eval(form.INT.value/5))+parseInt(eval(form.amberAGE.value/3))+parseInt(eval(form.SCI.value));
   if (form.SCI.value<1)
{
form.SCIskill.value = 0;
}
form.STEskill.value = parseInt(eval(form.REF.value/5))+parseInt(eval(form.amberAGE.value/3))+parseInt(eval(form.STE.value));
   if (form.STE.value<1)
{
form.STEskill.value = 0;
}
form.STWskill.value = parseInt(eval(form.CHR.value/5))+parseInt(eval(form.amberAGE.value/3))+parseInt(eval(form.STW.value));
   if (form.STW.value<1)
{
form.STWskill.value = 0;
}
form.SUBskill.value = parseInt(eval(form.CHR.value/5))+parseInt(eval(form.amberAGE.value/3))+parseInt(eval(form.SUB.value));
   if (form.SUB.value<1)
{
form.SUBskill.value = 0;
}
form.SURskill.value = parseInt(eval(form.INT.value/5))+parseInt(eval(form.amberAGE.value/3))+parseInt(eval(form.SUR.value));
   if (form.SUR.value<1)
{
form.SURskill.value = 0;
}
form.TACskill.value = parseInt(eval(form.INT.value/5))+parseInt(eval(form.amberAGE.value/3))+parseInt(eval(form.TAC.value));
   if (form.TAC.value<1)
{
form.TACskill.value = 0;
}

//Creatures *********************************

//   if (form.PAT.value>4)
//{
//form.CRMax1.value = parseInt(eval(form.PATskill.value))
//}

//form.CR1str.value = eval(eval(form.CR1strIMP.value)+1) * 10 + eval(eval(form.CR1strHDN.value) * eval(form.CR1strIMP.value)+1);
//form.CR1ref.value = eval(eval(form.CR1refIMP.value)+1) * 10 + eval(form.CR1refHDN.value) * eval(form.CR1refIMP.value);
//form.CR1end.value = eval(eval(form.CR1endIMP.value)+1) * 10 + eval(form.CR1endHDN.value) * eval(form.CR1endIMP.value);
//form.CR1siz.value = eval(eval(form.CR1sizIMP.value)+1) * 10 + eval(form.CR1sizHDN.value) * eval(form.CR1sizIMP.value);
//form.CR1psy.value = eval(eval(form.CR1psyIMP.value)+1) * 10 + eval(form.CR1psyHDN.value) * eval(form.CR1psyIMP.value);
//form.CR1int.value = eval(eval(form.CR1intIMP.value)+1) * 10 + eval(form.CR1intHDN.value) * eval(form.CR1intIMP.value);
//form.CR1awr.value = eval(eval(form.CR1awrIMP.value)+1) * 10 + eval(form.CR1awrHDN.value) * eval(form.CR1awrIMP.value);
//form.CR1chr.value = eval(eval(form.CR1chrIMP.value)+1) * 10 + eval(form.CR1chrHDN.value) * eval(form.CR1chrIMP.value);

// ******************************************* 

   points = tmpts;
   pointsleft = 300 - tmpts;
   setpoints(form,points,pointsleft);
  
}
function incStat(form,stat,val) {
   if (val < 0) {
      alert("Minimum value for " + stat + " is 0.");
      val =0;
      form.eval(name).value = 0;
   } 
   if (val > 60) {
      alert("Maximum value for " + stat + " is 60.");
      val = 60;
   }
   fix_stealth(form);
}

function dontchangeme(form){
   alert("You can't change that field.");
   setpoints(form,points,pointsleft);
}


function setpoints(form,pts,ptsleft) {
   form.pointsleft.value = ptsleft;
   form.points.value = pts;
}

function resetpoints(){
   points = 0;
   pointsleft = 300;
}

function start_new (u) {
  var newwin;
  newwin=window.open(u, "_blank", "toolbar=no,location=no,directories=no,status=no,menubar=no,resizable=yes,scrollbars=yes,width=550,height=250");
}

function fix_stealth (form) {
   vallist = new Array("-5","-2","-1","","+1","+2","+3","+4","+5");
   valnames = new Array("-5 (default)", "-2 (1/2 pt)", "-1 (1 pt)", "   (2 pts)", "+1 (4 pts)", " +2 (8 pts)", "+3 (16 pts)", "+4 (24 pts)", "+5 (32 pts)");
   if (Number(form.INT.value) > Number(form.REF.value)) {
      var a="INT";
      var b="int";
   } else {
      var a="REF";
      var b="ref";
   }
   for (var i=0; i <= 8; i++) {
   }
}
