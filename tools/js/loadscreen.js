	"use strict";
	function randomNumber() {
		let randomNumber = Math.floor(Math.random() * 10);
		return randomNumber;
	}
	let host = window.location.host;
	let pathname = window.location.pathname;
	let search = window.location.search;
	let urlII = window.location.href;
	let textII = search.split("?")[1];
	let newNumber = Number(textII);
	if (urlII.includes("?")) {
		timetorunII = 431000 * parseInt(newNumber);
	}
	let loadscreen_urlII = window.location;
	if (loadscreen_urlII["search"] > "") {
		document.write('<center id="loadingbarProgress">');
		let userLang = navigator.language || navigator.userLanguage;
		if (userLang === "de-DE") {
			document.write('	<h1>Fortschritt der Generierung:</h1>');
		}
		else {
			document.write('	<h1>Generation Progress:</h1>');
		}
		document.write('	<div id="Progress">');
		document.write('		<div id="loadingbar">0%</div>');
		document.write('	</div>');
		document.write('</center>');
		
		const newURL = "http://" + host + pathname + "frame.php" + search;
		console.log(newURL);
		document.write('<iframe src="' + newURL + '" id="resaultFrame" style="width: 100%;min-height: 933px;max-height: 100%;border: none; display: none;"></iframe>');
		let i = 0;
		if (i == 0) {
			i = 1;
			let elem = document.getElementById("loadingbar");
			let width = 0;
			
			let id = setInterval(frame, (timetorunII/100));
			let color;
			function frame() {
				if (width >= 100) {
					clearInterval(id);
					i = 0;
					document.getElementById("loadingbarProgress").remove();
					elem = document.querySelector("iframe#resaultFrame");
					elem.style.display = "inline";
				}
				else {
					width++;
					elem.style.width = width + "%";
					let color = "#ff"+randomNumber()+""+randomNumber()+""+randomNumber()+""+randomNumber()+"";
					elem.style.backgroundColor = color;
                    elem.innerHTML = width + "%";
				}
			}
		}
	}
