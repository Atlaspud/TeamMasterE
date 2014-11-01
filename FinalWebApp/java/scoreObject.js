// JavaScript Document
(function() {
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
());