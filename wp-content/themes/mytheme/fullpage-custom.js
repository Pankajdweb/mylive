new fullpage('#fullpage', {
    // anchors: ['firstPage', 'secondPage', 'thirdPage', 'forthPage'],    
    // menu: '#menu',
    navigation: true,
    parallax: true,
    onLeave: function(origin, destination, direction){
			console.log("Leaving section" + origin.index);
		},
    // onLeave: onLeaveHandler,
    // afterLoad: onLeaveHandler
});

// var onLeaveHandler = function(){
// 	$("#menu li").removeClass("active");
//   $("#firstMenuItem").addClass("active");
// };


























