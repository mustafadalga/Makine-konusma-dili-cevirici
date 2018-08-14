
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Konuşma Dili-Makine Dili Çevirici</title>
	<link rel="stylesheet" type="text/css" href="assets/css/stil.css">
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
</head>
<body>
	

<form class="veriler1" method="POST">
	<div class="tasi">
		<strong class="baslik">Konuşma Dili <span class="cvr_icon">></span>   Makine Dili</strong>
		<textarea  name="cumle"></textarea>
		<input type="button" class="mdcevir" value="Makine Diline Çevir">
		<div class="sonuc">
			<strong class="baslik">Sonuc</strong>
			<textarea id="kopyala_icerik"></textarea>
			<button id="kopyalabtn" onclick="mdkopyala()" type="button">Kopyala</button>
		</div>
	</div>
</form>	


<form class="veriler2" method="POST">
	<div class="tasi">
		<strong class="baslik">Makine Dili <span class="cvr_icon">></span> Konuşma Dili</strong>
		<textarea  name="ikiliksistem"></textarea>
		 <input type="button" class="kdcevir" value="Konuşma Diline Çevir">
		<div class="sonuc">
			<strong class="baslik">Sonuc</strong>
			<textarea id="kopyala_icerik2"></textarea>
			<button id="kopyalabtn" onclick="kmkopyala()" type="button">Kopyala</button>
		</div>
	</div>
</form>

</body>
</html>

<script>
$(document).ready(function() {

	 $(".mdcevir").click(function(event) {
	 	if ($(this).siblings('textarea').val()!="") {
	        var veriler=$(".veriler1").serialize();
			$.post("sonuc.php",veriler,function(cevap)
			{
				$(".mdcevir").siblings('.sonuc').children("textarea").val(cevap);
			});	 		
	 	}
	 	else{
	 		$(this).siblings('.sonuc').children("textarea").val("Lütfen bir cümle giriniz!");
	 	}
	 });

	 $(".kdcevir").click(function(event) {
	 	if ($(this).siblings('textarea').val()!="") {
	        var veriler=$(".veriler2").serialize();
			$.post("sonuc.php",veriler,function(cevap)
			{
				$(".kdcevir").siblings('.sonuc').children("textarea").val(cevap);
			});	 		
	 	}
	 	else{
	 		$(this).siblings('.sonuc').children("textarea").val("Lütfen bir cümle giriniz!");
	 	}
	 });

 });



function mdkopyala() {
  var icerik = document.getElementById("kopyala_icerik");
  icerik.select();
  document.execCommand("Copy");
}
function kmkopyala() {
  var icerik = document.getElementById("kopyala_icerik2");
  icerik.select();
  document.execCommand("Copy");
}
</script>