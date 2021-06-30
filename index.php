<!DOCTYPE html>
<html>
<head>
	<title>Typin Test</title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="google-site-verification" content="uza6Gh8xbuNXozz7q8MICSSLrgnoLzioHvqTE2tclI4" />
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />
		<link rel="stylesheet" type="text/css" href="sass/style.css?v=<?php echo time(); ?>">
		<script type="text/javascript" href="css/style.js"></script>
</head>
<body>
<div class="main_Div">
	<p>A</p>
	<p>B</p>
	<p>C</p>
	<p>D</p>
	<h1 id="title"> <span>T</span>yping <span>S</span>peed <span>T</span>est</h1>
	<h2 id="msg"></h2>
		<textarea disabled="true" id="type" cols="50" rows="10" placeholder="Press Start And Type Here "></textarea>
	<lable id="btn">Start</lable><a href="index.php"><lable id="btn2">Try Again</lable></a>
</div>
<script>
	const msg = document.getElementById("msg");
	const type = document.getElementById("type");
	let btn = document.getElementById("btn");
	const Words = ["He found himself sitting at his computer.",
	"typing whatever came to mind.",
	" He was on a website entitled 10 fast fingers.",
	"This site tested how fast you were at typing.",
	"So he typed.",
	"He was currently typing about himself typing,which is odd in a way.",
	"He was now describing about how he was typing about himself typing."];
	
	var st ="";
	var et ="";
	const play = () =>{
		let rn = Math.floor(Math.random() * Words.length);
		msg.innerText = Words[rn];   
		// console.log(Words[rn]);
		btn.innerText = "Done";
  		var d = new Date();
  		 st = d.getTime();
		console.log(st);


	}
	const totalWords = (str) =>{
		let res = str.split(" ").length;
		console.log(res);
		return res;
	}
	const compar = (str1,str2) =>{
		let w1 = str1.split(" ");
		let w2 = str2.split(" ");
		let cnt = 0;

		w1.forEach(function(item,index){
			if(item == w2[index]){
				cnt++;
			}
		})

		let error = (w1.length - cnt);
		return(cnt + " correct Out Of " + w1.length + " Words And The Total Number Of Error Are "+ error + ".");
	}
	const end = () =>{
		var d = new Date();
		 et = d.getTime();
		const tt = ((et - st)/1000);
		/*console.log(et);
		console.log(tt);*/
		let totalstr = type.value;
		let wordcount = totalWords(totalstr);
		let speed = Math.round((wordcount/tt)*60);
		let fm = "Your Speed Is " + speed + " Words per Minutes ";
		fm += compar(msg.innerText, totalstr);
		msg.innerText = fm;
	}
	btn.addEventListener("click", function(){
		/*console.log(this);*/
	  if(this.innerText == "Start"){
	  	type.disabled = false;
	  	play();
	  }
	  else if(this.innerText == "Done"){
	  	type.disabled = true;
	  	btn.innerText = "Start";
	  	end();
	  }
	  
	});
</script>
</body>
</html>