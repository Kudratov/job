function checkReg() {

	if($('.search-for-regions').val() === 'nothing'){
		$('.display-all-regs').css('display', 'block');
		$('.select-for-branches').css('display', 'none');
		$("option[class='1']").remove();

	} else {
	var regName = $('.search-for-regions').val();
	var artc = $('.display-all-regs');
	artc.each(function(i, obj) {
		var arc = obj.className.split(' ');
		if($('.search-for-regions').val().toString() === arc[0]){
			$(`.${arc[0]}`).css('display', 'block');
			$('.select-for-branches').css('display', 'block');
			if(!$(".1").hasClass(arc[1])){
  				$(".select-for-branches").append($(`<option class='${arc[1]} 1' value='${arc[1]}'>${arc[1]}</option>`));
		}
		} else {
			$(`.${arc[0]}`).css('display', 'none');
		}
	});
	}
}
function checkBran(){
	var message = 'No Result';
	var arctCH = $('.select-for-branches').val();
		var artc = $('.display-all-regs');
		artc.each(function(i, obj) {
			var arc = obj.className.split(' ');
			if(arctCH.toString() === arc[1].toString()){
				$(`.${arc[1]}`).css('display', 'block');
			} else if(arctCH.toString() === 'nothing-branches') {
				$(`.${arc[1]}`).css('display', 'block');
			} else {
				$(`.${arc[1]}`).css('display', 'none');
			}
		});
}

$('.search-for-regions').click(function(){
  var $btn = $(this);
  var count = ($btn.data("click_count") || 0) + 1;
  $btn.data("click_count", count);
  if ( count == 1 ){

  }
  else if ( count == 2 ){
  }
  else if(count == 3) {
  	location.reload();
  }
});