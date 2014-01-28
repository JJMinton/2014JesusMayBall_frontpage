	var pageInfo;
	var pageTarget;
	
	function Page(){
		var start = 0;
		var paddingLeft = 0;
		var pageLeft = 0;
		var pageRight = 0;
		var paddingRight = 0;
		var finish = 0;
	}
	
	$(function(){
		pages = $('.page');
		//var screenWidth = $(window).width();
		pageInfo = new Array(pages.length);
		var counter = parseInt($('#pages').css('margin-left').replace("px","")) + parseInt($('#pages').css('padding-left').replace("px",""));
		var margin = 500;//(screenWidth - pages.eq(i).width())/2;
		for(var i=0; i<pages.length; i++){
			pages.eq(i).css('margin-left', margin + "px");
			pages.eq(i).css('margin-right', margin + "px");
			pageInfo[i] = new Page();
			pageInfo[i].start = counter;
			counter += parseInt(pages.eq(i).css('margin-left').replace("px",""));
			pageInfo[i].paddingLeft = counter;
			counter += parseInt(pages.eq(i).css('padding-left').replace("px",""));
			pageInfo[i].pageLeft = counter;
			counter += pages.eq(i).width();
			pageInfo[i].pageRight = counter;
			counter +=  parseInt(pages.eq(i).css('padding-right').replace("px",""));
			pageInfo[i].paddingRight = counter;
			counter += parseInt(pages.eq(i).css('margin-right').replace("px",""));
			pageInfo[i].finish = counter;
		}
		$("#pages").css('width', counter +"px");
		
		
		updateTrees();
		$("body").scrollLeft(pageInfo[2].start);
		pageTarget = (pageInfo[0].finish + pageInfo[0].start - $(window).width())/2;
		$("body").animate({scrollLeft: pageTarget}, 2500);
		
		

		$("#logo-link").click(function(e){
			e.preventDefault();
			scrollToPage(1);
		});
		$("#tickets-link").click(function(e){
			e.preventDefault();
			scrollToPage(2);
		});
		$("#charity-link").click(function(e){
			e.preventDefault();
			scrollToPage(3);
		});
		$("#staffing-link").click(function(e){
			e.preventDefault();
			scrollToPage(4);
		});
		$("#entertainment-link").click(function(e){
			e.preventDefault();
			scrollToPage(5);
		});
		$("#committee-link").click(function(e){
			e.preventDefault();
			scrollToPage(6);
		});
		$("#logo-link-home").click(function(e){
			e.preventDefault();
			scrollToPage(1);
		});
		$("#tickets-link-home").click(function(e){
			e.preventDefault();
			scrollToPage(2);
		});
		$("#charity-link-home").click(function(e){
			e.preventDefault();
			scrollToPage(3);
		});
		$("#staffing-link-home").click(function(e){
			e.preventDefault();
			scrollToPage(4);
		});
		$("#entertainment-link-home").click(function(e){
			e.preventDefault();
			scrollToPage(5);
		});
		$("#committee-link-home").click(function(e){
			e.preventDefault();
			scrollToPage(6);
		});
				
		window.addEventListener('scroll', function(event) {
			updateTrees();
		});

		var interval;
		window.addEventListener("keydown", function(event) {
			if (event.which == 33 || event.which == 40) {
				//page up/up arrow
				scrollToPage(detectPage(pageTarget)+1);
				event.preventDefault()
			} else if(event.which == 34 || event.which == 38){
				//page down/down arrow
				scrollToPage(detectPage(pageTarget)-1);
				event.preventDefault()
			} else if(event.which == 35){
				//end
				scrollToPage(pageInfo.length);
				event.preventDefault()
			} else if(event.which ==36){
				//home
				scrollToPage(1);
				event.preventDefault()
			} else if(event.which == 37){
				//left arrow
				clearInterval(interval);
				interval = setInterval(function() {
					$("body").scrollLeft($("body").scrollLeft()-10);
				}, 1);
				
			} else if(event.which == 39){
				//right arrow
				clearInterval(interval);
				interval = setInterval(function() {
					$("body").scrollLeft($("body").scrollLeft()+10);
				}, 1);
			}
		});	
		
		window.addEventListener("keyup", function(event) {
			if(event.which == 37 || event.which == 39){
				clearInterval(interval); 
				interval = null;
			}
		});
		
		
		//Scrolling - scrolling package breaks on Mica's and Emma's laptops
		//TODO: find cross compatibility solution
		//$("body").mousewheel(function(event, delta) {
		//	this.scrollLeft -= (delta * 40);
		//	event.preventDefault();
		//});		
		
	});
	
	function updateTrees(){
				$('#background').css('left', 0.3*$("body").scrollLeft() + "px");
				
				moveTree($('#treep1l1l'),3, $("body").scrollLeft(), 1, true);
				moveTree($('#treep1l2l'),5, $("body").scrollLeft(), 1, true);
				moveTree($('#treep1l3l'),9, $("body").scrollLeft(), 1, true);
				moveTree($('#treep1l1r'),3, $("body").scrollLeft(), 1, false);
				moveTree($('#treep1l2r'),5, $("body").scrollLeft(), 1, false);
				moveTree($('#treep1l3r'),9, $("body").scrollLeft(), 1, false);
				
				moveTree($('#treep2l1l'),3, $("body").scrollLeft(), 2, true);
				moveTree($('#treep2l2l'),5, $("body").scrollLeft(), 2, true);
				moveTree($('#treep2l3l'),9, $("body").scrollLeft(), 2, true);
				moveTree($('#treep2l1r'),3, $("body").scrollLeft(), 2, false);
				moveTree($('#treep2l2r'),5, $("body").scrollLeft(), 2, false);
				moveTree($('#treep2l3r'),9, $("body").scrollLeft(), 2, false);
				
				moveTree($('#treep3l1l'),3, $("body").scrollLeft(), 3, true);
				moveTree($('#treep3l2l'),5, $("body").scrollLeft(), 3, true);
				moveTree($('#treep3l3l'),9, $("body").scrollLeft(), 3, true);
				moveTree($('#treep3l1r'),3, $("body").scrollLeft(), 3, false);
				moveTree($('#treep3l2r'),5, $("body").scrollLeft(), 3, false);
				moveTree($('#treep3l3r'),9, $("body").scrollLeft(), 3, false);
				
				moveTree($('#treep4l1l'),3, $("body").scrollLeft(), 4, true);
				moveTree($('#treep4l2l'),5, $("body").scrollLeft(), 4, true);
				moveTree($('#treep4l3l'),9, $("body").scrollLeft(), 4, true);
				moveTree($('#treep4l1r'),3, $("body").scrollLeft(), 4, false);
				moveTree($('#treep4l2r'),5, $("body").scrollLeft(), 4, false);
				moveTree($('#treep4l3r'),9, $("body").scrollLeft(), 4, false);
				
				moveTree($('#treep5l1l'),3, $("body").scrollLeft(), 5, true);
				moveTree($('#treep5l2l'),5, $("body").scrollLeft(), 5, true);
				moveTree($('#treep5l3l'),9, $("body").scrollLeft(), 5, true);
				moveTree($('#treep5l1r'),3, $("body").scrollLeft(), 5, false);
				moveTree($('#treep5l2r'),5, $("body").scrollLeft(), 5, false);
				moveTree($('#treep5l3r'),9, $("body").scrollLeft(), 5, false);
				
				moveTree($('#treep6l1l'),3, $("body").scrollLeft(), 6, true);
				moveTree($('#treep6l2l'),5, $("body").scrollLeft(), 6, true);
				moveTree($('#treep6l3l'),9, $("body").scrollLeft(), 6, true);
				moveTree($('#treep6l1r'),3, $("body").scrollLeft(), 6, false);
				moveTree($('#treep6l2r'),5, $("body").scrollLeft(), 6, false);
				moveTree($('#treep6l3r'),9, $("body").scrollLeft(), 6, false);	
	}
	
	function moveTree(tree, treePositionMultiplier, pagePosition, page, left){
		//TODO: Check if hidden
		if(page<1 || page>pageInfo.length){
			alert('invalid page request');
		}
		var start =  ((pageInfo[page-1].finish+pageInfo[page-1].start)/2- $(window).width()/2 )*treePositionMultiplier;
		if(left){
			start += pageInfo[page-1].paddingLeft - tree.width();
		}
		else{
			start += pageInfo[page-1].paddingRight;
		}
		var newPos = -pagePosition*treePositionMultiplier + start;
		if(newPos > pagePosition + $(window).width() || newPos + tree.width() < pagePosition){
			tree.hide()
		}else{
			tree.show()
			tree.css('left', newPos + "px");
		}
		
	}
	
	function scrollToPage(pageNumber){
		$("body").stop(true,false);
		if(pageNumber > pageInfo.length){
			pageNumber = pageInfo.length;
		}else if(pageNumber < 1){
			pageNumber = 1;
		}
		pageTarget = (pageInfo[pageNumber-1].finish + pageInfo[pageNumber-1].start - $(window).width())/2;
		$("body").animate({scrollLeft: pageTarget}, 1500);
		
	};
	
	
	function detectPage(position){
		if(!position){
			position = $("body").scrollLeft();
		}
		for(i=0; i<pageInfo.length; i++){
			if(position < pageInfo[i].finish){
				return i+1; //page number vs index
			}
		}
		return pageInfo.length;
	}
