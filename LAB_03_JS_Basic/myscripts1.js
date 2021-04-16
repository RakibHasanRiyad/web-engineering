
			var el_up = document.getElementById("GFG_UP"); 
			var el_down = document.getElementById("GFG_DOWN"); 
			var str = "Click on button to change the background color"; 
		
			el_up.innerHTML = str; 
		
			function changeColor(color) { 
				document.body.style.background = color; 
				document.getElementById("GFG_UP").innerHTML=str;
				document.getElementById("GFG_UP").style.color= 'red';
			} 
			
			function gfg_Run() { 
				changeColor('yellow'); 
				el_down.innerHTML = "Background Color changed"; 
			}		 
	 