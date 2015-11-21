
<html lang="en">
  <head>
    <?php include 'index_headers.php';?>
    <title> Sweet Treats </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
$(document).ready(function(){
    (function () {
        $("#galleryMenuHeading").addClass("active");
    })();


   $("#kids").click(function(){
        $("#cupCakesDiv").addClass("hidden");
        $("#adultThemeCakesDiv").addClass("hidden");
        $("#kidsCakesDiv").removeClass("hidden");
		    $("#cookiesDiv").addClass("hidden");
        $("#CakePopsDiv").addClass("hidden");
        $("#OtherTreatsDiv").addClass("hidden");
        $('.product-categories a').removeClass('active')
		    $("#Kid").addClass("active");
    });
    $("#cup").click(function(){
       $("#cupCakesDiv").removeClass("hidden");
        $("#adultThemeCakesDiv").addClass("hidden");
        $("#kidsCakesDiv").addClass("hidden");
		    $("#cookiesDiv").addClass("hidden");
        $("#CakePopsDiv").addClass("hidden");
        $("#OtherTreatsDiv").addClass("hidden");
		    $('.product-categories a').removeClass('active')
        $("#Cupa").addClass("active");
    });
    $("#theme").click(function(){
        $("#cupCakesDiv").addClass("hidden");
        $("#adultThemeCakesDiv").removeClass("hidden");
        $("#kidsCakesDiv").addClass("hidden");
		    $("#cookiesDiv").addClass("hidden");
        $("#CakePopsDiv").addClass("hidden");
        $("#OtherTreatsDiv").addClass("hidden");
        $('.product-categories a').removeClass('active')
		    $("#Themes").addClass("active");
    });
	$("#pops").click(function(){
		$("#cupCakesDiv").addClass("hidden");
        $("#adultThemeCakesDiv").addClass("hidden");
        $("#kidsCakesDiv").addClass("hidden");
		$("#cookiesDiv").addClass("hidden");
        $("#CakePopsDiv").removeClass("hidden");
        $("#OtherTreatsDiv").addClass("hidden");
        $('.product-categories a').removeClass('active')
		$("#Cake").addClass("active");

    });
	$("#cookies").click(function(){
        $("#cupCakesDiv").addClass("hidden");
        $("#adultThemeCakesDiv").addClass("hidden");
        $("#kidsCakesDiv").addClass("hidden");
		$("#cookiesDiv").removeClass("hidden");
        $("#CakePopsDiv").addClass("hidden");
        $("#OtherTreatsDiv").addClass("hidden");
        $('.product-categories a').removeClass('active')
		$("#Cookie").addClass("active");
    });
    $("#treats").click(function(){
       $("#cupCakesDiv").addClass("hidden");
        $("#adultThemeCakesDiv").addClass("hidden");
        $("#kidsCakesDiv").addClass("hidden");
		$("#cookiesDiv").addClass("hidden");
        $("#CakePopsDiv").addClass("hidden");
        $("#OtherTreatsDiv").removeClass("hidden");
        $('.product-categories a').removeClass('active')
		$("#other").addClass("active");
    });
});
</script>
  </head>
  <body>
    <div class="myContainer">
        <div class="leftGutter"></div>
        <div class="centralColumn">
          <div id="header"><?php include 'header.php';?></div>
                <div id="content" class="content1">
	<div class="gallery2Wrapper">
		<div class="product-categories">
				<span id="theme">
					<a id="Themes" href="#" class="active">Themed Cakes</a>
				</span>
				<span id="kids" >
					<a id="Kid" href="#">Kids Cakes</a>
				</span>
				<span id="cup" >
					<a id="Cupa" href="#">Cupcakes</a>
				</span>
				<span id="pops" >
					<a id="Cake" href="#">Cakepops</a>
				</span>
				<span id="cookies" >
					<a id="Cookie" href="#">Cookies</a>
				</span>
				<span id="treats" >
					<a id="other" href="#">Other Treats</a>
				</span>
		</div>

<div class="container-adult-theme-cakes1">

  <div class="wrap">


    <!-- Define all of the tiles: -->
	<!-- Adult theme cakes -->

