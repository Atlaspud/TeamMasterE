// JavaScript Document
(function() {
        
		//create canvases
		var canvas_01 = document.getElementById("canvas_TAP1");
		var canvas_02 = document.getElementById("canvas_TAP2");
		var canvas_03 = document.getElementById("canvas_TAP3");
		var canvas_04 = document.getElementById("canvas_TAP4");		
		var canvas_05 = document.getElementById("canvas_TBP1");
		var canvas_06 = document.getElementById("canvas_TBP2");
		var canvas_07 = document.getElementById("canvas_TBP3");
		var canvas_08 = document.getElementById("canvas_TBP4");
		
		//create conection to cancases
        var context_01 = canvas_01.getContext("2d");
		var context_02 = canvas_02.getContext("2d");
		var context_03 = canvas_03.getContext("2d");
		var context_04 = canvas_04.getContext("2d");
		var context_05 = canvas_05.getContext("2d");
		var context_06 = canvas_06.getContext("2d");
		var context_07 = canvas_07.getContext("2d");
		var context_08 = canvas_08.getContext("2d");
			
		// score object	
		var score = {
			getThrow01 : function fn(){
				return this.throw01;
				},
			getThrow02 : function fn(){
				return this.throw02;
				},
			getCount : function fn(){
				return this.count;
				},
			setThrow01 : function fn(num){
				this.throw01 = num;
				},
			setThrow02 : function fn(num){
				this.throw02 = num;
				},
			setCount : function fn(num){
				this.count = num;
				},
			};
		
		// conect frames to score object
		var frames = Object.create(score);
		
		// design the each frame
		var frame01 = Object.create(frames);
		frame01.throw01 = 0;
		frame01.throw02 = 0;
		frame01.count = frame01.throw01 + frame01.throw02 ;
		frame01.isSpare = false;
		frame01.isStrick = false;
		
		var frame02 = Object.create(frames);
		frame02.throw01 = 0;
		frame02.throw02 = 0;
		frame02.count = frame01.count + frame02.throw01 + frame02.throw02;
		frame01.isSpare = false;
		frame01.isStrick = false;
		
		var frame03 = Object.create(frames);
		frame03.throw01 = 0;
		frame03.throw02 = 0;
		frame03.count = frame02.count + frame03.throw01 + frame03.throw02;
		frame01.isSpare = false;
		frame01.isStrick = false;
		
		var frame04 = Object.create(frames);
		frame04.throw01 = 0;
		frame04.throw02 = 0;
		frame04.count = frame03.count + frame04.throw01 + frame04.throw02;
		frame01.isSpare = false;
		frame01.isStrick = false;
		
		var frame05 = Object.create(frames);
		frame05.throw01 = 0;
		frame05.throw02 = 0;
		frame05.count = frame04.count + frame05.throw01 + frame05.throw02;
		frame01.isSpare = false;
		frame01.isStrick = false;
		
		var frame06 = Object.create(frames);
		frame06.throw01 = 0;
		frame06.throw02 = 0;
		frame06.count = frame05.count + frame06.throw01 + frame06.throw02;
		frame01.isSpare = false;
		frame01.isStrick = false;
		
		var frame07 = Object.create(frames);
		frame07.throw01 = 0;
		frame07.throw02 = 0;
		frame07.count = frame06.count + frame07.throw01 + frame07.throw02;
		frame01.isSpare = false;
		frame01.isStrick = false;
		
		var frame08 = Object.create(frames);
		frame08.throw01 = 0;
		frame08.throw02 = 0;
		frame08.count = frame07.count + frame08.throw01 + frame08.throw02;
		frame01.isSpare = false;
		frame01.isStrick = false;
		
		var frame09 = Object.create(frames);
		frame09.throw01 = 0;
		frame09.throw02 = 0;
		frame09.count = frame08.count + frame09.throw01 + frame09.throw02;
		frame01.isSpare = false;
		frame01.isStrick = false;
		
		var frame10 = Object.create(frames);
		frame10.throw01 = 0;
		frame10.throw02 = 0;
		frame10.count = frame09.count + frame10.throw01 + frame10.throw02;
		
		
		
		//inistionalise each score
		var score_01 = score;
		var score_02 = score;
		var score_03 = score;
		var score_04 = score;
		var score_05 = score;
		var score_06 = score;
		var score_07 = score;
		var score_08 = score;
		
		//draw  each scores their canvas board
		DrawBourdNumber(context_01, score_01);
		DrawBourdNumber(context_02, score_02);
		DrawBourdNumber(context_03, score_03);
		DrawBourdNumber(context_04, score_04);
		DrawBourdNumber(context_05, score_05);
		DrawBourdNumber(context_06, score_06);
		DrawBourdNumber(context_07, score_07);
		DrawBourdNumber(context_08, score_08);
		
		// draw each frame in each frame square
		function DrawBourdNumber(context, score) {				
			DrawFrame(frame01.getThrow01(), frame01.getThrow02(), frame01.getCount(), 0);
			DrawFrame(frame02.getThrow01(), frame02.getThrow02(), frame02.getCount(), 1);
			DrawFrame(frame03.getThrow01(), frame03.getThrow02(), frame03.getCount(), 2);
			DrawFrame(frame04.getThrow01(), frame04.getThrow02(), frame04.getCount(), 3);
			DrawFrame(frame05.getThrow01(), frame05.getThrow02(), frame05.getCount(), 4);
			DrawFrame(frame06.getThrow01(), frame06.getThrow02(), frame06.getCount(), 5);
			DrawFrame(frame07.getThrow01(), frame07.getThrow02(), frame07.getCount(), 6);
			DrawFrame(frame08.getThrow01(), frame08.getThrow02(), frame08.getCount(), 7);
			DrawFrame(frame09.getThrow01(), frame09.getThrow02(), frame09.getCount(), 8);
			DrawFrame(frame10.getThrow01(), frame10.getThrow02(), frame10.getCount(), 9);
			
			function DrawFrame(throw01, throw02, count, frameNum){
				var space01 = 10;
				var space02 = 35;
				var space03 = 23;
				
				for(i = 0; i < frameNum; i++){
					space01 += 50;
					space02 += 50;
					space03 += 50;
					}
				
				context.fillText(throw01 ,space01,15);
				context.fillText(throw02 ,space02,15);
				context.fillText(count ,space03,40);
			}
		}
		
		
		
		
			
		
	
}
());

