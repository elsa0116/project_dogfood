
			var aa,imgi=1,imga,imgb,imgd,tm=false,tm2=false;
			window.onload=test;

			function test(){
					test1();
					tm2=setTimeout(test2,3000);
			}
			function test1(){
				aa=document.getElementById("homepage_banner");
				arrow_left=document.getElementById("arrow02");
				arrow_right=document.getElementById("arrow01");
				arrow_left.onclick=test2;
				arrow_right.onclick=test3;
				imga=document.createElement("img");
				imga.setAttribute("src","../images/banner0"+imgi+".png");
				aa.appendChild(imga);
			}
			function test2(){
				if(tm==false){
					clearTimeout(tm2);
					imgi++;
					if(imgi>4){
						imgi=1;
					}
					imgb=document.createElement("img");
					imgb.setAttribute("src","../images/banner0"+imgi+".png");
					imgb.style.left="1050px";
					aa.appendChild(imgb);
					tm=setInterval(test4,20);
				}
			}
			function test3(){
				if(tm==false){
					clearTimeout(tm2);
					imgi=imgi-1;
					if(imgi<1){
						imgi=4;
					}
					imgd=document.createElement("img");
					imgd.setAttribute("src","../images/banner0"+imgi+".png");
					imgd.style.left="-1050px";
					aa.appendChild(imgd);
					tm=setInterval(test5,20);
				}
			}
			function test4(){
				imga.style.left=(imga.offsetLeft-10)+"px";
				imgb.style.left=(imgb.offsetLeft-10)+"px";
				if(imgb.offsetLeft<=10){
					aa.removeChild(imga);
					imga=imgb;
					clearInterval(tm);
					tm=false;
					tm2=setTimeout(test2,3000);
				}
			}
			function test5(){
				imga.style.left=(imga.offsetLeft+10)+"px";
				imgd.style.left=(imgd.offsetLeft+10)+"px";
				if(imgd.offsetLeft>=10){
					aa.removeChild(imga);
					imga=imgd;
					clearInterval(tm);
					tm=false;
					tm2=setTimeout(test2,3000);
				}
			}
