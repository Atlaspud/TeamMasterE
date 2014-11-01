// JavaScript Document
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
		
		var score_01 = score;
		DrawBourdNumber(context_01, score_01);
		
		
		function DrawBourdNumber(context, score) {
				
			DrawFrame(frame01.getThrow01(), frame01.getThrow02(), frame01.getCount());
			
			
			function DrawFrame(throw01, throw02, count){
				context.fillText(throw01 ,10,15);
				context.fillText(throw02 ,35,15);
				context.fillText(count ,23,40);
			}
		}


}
());