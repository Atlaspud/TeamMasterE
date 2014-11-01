// This script draws the score boards 
(function() {
       		
		var canvas_01 = document.getElementById("canvas_TAP1");
		var canvas_02 = document.getElementById("canvas_TAP2");
		var canvas_03 = document.getElementById("canvas_TAP3");
		var canvas_04 = document.getElementById("canvas_TAP4");		
		var canvas_05 = document.getElementById("canvas_TBP1");
		var canvas_06 = document.getElementById("canvas_TBP2");
		var canvas_07 = document.getElementById("canvas_TBP3");
		var canvas_08 = document.getElementById("canvas_TBP4");
		
        var context_01 = canvas_01.getContext("2d");
		var context_02 = canvas_02.getContext("2d");
		var context_03 = canvas_03.getContext("2d");
		var context_04 = canvas_04.getContext("2d");
		var context_05 = canvas_05.getContext("2d");
		var context_06 = canvas_06.getContext("2d");
		var context_07 = canvas_07.getContext("2d");
		var context_08 = canvas_08.getContext("2d");
						
		DrawBourd(context_01);
		DrawBourd(context_02);
		DrawBourd(context_03);
		DrawBourd(context_04);
		DrawBourd(context_05);
		DrawBourd(context_06);
		DrawBourd(context_07);
		DrawBourd(context_08);
				
		function DrawBourd(context) {
			//draw horizontal line
			for (var x = 0.5; x < 501; x += 50) {
				context.moveTo(x, 0);
				context.lineTo(x, 381);
			}
			
			//draw horizontal inner line
			for (var x = 25; x < 500; x += 50) {
				context.moveTo(x, 0);
				context.lineTo(x, 25);
			}
	
			//draw vertical line
			for (var y = 0.5; y < 381; y += 50) {
				context.moveTo(0, y);
				context.lineTo(500, y);
			}
						
			//draw vertical inner line
			for (var y = 25; y < 500; y += 25) {
				context.moveTo(y, 25);
				context.lineTo(y += 25, 25);
			}
			context.font="11px Georgia"; 
			context.strokeStyle = "#ddd";
			context.stroke(); 
		}				
}
());

