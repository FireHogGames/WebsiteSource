var myVar;
		
		function myFunction() {
		  myVar = setTimeout(showPage, 500);
		}
		
		function showPage() {
		  document.getElementById("loader").style.display = "none";
		  document.getElementById("myDiv").style.display = "block";
		  document.getElementById("loaderTitle").style.display = "none";
		}

		var discOpen = false;

		function opendiscordchat(){
			if(discOpen){	
				document.getElementById("discordchat").style.display = "none";
				
				discOpen = false;
			}else if(discOpen == false){
				document.getElementById("discordchat").style.display = "block";
				
				discOpen = true;
			}
		}