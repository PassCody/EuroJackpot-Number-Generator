	"use strict";
	let url = window.location.href;
	let splittet_url = url.split("/");
	if (!url.includes("?")) {
	let text = prompt("Wie viele Spielschein möchten Sie ausgeben?", "1");
	let defaultTime = 5.5;
	let timetorun;
	if (text == null || text == "") {
		timetorun = defaultTime ;
		alert("GER: Dieser Vorgang kann bis zu ca. "+timetorun+" minuten in Anspruch nehmen.\nEN: This process can take "+timetorun+" minutes.");
		window.location = "?1";
		}
		else {
		timetorun = defaultTime * parseInt(text);
		alert("GER: Dieser Vorgang kann bis zu ca. "+timetorun+" minuten in Anspruch nehmen.\nEN: This process can take "+timetorun+" minutes.");
		window.location = "?"+text;
		}
	}
	else {
		splittet_url = splittet_url[splittet_url.length-1].split("?");
	}