<?php 
function getTitle($l)
{
	global $language;
	return "Automation software for advanced users";
}
function insertSection($l){
?>
<table width="590" border="0" cellspacing="0" cellpadding="0" align="center" >
<tr><td align=left>


<!--
������ �������� (Explorer only!) ��������� ��������� ���������� HTML ��������, �� ������� ����� �������� (�������� ������-���� ���� ��������� ��������) � ������� � ��������� ��������� ���� �������� � ������������� ��������� �� ����� ��������. 
��� ��������� �� ������� ����� ��������� �����. ����� � ��������
������� by IPv6 @2006 WiredPlane.com
-->
<script>
var whichEl = null;
var activeEl = null;
var sScreenshotPath="http://www.doronchenko.ru/uploads/posts/1144289873_kotdavinchi.jpg";

function checkEl() {
	if (whichEl!=null) { return false }
}

document.onselectstart = checkEl;
function grabEl() 
{       // function for onmousedown
	if(event.srcElement.name!="lf_preview" && event.srcElement.id!="screenshot_field"){
		whichEl = event.srcElement;

		if (whichEl != activeEl) {
			if(activeEl!=null){
				whichEl.style.zIndex = activeEl.style.zIndex + 1;
			}
			activeEl = whichEl;
		}


		whichEl.style.pixelLeft = whichEl.offsetLeft;
		whichEl.style.pixelTop = whichEl.offsetTop;

		currentX = (event.clientX + document.body.scrollLeft)+7;
		currentY = (event.clientY + document.body.scrollTop); 
	}
}

function moveEl() 
{       // function for onmousemove
	if (whichEl == null) { return };

	newX = (event.clientX + document.body.scrollLeft);
	newY = (event.clientY + document.body.scrollTop);

	distanceX = (newX - currentX);
	distanceY = (newY - currentY);
	currentX = newX;
	currentY = newY;

	whichEl.style.pixelLeft += distanceX;
	whichEl.style.pixelTop += distanceY;
	event.returnValue = false;
}

function dropEl() 
{       // function for onmouseup
	whichEl = null;
}

function cursEl() 
{
	if(event.srcElement.name!="lf_preview" && event.srcElement.id!="screenshot_field"){
		event.srcElement.style.cursor = "pointer";
	}

}

function setScreenshot()
{
	ThisForm=document.forms['main'];
	sScreenshotPath=ThisForm.userfile.value;
	document.images['lf_preview'].src='file:///'+sScreenshotPath;
}

var iMarkCount=1;
function AddMark()
{
	ThisForm=document.forms['main'];
	var lColor=ThisForm.lcolor.value;
	var lTrans=ThisForm.ltrans.value;
	var hColor=ThisForm.hcolor.value;
	var lSize=ThisForm.lsize.value;
	var LabelDiv="<span style='text-align: center; margin: 1; padding: 1; position:absolute; width: "+lSize/2+"px; height: "+lSize/2+"px; background-color: "+lColor+"; border: 1 solid black; filter: progid:DXImageTransform.Microsoft.Alpha(opacity="+lTrans+"); font-size: 1px;' id='mark_"+iMarkCount+"'></span>";
	document.all['screenshot_field'].innerHTML=LabelDiv+document.all['screenshot_field'].innerHTML;
	iMarkCount++;
}

function DelLastMark()
{
	if(iMarkCount<=1){
		alert("������ �������!");
		return;
	}
	iMarkCount--;
	document.all["mark_"+iMarkCount].outerHTML="";
}

var iLabelCount=1;
function AddLabel()
{
	ThisForm=document.forms['main'];
	if(ThisForm.newlabel.value.length==0){
		alert("������� ����� ��� ����� �������!");
		return;
	}
	var lColor=ThisForm.lcolor.value;
	var lTrans=ThisForm.ltrans.value;
	var hColor=ThisForm.hcolor.value;
	var lSize=ThisForm.lsize.value;
	var sLabelValue=iLabelCount+". "+ThisForm.newlabel.value;
	var sLabel="&nbsp;"+iLabelCount+"&nbsp;";
	sLabelValue = sLabelValue.replace(/\"/g,"&quot;");
	sLabelValue = sLabelValue.replace(/\'/g,"&apos;");
	var LabelDiv="<span style='text-align: center; vertical-align: middle; margin: 1; padding: 1; position:absolute; width: "+lSize+"px; height: "+lSize+"px; background-color: "+lColor+"; border: 1 solid black; filter: progid:DXImageTransform.Microsoft.Alpha(opacity="+lTrans+")' id='label_"+iLabelCount+"'>"+sLabel+"</span>";
	var LabelTextDiv="<input type=text size=50 id='label_text_"+iLabelCount+"' name='label_text_"+iLabelCount+"' value=\""+sLabelValue+"\">";
	document.all['screenshot_field'].innerHTML=LabelDiv+document.all['screenshot_field'].innerHTML;
	document.all['screenshot_legend'].innerHTML=document.all['screenshot_legend'].innerHTML+LabelTextDiv;
	ThisForm.newlabel.value="";
	iLabelCount++;
}

function DelLastLabel()
{
	if(iLabelCount<=1){
		alert("������ �������! ������� �������� ������ ��� �������� :)");
		return;
	}
	iLabelCount--;
	document.all["label_"+iLabelCount].outerHTML="";
	document.all["label_text_"+iLabelCount].outerHTML="";
}

function GenerateResult()
{
	var res="";
	ThisForm=document.forms['main'];
	var lColor=ThisForm.lcolor.value;
	var lTrans=ThisForm.ltrans.value;
	var hColor=ThisForm.hcolor.value;
	var lSize=ThisForm.lsize.value;
	var imx=document.all["lf_preview"].style.pixelLeft;
	var imy=document.all["lf_preview"].style.pixelTop;
	res+="<!-- Generated by DTHMHelpBuilder (made by IPv6, (c)2006 WiredPlane.com). Use on your oun risk -->\n";
	res+="<div id='screenshot_field' style='position: relative; left: 0; top: 0;'><!-- position: relative - �����������! -->\n";
	res+="<img src='"+sScreenshotPath+"' style='z-index: 1;' >\n";
	for(i=1;i<iMarkCount;i++){
		var LabelDiv="<span style='position:absolute; width: "+lSize/2+"px; height: "+lSize/2+"px; font-size: 1px; top: "+(document.all["mark_"+i].style.pixelTop-imy)+"; left: "+(document.all["mark_"+i].style.pixelLeft-imx)+"; margin: 1; padding: 1; background-color: "+lColor+"; border: 1 solid black;filter: progid:DXImageTransform.Microsoft.Alpha(opacity="+lTrans+")' id='mark_"+i+"'></span>\n";
		res+=LabelDiv;
	}
	for(i=1;i<iLabelCount;i++){
		var iT=document.all["label_"+i].innerHTML;
		var LabelDiv="<span id='label_"+i+"' style='position:absolute; width: "+lSize+"; height: "+lSize+"; top: "+(document.all["label_"+i].style.pixelTop-imy)+"; left: "+(document.all["label_"+i].style.pixelLeft-imx)+"; text-align: center; vertical-align: middle; margin: 1; padding: 1; background-color: "+lColor+"; border: 1 solid black;filter: progid:DXImageTransform.Microsoft.Alpha(opacity="+lTrans+")' ";
		LabelDiv+=' onmouseenter=\'document.all["label_text_'+i+'"].style.backgroundColor="'+hColor+'";\' onmouseleave=\'document.all["label_text_'+i+'"].style.backgroundColor="transparent";\'';
		/*if(document.all["label_text_"+i].value.length>0){
			LabelDiv+=" title='";
			LabelDiv+=document.all["label_text_"+i].value;
			LabelDiv+="'";
		}*/
		LabelDiv+=">"+iT+"</span>\n";
		res+=LabelDiv;
	}
	res+="</div>\n";
	res+="<br>\n";
	res+="<div id='screenshot_legend'>\n";
	for(i=1;i<iLabelCount;i++){
		if(document.all["label_text_"+i].value.length>0){
			res+="<div id='label_text_"+i+"' style='padding:1; margin:1;' ";
			res+=' onmouseenter=\'document.all["label_'+i+'"].style.backgroundColor="'+hColor+'";\' onmouseleave=\'document.all["label_'+i+'"].style.backgroundColor="'+lColor+'";\'';
			res+=">";
			var sLabelValue =document.all["label_text_"+i].value;
			//sLabelValue = sLabelValue.replace(/\"/g,"&quot;");
			//sLabelValue = sLabelValue.replace(/\'/g,"&apos;");
			res+=sLabelValue;
			res+="</div>\n";
		}
	}
	res+="</div>";
	res+="<!-- End of Generated content -->\n";
	return res;
}

function TestPage()
{
	var dn=window.open("","_blank");
	dn.document.open();
	dn.document.write("<html><body>");
	dn.document.write("��� ��� ����� ��������� � ��� �� ��������. ����������� ��� DIV�� � ��. ����� � ����� �������� ����� CSS. ������� ������ ����������� ��������� � ���������� � �������<hr>");
	var sLine=GenerateResult();
	dn.document.write(sLine);
	dn.document.write("<hr>���������. ���������� ��� ���� ���� �����:<br><pre>");
	/*
	reLT=new RegExp("<","g");
	reGT=new RegExp(">","g");
	sLine = sLine.replace(reLT,"&lt;");
	sLine = sLine.replace(reGT,"&gt;");
	dn.document.write(sLine);
	dn.document.write("</pre>");
	*/
	dn.document.write("<table border=1 width=100%><tr><td><textarea wrap=off rows=30 style='width: 100%;'>");
	dn.document.write(sLine);
	dn.document.write("</textarea></table>");
	dn.document.write("</body></html>");
	dn.document.close();
}

</script>

<div id=h1>Free, online Annotation builder. IE6+ only</div><br>
<form name="main" id="main" method="get" action="none">
������ �������� ��������� ��������� ���������� HTML ��������, �� ������� ����� �������� (�������� ������-���� ���� ��������� ��������) � ������� � ��������� ��������� ���� �������� � ������������� ��������� �� ����� ��������. ��� ��������� �� ������� ����� ��������� �����. ����� � ��������
������� ����� ���������������� ������ �������� � ������� CSS, �� ����� �������� ������� ����������� �� ������ ����� ������� ����-�-������. �������� ��� Explorer (��� ��� ��������� ������������ ��� ������������� � chm ������)
<hr>
1) ������� ��������-��� (������� ����): <br><input type=file size=30 name="userfile" value="" onChange="setScreenshot();"><br>
2) ���������� �������. ����� ���������� ���������� ����� �� ������ ����� ��������.<br>�� ������������� �������������� ����� ������ � ���� ������<br>
3) ��������� ��������� ��������� � ����� "��������������/�������� ���������"<br><br>
�������� ������<br>
<input type=text size=60 name="newlabel" value=""> <input type=button value="+�����" onClick="AddMark();"><input type=button value="-�����" onClick="DelLastMark();"><br>
<input type=button value="�������� �����" onClick="AddLabel();">
<input type=button value="������� ���������" onClick="DelLastLabel();"><br>
<hr>
<div id="screenshot_legend" style='flo_at: right; width: 40%; text-align: left;'></div>
<div id="screenshot_field" onmouseover='cursEl();' onmousemove='moveEl();' onmouseup='dropEl();' onmouseleave='dropEl();' onmousedown='grabEl();' style='position: relative; left: 0; top: 0;'><!-- position: relative - �����������! -->
<img id="lf_preview" name="lf_preview" src="http://www.doronchenko.ru/uploads/posts/1144289873_kotdavinchi.jpg">
</div>
<hr>
��������� ��������� ����������:<br>
���� ��������<br>
<input type=text name=lcolor value="yellow"> <br>
������� ������������ ��������<br>
<input type=text name=ltrans value="70"> <br>
���� ��������� ��� ��������� �������<br>
<input type=text name=hcolor value="red"> <br>
������ �������<br>
<input type=text name=lsize value="20"> <br>
<br>
<input type=button value="��������������/�������� ���������" onClick="TestPage();"><br>
</form>
<hr>
������� by IPv6 @2006 <a href="http://www.wiredplane.com/">WiredPlane.com</a>
</td></tr>
</table>
<br><br>
<?php 
}
include("../cgi-bin/wp_layout.php");
printLayout("common");
?>