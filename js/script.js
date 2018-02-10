$(document).ready(function() {

    $('.dropdown-toggle').click(function(){
        $('.dropdown-lg').addClass('open');
    });

    $('.msg-userpic').click(function(){
    	$( this ).css({
    		'background-color': '#F26629',
    		'color': '#fff'
    	});
    	$('.msg-userpic .profile-usertitle-name, .msg-userpic .profile-usertitle-name span').css({
    		color: '#fff'
    	});

    });
});