<div class="adultThemeCakes" id="adultThemeCakesDiv" >
    <div class="box">
      <div class="boxInner">
        <a href="gallery/adult-themed-cakes/file1.jpg"><img src="gallery/adult-themed-cakes/file1.jpg" /></a>
      </div>
    </div>

    <div class="box">
      <div class="boxInner">
        <a href="gallery/adult-themed-cakes/file2.jpg"><img src="gallery/adult-themed-cakes/file2.jpg" /></a>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
       <a href="gallery/adult-themed-cakes/file3.jpg"> <img src="gallery/adult-themed-cakes/file3.jpg" /></a>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <a href="gallery/adult-themed-cakes/file4.jpg"><img src="gallery/adult-themed-cakes/file4.jpg" /></a>
	 </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <a href="gallery/adult-themed-cakes/file5.jpg"><img src="gallery/adult-themed-cakes/file5.jpg" /></a>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <a href="gallery/adult-themed-cakes/file6.jpg"><img src="gallery/adult-themed-cakes/file6.jpg" /></a>
      </div>
    </div>

    <div class="box">
      <div class="boxInner">
        <a href="gallery/adult-themed-cakes/file7.jpg"><img src="gallery/adult-themed-cakes/file7.jpg" /></a>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <a href="gallery/adult-themed-cakes/file8.jpg"><img src="gallery/adult-themed-cakes/file8.jpg" /></a>
      </div>
    </div>
    
    <div class="box">
      <div class="boxInner">
        <a href="gallery/adult-themed-cakes/file9.jpg"><img src="gallery/adult-themed-cakes/file9.jpg"/></a>
      </div>
    </div>
     <div class="box">
      <div class="boxInner">
        <a href="gallery/adult-themed-cakes/file10.jpg"><img src="gallery/adult-themed-cakes/file10.jpg"/></a>
      </div>
    </div>
	 <div class="box">
      <div class="boxInner">
        <a href="gallery/adult-themed-cakes/file11.jpg"><img src="gallery/adult-themed-cakes/file11.jpg"/></a>
      </div>
    </div>
	 <div class="box">
      <div class="boxInner">
        <a href="gallery/adult-themed-cakes/file12.jpg"><img src="gallery/adult-themed-cakes/file12.jpg"/></a>
      </div>
    </div>
	 <div class="box">
      <div class="boxInner">
        <a href="gallery/adult-themed-cakes/file13.jpg"><img src="gallery/adult-themed-cakes/file13.jpg"/></a>
      </div>
    </div>
	 <div class="box">
      <div class="boxInner">
        <a href="gallery/adult-themed-cakes/file14.jpg"><img src="gallery/adult-themed-cakes/file14.jpg"/></a>
      </div>
    </div>
	 <div class="box">
      <div class="boxInner">
        <a href="gallery/adult-themed-cakes/file15.jpg"><img src="gallery/adult-themed-cakes/file15.jpg"/></a>
      </div>
    </div>
	 <div class="box">
      <div class="boxInner">
        <a href="gallery/adult-themed-cakes/file16.jpg"><img src="gallery/adult-themed-cakes/file16.jpg"/></a>
      </div>
    </div>
	 <div class="box">
      <div class="boxInner">
        <a href="gallery/adult-themed-cakes/file17.jpg"><img src="gallery/adult-themed-cakes/file17.jpg"/></a>
      </div>
    </div>
	 <div class="box">
      <div class="boxInner">
        <a href="gallery/adult-themed-cakes/file18.jpg"><img src="gallery/adult-themed-cakes/file18.jpg"/></a>
      </div>
    </div>
	 <div class="box">
      <div class="boxInner">
        <a href="gallery/adult-themed-cakes/file19.jpg"><img src="gallery/adult-themed-cakes/file19.jpg"/></a>
      </div>
    </div>
	<div class="box">
      <div class="boxInner">
        <a href="gallery/adult-themed-cakes/file20.jpg"><img src="gallery/adult-themed-cakes/file20.jpg"/></a>
      </div>
    </div>
	
  </div>

  <!-- kids cakes -->

