function getRandomColor() 
		{
    		var letters = '0123456789ABCDEF'.split('');
    		var color = '#';
    		for (var i = 0; i < 6; i++ ) 
    		{
        		color += letters[Math.floor(Math.random() * 16)];
    		}
    		return color;
		}
	
		var clickedTime; var createdTime; var reactionTime;
		
		function makeBox()
		{			
			var time=Math.random();
			time=5000*time;

			setTimeout(function()
			{
				if (Math.random()>0.5)
				{
					document.getElementById("thebox").style.borderRadius="50px";
				}else
					{document.getElementById("thebox").style.borderRadius="0";
					}
				
				var top=Math.random();
				top=top*500;
				var left=Math.random();
				left=left*500;
				
				document.getElementById("thebox").style.top=top+"px";
				
				document.getElementById("thebox").style.left=left+"px";
				
				document.getElementById("thebox").style.backgroundColor=getRandomColor();
				
				document.getElementById("thebox").style.display="block";
				
				createdTime=Date.now();
				
			},time);
		}
				
		document.getElementById("thebox").onclick=function()
		{
			clickedTime=Date.now();
			
			reactionTime=(clickedTime-createdTime)/1000;
			
			document.getElementById("time").innerHTML=reactionTime;
			
			this.style.display="none";
			makeBox();
		}
		
		makeBox();