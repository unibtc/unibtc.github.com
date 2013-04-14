<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Link RSS test</title>
</head>

<body>

<p>

Serverside PHP

<?php include ("http://rssdog.com/index.htm?url=http%3A%2F%2Fwww.reddit.com%2Fr%2FBitcoin%2F.rss&mode=html&showonly=&maxitems=0&showdescs=1&desctrim=0&descmax=0&tabwidth=100%25&linktarget=_blank&bordercol=%23d4d0c8&headbgcol=%23999999&headtxtcol=%23ffffff&titlebgcol=%23f1eded&titletxtcol=%23000000&itembgcol=%23ffffff&itemtxtcol=%23000000&ctl=0"); ?>


  <script type="text/javascript" src="http://coinurl.com/script/jquery-latest.min.js"></script>
  
  <script type="text/javascript">
$(function() {
    var include = Array();
    //Leave empty to convert all links on the page or specify keywords
    //which URL must contain to be processed
   
    var exclude = Array();
    //Specify keywords which URL must not contain to be processed
   
    var id = "3ec1d14d6eb82682cf5e74fb8dffb212";
    var redirect = "http://coinurl.com/redirect.php?id=" + id + "&url=";
    var links = $("a[href^='http']");
   
    for(var i = 0; i < links.length; i++) {
        var url = $(links[i]).attr("href");
       
        var deny = false;
        for(var j = 0; j < exclude.length; j++) {
            if(url.indexOf(exclude[j]) != -1) {
                deny = true;
                break;
            }
        }
        if(deny) {
            continue;
        }
       
        if(include.length > 0) {
            var allow = false;
            for(var j = 0; j < include.length; j++) {
                if(url.indexOf(include[j]) != -1) {
                    allow = true;
                    break;
                }
            }
            if(!allow) {
                continue;
            }
        }
       
        $(links[i]).attr("href",  redirect + encodeURIComponent(url));
    }
});
</script>


<script type="text/javascript" language="javascript" src="http://rssdog.com/index.htm?url=http%3A%2F%2Fwww.reddit.com%2Fr%2FBitcoin%2F.rss&amp;mode=javascript&amp;showonly=&amp;maxitems=0&amp;showdescs=1&amp;desctrim=0&amp;descmax=0&amp;tabwidth=100%25&amp;linktarget=_blank&amp;bordercol=%23d4d0c8&amp;headbgcol=%23999999&amp;headtxtcol=%23ffffff&amp;titlebgcol=%23f1eded&amp;titletxtcol=%23000000&amp;itembgcol=%23ffffff&amp;itemtxtcol=%23000000&amp;ctl=0">
</script>
<noscript>  You apparently do not have JavaScript enabled on your browser lest you would be viewing an RSS Feed here from <a href="http://www.rssdog.com/">RSS Dog</a> </noscript>

<p><a href="http://www.google.com">http://www.google.com</a></p>
<p><a href="http://www.reddit.com">http://www.reddit.com</a></p>
<p><a href="http://google.com">http://google.com</a></p>
</body> 
</html>