<div class="kidsCakes hidden" id="kidsCakesDiv">

  <div class="box">
    <div class="boxInner">
      <a href="gallery/kidscakes/File1.jpg"><img src="gallery/kidscakes/File1.jpg" /></a>
    </div>
  </div>
  <div class="box">
    <div class="boxInner">
     <a href="gallery/kidscakes/File2.jpg"><img src="gallery/kidscakes/File2.jpg" /></a>
    </div>
  </div>
  <div class="box">
    <div class="boxInner">
      <a href="gallery/kidscakes/File3.jpg"><img src="gallery/kidscakes/File3.jpg" /></a>
  </div>
  </div>
  <div class="box">
    <div class="boxInner">
      <a href="gallery/kidscakes/File4.jpg"><img src="gallery/kidscakes/File4.jpg" /></a>
    </div>
  </div>
  <div class="box">
    <div class="boxInner">
      <a href="gallery/kidscakes/File5.jpg"><img src="gallery/kidscakes/File5.jpg" /></a>
    </div>
  </div>
  <div class="box">
    <div class="boxInner">
      <a href="gallery/kidscakes/File6.jpg"><img src="gallery/kidscakes/File6.jpg" /></a>
    </div>
  </div>
  <div class="box">
    <div class="boxInner">
      <a href="gallery/kidscakes/File7.jpg"><img src="gallery/kidscakes/File7.jpg" /></a>
    </div>
  </div>
  <div class="box">
    <div class="boxInner">
      <a href="gallery/kidscakes/File8.jpg"><img src="gallery/kidscakes/File8.jpg" /></a>
    </div>
  </div>
  <div class="box">
    <div class="boxInner">
      <a href="gallery/kidscakes/File9.jpg"><img src="gallery/kidscakes/File9.jpg" /></a>
    </div>
  </div>
  <div class="box">
    <div class="boxInner">
      <a href="gallery/kidscakes/File10.jpg"><img src="gallery/kidscakes/File10.jpg" /></a>
    </div>
  </div>
  <div class="box">
    <div class="boxInner">
      <a href="gallery/kidscakes/File11.jpg"><img src="gallery/kidscakes/File11.jpg" /></a>
    </div>
  </div>
  <div class="box">
    <div class="boxInner">
      <a href="gallery/kidscakes/File12.jpg"><img src="gallery/kidscakes/File12.jpg" /></a>
    </div>
  </div>
  <div class="box">
    <div class="boxInner">
      <a href="gallery/kidscakes/File13.jpg"><img src="gallery/kidscakes/File13.jpg" /></a>
    </div>
  </div>
</div>


	<!-- Cup cakes -->


 <div  class="cupCakes hidden" id="cupCakesDiv">
   <div class="box">
     <div class="boxInner">
       <a href="gallery/cupcakes/File1.jpg"><img src="gallery/cupcakes/File1.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
      <a href="gallery/cupcakes/File2.jpg"><img src="gallery/cupcakes/File2.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/cupcakes/File3.jpg"><img src="gallery/cupcakes/File3.jpg" /></a>
   </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/cupcakes/File4.jpg"><img src="gallery/cupcakes/File4.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/cupcakes/File5.jpg"><img src="gallery/cupcakes/File5.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/cupcakes/File6.jpg"><img src="gallery/cupcakes/File6.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/cupcakes/File7.jpg"><img src="gallery/cupcakes/File7.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/cupcakes/File8.jpg"><img src="gallery/cupcakes/File8.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/cupcakes/File9.jpg"><img src="gallery/cupcakes/File9.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/cupcakes/File10.jpg"><img src="gallery/cupcakes/File10.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/cupcakes/File11.jpg"><img src="gallery/cupcakes/File11.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/cupcakes/File12.jpg"><img src="gallery/cupcakes/File12.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/cupcakes/File13.jpg"><img src="gallery/cupcakes/File13.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/cupcakes/File14.jpg"><img src="gallery/cupcakes/File14.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/cupcakes/File15.jpg"><img src="gallery/cupcakes/File15.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/cupcakes/File16.jpg"><img src="gallery/cupcakes/File16.jpg" /></a>
     </div>
   </div>
</div>


	<!-- Cookies -->


 <div  class="Cookies hidden" id="cookiesDiv">
   <div class="box">
     <div class="boxInner">
       <a href="gallery/cookies/File1.jpg"><img src="gallery/cookies/File1.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
      <a href="gallery/cookies/File2.jpg"><img src="gallery/cookies/File2.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/cookies/File3.jpg"><img src="gallery/cookies/File3.jpg" /></a>
   </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/cookies/File4.jpg"><img src="gallery/cookies/File4.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/cookies/File5.jpg"><img src="gallery/cookies/File5.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/cookies/File6.jpg"><img src="gallery/cookies/File6.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/cookies/File7.jpg"><img src="gallery/cookies/File7.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/cookies/File8.jpg"><img src="gallery/cookies/File8.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/cookies/File9.jpg"><img src="gallery/cookies/File9.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/cookies/File10.jpg"><img src="gallery/cookies/File10.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/cookies/File11.jpg"><img src="gallery/cookies/File11.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/cookies/File12.jpg"><img src="gallery/cookies/File12.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/cookies/File13.jpg"><img src="gallery/cookies/File13.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/cookies/File14.jpg"><img src="gallery/cookies/File14.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/cookies/File15.jpg"><img src="gallery/cookies/File15.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/cookies/File16.jpg"><img src="gallery/cookies/File16.jpg" /></a>
     </div>
   </div>
