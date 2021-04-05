<html>
	
	<body>
		This a sample web page
		<p id="p1"></p>
		<p id="p2"> This is from HTML</p>
		<h1 id="hd1"></h1>
		
		<button onclick="turnOn()">Turn on</button>
		<img id="pic" src="https://www.w3schools.com/js/pic_bulboff.gif">
		
		<button onclick="turnOff()">Turn off</button>
		
		<input type="text" onclick="keyClick()" onmouseout="mouseout()" onmouseover="hover()" onkeyup="keyUp()" onkeydown="keyDown()" >
		<br>

		<p id="output">
			
		</p>
		
		
		<table>
			<tr>
				
				<td><span onmouseout="hidehint()" onmouseover="showhint()">info</span></td>
				<td><div id="hint" style="border: 2px solid black;display:none;">This is info</div></td>
			</tr>
		</table>
	</body>
	<script>
		function get(id){
			return document.getElementById(id);
		}
		var output = document.getElementById("output");
		var p1 = document.getElementById("p1");
		var hd = document.getElementById("hd1");
		var i=1;
		var j =1;
		p1.innerHTML = "This is from JS";
		hd.innerHTML = "This is from JS";
		
		var hint = get("hint");
		function showhint(){
			hint.style.display="block";
		}
		function hidehint(){
			hint.style.display ="none";
		}
		
		function keyClick(){
			output.innerHTML = "clicked";
		}
		function keyUp(){
			output.innerHTML = "key up" + j++;
		}
		function keyDown(){
			output.innerHTML = "key down" + i++;
		}
		function hover(){
			output.innerHTML = "on mouse over";
		}
		function mouseout(){
			output.innerHTML = "on mouse out";
		}
		function turnOn(){
			var pic = document.getElementById('pic');
			pic.src='https://www.w3schools.com/js/pic_bulbon.gif';
		}
		function turnOff(){
			var pic = document.getElementById('pic');
			pic.src='https://www.w3schools.com/js/pic_bulboff.gif';
		}
		
		
	</script>
</html>




	