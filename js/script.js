$(document).ready(function() {

            var timer;
            var xTab = new Array();
            var msonly;
            var seconly;
            var nextPage = $("#nextPage").val();
             
            function Chrono()
            {
            var ms, sec, min, mstring,start;
            enjeudate = new Date();	
				
				ms = enjeudate.getTime() - debutdate.getTime();
				mstring = ms.toString();
				msonly = mstring.slice(-3);
				seconly = mstring.slice(0,-3);
				
				if(seconly<1) seconly=0;
				var NbGuavaSelected = $(".guavaSelected").length;
				

                document.getElementById('chrono').innerHTML = seconly+","+msonly+"s";
                document.getElementById('NbGuava').innerHTML = NbGuavaSelected+"/"+Nbguava;
                
                if(NbGuavaSelected==Nbguava) StopGame();
                if(seconly==30) window.location = 'troplent.php';
				
            }
            function DemarrerChrono()
            {
            	debutdate = new Date();	
                timer = setInterval(Chrono, 50);
                document.getElementById('startGame').style.display = 'none';
                $('.contentPlay').css('display' , 'none');
                $('.infoBefore').css('display' , 'none');
                $('.fruitContainer').css('display' , 'block');
                 
            }
            
            function StopGame(){
	            clearInterval(timer);
	            var val = parseFloat(seconly+'.'+msonly);
	            window.location = nextPage+'?temps='+val;
            }
            
                        
            function addFruit(nbFruit,level){
            	for (var i=0;i<nbFruit;i++)
            	{
            	
            		var CoorVal = generateMatrix();
            		
            		x = CoorVal[0][0];
            		y = CoorVal[0][1];
            		var test = Array(x,y);
            		xTab.push(test);
            		
            		var spritePos = Math.floor((Math.random()*5)+1);

	            	$(".fruitContainer").append('<div class="guavaBox x'+x+' y'+y+' spritePos'+spritePos+' '+level+' " > </div>');
            	}     
	        }
	        
	        
	        function generateMatrix()
	        {
		        valid=false;
		        var doublon =true;
		        while(valid==false && doublon==true)
		        {
		        	doublon=false;
		        	var x = Math.floor((Math.random()*14)+1);
		        	var y = Math.floor((Math.random()*9)+1);
		        	
		        	
		        	
		        	if(xTab.length==0) {valid=true; doublon=false;}
		        	
			        for (var i=0;i<xTab.length;i++)
			        {
				        if(x==xTab[i][0] && y==xTab[i][1] )
				        {
					    doublon = true;   			
				        }
			        }
		        }
		        return Array([x,y]);
	        }
            
            /* On recupere le nombre de fruit à afficher sur la page */
            var nbFruit = $("#nbFruit").val();
            var level = $("#level").val();
            addFruit(nbFruit,level);
            
            $("#startGame").click(DemarrerChrono);
            var Nbguava = $(".guavaBox").length;
            
            
            
            $(".guavaBox").click(function() { 
            	//$(this).css("background-position-y", "62px");
	            $(this).addClass("guavaSelected");    
			});
			


});
