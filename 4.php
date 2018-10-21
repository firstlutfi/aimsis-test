<html>
	<body>
		Test Case: <input type="text" name="test_cases" id="test_cases">
		<button id="testcasebutton" onclick="myfunction()">Go!</button><br>
		
		<form name="myform" action="#" method="POST" id="myform" style="display: none">	
		</form>

		<div>
			Result:<br>
			<?php

				if (isset($_POST['cases'])){
					for ($i=1; $i <= $_POST['cases']; $i++) {
						$counter = 0;
						for ($j = $_POST['a'][$i-1]; $j <= $_POST['b'][$i-1]; $j++) {
							if ($j % $_POST['k'][$i-1] == 0){
								$counter++;
							}
						}
						echo "Case {$i}: {$counter}<br>";
					}
				}
			?>
		</div>
	<script>
	function myfunction(){
		var button = document.getElementById("testcasebutton");
		var cases = document.getElementById("test_cases");
		var container = document.getElementById("myform");
		var str = "";
			for (var i = 1; i <= cases.value; i++) {
				str += '<div id="mydiv">A: <input type="text" name="a[]">B: <input type="text" name="b[]">K: <input type="text" name="k[]"></div>';
			};
			str += '<input type="hidden" name="cases" value=' + cases.value + '><input type="submit" value="Submit" />';
			console.log(str);
			container.innerHTML = str;
			container.style.display = "block";
	}
	</script>
	</body>
</html>

