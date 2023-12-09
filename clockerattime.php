<!DOCTYPE html>
<html>
<!-- Created by Robert Brown Farley (brofarops) -->
<!-- This is TS#1524020689 -->
<!DOCTYPE html>
<html>
<head>
<style>
head {color: powderblue;
}
</style>

<head><title>TimeStamp TS#1524020689</title>

<meta name="viewport" content="width=device-width, initial-scale=1.5"></head>

<style>
hi , h2 , h3 , h4 , h5 , h6{
    color:red;
}
text{
    color:green;
}
body,background{
top:185px;
left:50px;
background-color:powderblue;
border:8px solid green;
}
</style>
      
  
<br />
Is equivalent to:<br />

04/18/2018 @ 3:04am (UTC)<br />

2018-04-18T03:04:49+00:00 in ISO 8601<br />

Wed, 18 Apr 2018 03:04:49 +0000 in RFC 822, 1036, 1123, 2822<br />

Wednesday, 18-Apr-18 03:04:49 UTC in RFC 2822<br />

2018-04-18T03:04:49+00:00 in RFC 3339<br />


    <hr color = "darkgreen" height="32px"><hr color = "darkgreen" height="32px"><center>&#8595</center>
</head>
<body>
<?php
    echo time();
    echo("<br>");
    echo microtime(true);
    echo("<br>");
    $d1 = new Datetime(); 
    echo $d1->format('U');
    echo("<br>");
     $d2 = new Datetime("now"); 
     echo $d2->format('U');
?>
<script>

 var ts = new Date().getTime()/1000;

console.log("My TS# for this project is TS#1524020689 \n" + "Your JS TS# for your project is :TS#" + ts + " or more accurately is ~>PHP TS# found in this code")
</script>
<script>
alert("Please Use this often");
alert("Yes there are other TimeStamp programs here");
alert("Please upvote if you find this useful");
alert("Your TimeStamp is ready for pickup");
</script>
<h1>Your Project TimeStamp:</h1><hr color = "darkpurple" heigth = "20px" ><br />
Because so many projects on here are being found as copied this tool was built to help you protect your projects better.<br /><br /><hr color = "lightred"><h2>Below is YOUR TimeStamp</h2><hr color = "darkgreen" height="32px"><center>&#8595</center>
<?php

setlocale(LC_ALL,"hu_HU.UTF8");
echo(strftime("%B. %d %Y. %A. %X %Z"));
echo ("<br>");
$t=time();
echo(date("m-d-Y",$t));
echo("<br>");
echo("TS#");
echo($t);
echo("&#8592");
echo("<br>");
echo("<br>");
echo("<hr>");
echo("Your TimeStamp: copy & paste: TS#");
echo( $t . "&#8592");
?>
<div id="#background"></div>
</body>
<br />
<br />
<footer> <hr color = "darkgreen" height="32px"><hr color = "darkgreen" height="32px"><h2>To Decode TimeStamp:</h2>
<a href="https://www.unixtimestamp.com/index.php">Decode TimeStamp Here</a><hr color = "lightblue"><hr color = "lightblue">
<h3>Copyright Protection:</h3>
<br /><br />If you need Copyright protection: <a href="https://m.safecreative.org/#">bookstore.org</a>
<?php
echo("<hr>");
echo "<p>Copyright &copy; 1974 - " . date("Y") . " BroFarOps&reg&#8482</p>" ;
?>
TS#1524020689
<script>
// Created by Robert Brown Farley (brofarops)
document.getElementByIds= function(codeId, userId, username){
    // codeId: is in code url (code.sololearn.com/[codeId]/)
    // userId: is in user profile url (https://www.sololearn.com/Profile/[userId])
    // username: i think that explanations are no needs ;)
    var check= function(){
        var codeFrame= window
        var slWindow= window.parent
        if(slWindow && (slWindow.location.href.indexOf("about:blank")===0)){
            // slWindow must be null if code run on mobile app
            slWindow= null
        }
        /*
        On mobile dont work because there arent info about code, but
        we try to detect if an comment with <!-- created by [creator] --> pattern
        exits in document source (inside head or body) and if not or is
        different by "username", its mean thats stolen
        */
        if(!slWindow){
            if(!username){
                /* you must insert an username for
                 comparison */
                return false
            }
            var pattern= /<!-- Created by (.*) -->/g;
            var docText= document.documentElement.outerHTML
            var start= docText.search(pattern)
            if(start < 0){
                return true
            }else{
                var end= docText.indexOf("-->", start)
                var commText= docText.slice(start, end+3)
                var commUserCreator= commText.replace(pattern, "$1")
                if(commUserCreator == username )
                    return false
                return true
            }
        }
        var codeUserId= slWindow.userId
        if(slWindow.publicId != codeId || (userId && userId!=codeUserId)){
            return true
        }
        return false
    }
    
    var isStolen= check()
    if(isStolen){
        document.documentElement.innerHTML="<div style='font-size:50px; font-weight:bolder; margin:0 auto; width:80%; text-align:center'>I have STOLEN original code</div>"
            return false
    }
    
}

/*
Below code is an example for call function (that you can make more hard to detect)
and load script... Try to copy this code and run it ;)
*/
window.addEventListener("DOMContentLoaded",function(){
    var thisCodeId= "W0Bh3c4M7LBv"
    var timeId = "TS#1525393132"
    var meId= "7885877"
    var me= ""
    document.getElementByIds(thisCodeId, meId, me)
}, true)



/* MINIFIED

document.getElementByIds=function(e,n,t){(function(){window;var r=window.parent;if(r&&0===r.location.href.indexOf("about:blank")&&(r=null),!r){if(!t)return!1;var i=/<!-- created by (.*) -->/g,o=document.documentElement.outerHTML,d=o.search(i);if(d<0)return!0;var u=o.indexOf("--\x3e",d);return o.slice(d,u+3).replace(i,"$1")!=t}var a=r.userId;return!!(r.publicId!=e||n&&n!=a)})()&&(document.documentElement.innerHTML="<div style='font-size:50px; font-weight:bolder; margin:0 auto; width:80%; text-align:center'>I have STOLEN original code</div>")};
*/


/* ... AND OBFUSCATED

eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('6.w=7(e,n,t){(7(){f;2 r=f.v;5(r&&0===r.s.q.8("x:y")&&(r=B),!r){5(!t)4!1;2 i=/<!-- A p (.*) -->/g,o=6.c.z,d=o.C(i);5(d<0)4!0;2 u=o.8("--\\k",d);4 o.l(d,u+3).m(i,"$1")!=t}2 a=r.D;4!!(r.T!=e||n&&n!=a)})()&&(6.c.U="<9 R=\'b-S:J; b-H:G; E:0 F; K:L%; Q-P:O\'>I M N h j</9>")};',57,57,'||var||return|if|document|function|indexOf|div||font|documentElement|||window||original||code|x3e|slice|replace|||by|href||location|||parent|getElementByIds|about|blank|outerHTML|created|null|search|userId|margin|auto|bolder|weight||50px|width|80|have|STOLEN|center|align|text|style|size|publicId|innerHTML'.split('|'),0,{}))
*/
alert("This code is protected in several ways, please do not try to copy, modify or alter in any manor");
alert("Let's keep this going ~");
alert("please upvote ✔😄 thanks");
</script>

</footer>
</html>