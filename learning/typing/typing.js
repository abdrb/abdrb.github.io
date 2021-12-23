var startTm;
var ans = "", col = "", rand = "no";
allofltrs=0;
rightltrs=0;
wrongltrs=0;
percent1=0;
percent2=0;
index=0;
tm1=0;
nInt=0;
nImt=0;
spceltrs=0;
d1=5;
d2=30;
idd=0;
//window.defaultStatus="London Center - Abdurab Ali";

function stting()
{
var indx11 = document.settingform.Dlist1.selectedIndex;
var indx22 = document.settingform.Dlist2.selectedIndex;
d1 = document.settingform.Dlist1.options[indx11].value;
d2 = document.settingform.Dlist2.options[indx22].value;
}
function timertime()
				{
				tm1++;
				document.rsltform.TM.value =tm1;
				mg=((allofltrs/d1)/tm1).toFixed(0);
				document.rsltform.TSP.value=mg;

				percent2=allofltrs/wrongltrs
				nImt =100/percent2;
				mInt =((100/(d2/mg))/2)+(nInt/2)-nImt;
				if (mInt > 100){mInt=100}
				document.rsltform.TRT.value=(mInt).toFixed(0) +"%";
				}
function timer1()
				{
				if (index<Lttr.length-1)
						{
						index++;
						}
				else
						{
						index=0;
						index++;
						}
				}
function startrand()
				{
				ref = setInterval("timer1()",1);
				rand = "yes";
				}
function stoprand()
				{
				clearInterval(ref);
				rand = "no";
				}

function func1()
{

if (startTm!="yes"){window.setInterval("timertime()",60000);}
startTm="yes";

document.formtimer.txt1.value=document.formtimer.txt1.value + document.myform1.T2.value;

if (document.myform1.T1.value == document.myform1.T2.value)
		{
		document.myform1.T1.style.backgroundColor ="#00FF00"

		if (rand=="no")
		{
				if (index<Lttr.length-1)
						{
						index++;
						}
				else
						{
						index=0;
						index++;
						}
		}

		idd=index;
		
		switch(index)
			{
			case idd:
			if (idd>=Lttr.length-1){idd=0};
			document.myform1.T1.value =Lttr[idd+1]
			document.images.Limg.src=Lhand[idd+1]
			document.images.Rimg.src=Rhand[idd+1]
			document.images.bttn.src=Bttn[idd+1]
			break;
			}
			document.myform1.T3.value =document.myform1.T1.value;
			rightltrs = rightltrs + 1;
			document.rsltform.TT.value =rightltrs;
			
			if (rand=="yes")
			{
				if (spceltrs<d1)
					{
					spceltrs=spceltrs+1;
					}
					else
					{
					document.myform1.T3.value = " "
					document.myform1.T1.value = " "
					document.images.Limg.src="images/Lhand5.gif"
					document.images.Rimg.src="images/Rhand5.gif"
					document.images.bttn.src="images/spce.gif"
					spceltrs=0;
					}
			}		
		}
		else
		{
		document.myform1.T1.style.backgroundColor ="#FF0000"
		wrongltrs = wrongltrs + 1;
		document.rsltform.TF.value =wrongltrs;
		}
document.myform1.T2.value="";
allofltrs = allofltrs + 1;
document.rsltform.TA.value =allofltrs;
percent1=allofltrs/rightltrs 
nInt =100/percent1;
document.rsltform.TACC.value=(nInt).toFixed(1) +"%";
}