</div>

	<!-- Cake pops -->


 <div  class="cakePops hidden" id="CakePopsDiv">

    <div class="box">
      <div class="boxInner">
        <a href="gallery/cakepops/File1.jpg"><img src="gallery/cakepops/File1.jpg" /></a>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
       <a href="gallery/cakepops/File2.jpg"><img src="gallery/cakepops/File2.jpg" /></a>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <a href="gallery/cakepops/File3.jpg"><img src="gallery/cakepops/File3.jpg" /></a>
	 </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <a href="gallery/cakepops/File4.jpg"><img src="gallery/cakepops/File4.jpg" /></a>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <a href="gallery/cakepops/File5.jpg"><img src="gallery/cakepops/File5.jpg" /></a>
      </div>
    </div>
	<div class="box">
      <div class="boxInner">
        <a href="gallery/cakepops/File6.jpg"><img src="gallery/cakepops/File6.jpg" /></a>
      </div>
  </div>
  <div class="box">
      <div class="boxInner">
        <a href="gallery/cakepops/File7.jpg"><img src="gallery/cakepops/File7.jpg" /></a>
      </div>
  </div>
  <div class="box">
      <div class="boxInner">
        <a href="gallery/cakepops/File8.jpg"><img src="gallery/cakepops/File8.jpg" /></a>
      </div>
  </div>
  <div class="box">
      <div class="boxInner">
        <a href="gallery/cakepops/File9.jpg"><img src="gallery/cakepops/File9.jpg" /></a>
      </div>
  </div>
  <div class="box">
      <div class="boxInner">
        <a href="gallery/cakepops/File10.jpg"><img src="gallery/cakepops/File10.jpg" /></a>
      </div>
  </div>
  <div class="box">
      <div class="boxInner">
        <a href="gallery/cakepops/File11.jpg"><img src="gallery/cakepops/File11.jpg" /></a>
      </div>
  </div>
  <div class="box">
      <div class="boxInner">
        <a href="gallery/cakepops/File12.jpg"><img src="gallery/cakepops/File12.jpg" /></a>
      </div>
  </div>
  <div class="box">
      <div class="boxInner">
        <a href="gallery/cakepops/File13.jpg"><img src="gallery/cakepops/File13.jpg" /></a>
      </div>
  </div>
  <div class="box">
      <div class="boxInner">
        <a href="gallery/cakepops/File14.jpg"><img src="gallery/cakepops/File14.jpg" /></a>
      </div>
  </div>
  <div class="box">
      <div class="boxInner">
        <a href="gallery/cakepops/File15.jpg"><img src="gallery/cakepops/File15.jpg" /></a>
      </div>
  </div>
  <div class="box">
      <div class="boxInner">
        <a href="gallery/cakepops/File16.jpg"><img src="gallery/cakepops/File16.jpg" /></a>
      </div>
  </div>
  <div class="box">
      <div class="boxInner">
        <a href="gallery/cakepops/File17.jpg"><img src="gallery/cakepops/File17.jpg" /></a>
      </div>
  </div>
  <div class="box">
      <div class="boxInner">
        <a href="gallery/cakepops/File18.jpg"><img src="gallery/cakepops/File18.jpg" /></a>
      </div>
  </div>
  <div class="box">
      <div class="boxInner">
        <a href="gallery/cakepops/File19.jpg"><img src="gallery/cakepops/File19.jpg" /></a>
      </div>
  </div>
  <div class="box">
      <div class="boxInner">
        <a href="gallery/cakepops/File20.jpg"><img src="gallery/cakepops/File20.jpg" /></a>
      </div>
  </div>

</div>


  	<!-- Other Treats -->

 <div  class="otherTreats hidden" id="OtherTreatsDiv">

   <div class="box">
     <div class="boxInner">
       <a href="gallery/other-treats/File1.jpg"><img src="gallery/other-treats/File1.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
      <a href="gallery/other-treats/File2.jpg"><img src="gallery/other-treats/File2.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/other-treats/File3.jpg"><img src="gallery/other-treats/File3.jpg" /></a>
   </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/other-treats/File4.jpg"><img src="gallery/other-treats/File4.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/other-treats/File5.jpg"><img src="gallery/other-treats/File5.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/other-treats/File6.jpg"><img src="gallery/other-treats/File6.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/other-treats/File7.jpg"><img src="gallery/other-treats/File7.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/other-treats/File8.jpg"><img src="gallery/other-treats/File8.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/other-treats/File9.jpg"><img src="gallery/other-treats/File9.jpg" /></a>
     </div>
   </div>
   <div class="box">
     <div class="boxInner">
       <a href="gallery/other-treats/File10.jpg"><img src="gallery/other-treats/File10.jpg" /></a>
     </div>
   </div>
</div>


  </div>
  </div>
 </div>
  <!-- /#wrap -->
  </div>



        <div id="footer"><?php include 'footer.php';?></div>
</div>
<div class="rightGutter"></div>
      </div>
    <?php include 'index_scripts.php';?>
  </body>
</html>
