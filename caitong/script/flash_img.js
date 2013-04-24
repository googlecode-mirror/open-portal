
 var pics="images/img01.jpg|images/img02.jpg|images/img03.jpg"

var links="http://www.dzvip.cn|http://www.dzvip.cn|http://www.songlema.com"
//var links="|||||"

     var focus_width=700
     var focus_height=280
    // var text_height=20
     var swf_height = focus_height

	 var flashCode = '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/hotdeploy/flash/swflash.cab#version=6,0,0,0" width="'+ focus_width +'" height="'+ swf_height +'">';
     flashCode = flashCode + '<param name="allowScriptAccess" value="sameDomain"><param name="movie" value="flash/index.swf"><param name="quality" value="high"><param name="bgcolor" value="#F0F0F0"><param name="border" value="0">';
     flashCode = flashCode + '<param name="menu" value="false"><param name=wmode value="opaque">';
     flashCode = flashCode + '<param name="FlashVars" value="pics='+pics+'&links='+links+'&borderwidth='+focus_width+'&borderheight='+focus_height+'">';
     flashCode = flashCode + '<embed src="flash/index.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="'+ focus_width +'" height="'+ swf_height +'" FlashVars="pics='+pics+'&links='+links+'&borderwidth='+focus_width+'&borderheight='+focus_height+'"></embed>';
     flashCode = flashCode + '</object>';
     document.write(flashCode)
