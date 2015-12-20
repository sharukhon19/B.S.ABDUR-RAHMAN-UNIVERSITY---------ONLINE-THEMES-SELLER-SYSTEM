<head>
<script>
function abc()
{
var arr=new Array("usepics/neck.jpg","usepics/ban7.jpg","usepics/ban5.jpg","usepics/ban1.jpg","usepics/akkriti-banner.jpg");
var ind=eval(document.f1.h1.value);
document.img.src=arr[ind];
document.f1.h1.value=ind+1;
if(document.f1.h1.value==5)
{
document.f1.h1.value=0;
}
}
setInterval("abc()",3000);
</script>
</head>
<body>
<div id="RightPart">
  <div id="Page"><img src="usepics/neck.jpg" alt="" width="669" height="210" name="img"/>
  <form name="f1">
  <input type="hidden" name="h1" value="0" />
  </form>
  <div><br/><center><h2><font face="Lucida Handwriting"  color="#00CCFF">Latest Technology News</font></h2></center></div>
 <table border="0">
 <tr><td> 
<img src="usepics/news1.jpg" width="150" height="180"/>
</td>
<td colspan="2">
<font face="Lucida Handwriting" size="+1" color="#99CC33">
Apple realises its latest Iphone OS The New IOS9!!!!</font><br>
<font face="Comic Sans MS"><strong>iOS 9 is the newest update to iOS, and launched officially to the public on 16 September 2015. If you've got an iPhone 4s (or later), an iPad 2 (or later), either of the iPad mini models, or a fifth-gen iPod touch,
 your device is officially rated as iOS 9-compatible, and you can update to iOS 9 for free.
                                                                                                 .</strong></font></td>
</tr>
<tr>
<td>
<br>
<img src="usepics/news2.jpg" /><br>
<font  color="#FF66CC" face="Lucida Handwriting">new Design</font><br>
<font face="Comic Sans MS"><strong>Sep 21, 2015<br>
iOS 9, the next version of Apple's software operating system for iPad, iPhone and iPod touch, was unveiled at WWDC 2015..</strong></font></td>

<td>
<img src="usepics/news3.jpg" /><br>
<font  color="#FF66CC" face="Lucida Handwriting"> 3D Touch </font><br>

<font face="Comic Sans MS"><strong>Sep 21, 2015<br>
3D Touch, which is only available on the iPhone 6S and iPhone 6S Plus, is deeply incorporated into iOS 9. ..</strong></font></td>
<td>
<img src="usepics/news4.jpg" /><br>
<font  color="#FF66CC" face="Lucida Handwriting">Battery, performance and security improvements </font><br>

<font face="Comic Sans MS"><strong>Mar 30, 2011<br>
iOS 9 also includes many under-the-hood improvements such as improved performance with its Metal API, up to an hour more of battery life, improved security using advanced encryption and new 6-digit passcodes for Touch ID-enabled devices (increased from 4).</strong></font></td>
</tr>
</table>
  </div>
  </div>
  </body>