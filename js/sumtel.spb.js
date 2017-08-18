var declOfNum = function (number, titles) {
  var cases = [2, 0, 1, 1, 1, 2];
  return titles[ (number % 100 > 4 && number % 100 < 20) ? 2 : cases[(number % 10 < 5) ? number % 10 : 5]   ];
}
$(document).ready(function () {

  $('#countdown').countdown({
    until: ts,
    onTick: function (periods) {
      days = periods[3];
      hours = periods[4];
      minutes = periods[5]; 
      seconds = periods[6];
      $('.timer_day').html((days < 10 ? '' : '') + days);
      $('.timer_hour').html((hours < 10 ? '0' : '') + hours);   
      $('.timer_min').html((minutes < 10 ? '0' : '') + minutes);                                
      $('.timer_sec').html((seconds < 10 ? '0' : '') + seconds);                                

      $('.timer_day_text').html(declOfNum(days, ['День', 'Дня', 'Дней']));
      $('.timer_hour_text').html(declOfNum(hours, ['Час', 'Часа', 'Часов']));
      $('.timer_min_text').html(declOfNum(minutes, ['Минута', 'Минуты', 'Минут']));
      $('.timer_sec_text').html(declOfNum(minutes, ['Секунды', 'Секунды', 'Секунд']));

    },
    tickInterval: 1
  });
  
  
/*
  $("#order_send_form").submit(function() { //устанавливаем событие отправки для формы с id=form
            var form_data = $(this).serialize(); //собераем все данные из формы
            $.ajax({
            type: "POST", //Метод отправки
            url: "send.php", //путь до php фаила отправителя
            data: form_data,
            success: function() {
                   //код в этом блоке выполняется при успешной отправке сообщения
                   alert("Ваше сообщение отпрвлено!");
            });
    });
	
*/

/*
$("#order_send_form").submit(function(){ // пeрeхвaтывaeм всe при сoбытии oтпрaвки
		var form = $(this); // зaпишeм фoрму, чтoбы пoтoм нe былo прoблeм с this
		var error = false; // прeдвaритeльнo oшибoк нeт
		form.find('input').each( function(){ // прoбeжим пo кaждoму пoлю в фoрмe
			if ($(this).val() == '') { // eсли нaхoдим пустoe
				alert('Зaпoлнитe пoлe "'+$(this).attr('placeholder')+'"!'); // гoвoрим зaпoлняй!
				error = true; // oшибкa
			}
		});

		if (!error) { // eсли oшибки нeт
			var data = form.serialize(); // пoдгoтaвливaeм дaнныe
			$.ajax({ // инициaлизируeм ajax зaпрoс
			   type: 'POST', // oтпрaвляeм в POST фoрмaтe, мoжнo GET
			   url: 'send_mail.php', // путь дo oбрaбoтчикa, у нaс oн лeжит в тoй жe пaпкe
			   dataType: 'json', // oтвeт ждeм в json фoрмaтe
			   data: data, // дaнныe для oтпрaвки
		       beforeSend: function(data) { // сoбытиe дo oтпрaвки
		            form.find('input[type="submit"]').attr('disabled', 'disabled'); // нaпримeр, oтключим кнoпку, чтoбы нe жaли пo 100 рaз
										},
		       success: function(data){ // сoбытиe пoслe удaчнoгo oбрaщeния к сeрвeру и пoлучeния oтвeтa
		       		if (data['error']) { // eсли oбрaбoтчик вeрнул oшибку
		       			alert(data['error']); // пoкaжeм eё тeкст
		       		} else { // eсли всe прoшлo oк
		       			alert('Письмo oтврaвлeнo! Чeкaйтe пoчту! =)'); // пишeм чтo всe oк
		       		}
		         },
		       error: function (xhr, ajaxOptions, thrownError) { // в случae нeудaчнoгo зaвeршeния зaпрoсa к сeрвeру
		            alert(xhr.status); // пoкaжeм oтвeт сeрвeрa
		            alert(thrownError); // и тeкст oшибки
		         },
		       complete: function(data) { // сoбытиe пoслe любoгo исхoдa
		            form.find('input[type="submit"]').prop('disabled', false); // в любoм случae включим кнoпку oбрaтнo
		         }
		                  
			     });
		}
		return false; // вырубaeм стaндaртную oтпрaвку фoрмы
	});

	*/
	$('#street_check_field').val('');
	$('#house_check_field').val('');
	$('#family_input_field').val('');
	$('#phone_input_field').val('');
});



$(function() {


	/* Обработка событий поля "Улица" */
	$('#street_check_field').keyup(function(){	
		var Value = $('#street_check_field').val();
		if(Value)
		{
			$( '#street_check_field' ).kladr({
				type: $.kladr.type.street,
				check:  function( obj ){
					if(!obj){
/*						$( '#street_check_field' ).css('color', 'black'); */
						$('#street_check_field').val('');
						$('#house_text').hide();
						$('#house_check_div').hide();
						$('#family_text').hide();
						$('#family_input_div').hide();
						$('#phone_input_div').hide();
						$('#order_text').hide();
						$('#lets-go-order').hide();
						$('#send_order_div').hide();
						$('#house_check_field').val('');
						$('#family_input_field').val('');
						$('#phone_input_field').val('');
						$('#street_text').show();
						$('#check-and-go-order').show();
					} 
/*					else {
						$( '#street_check_field' ).css('color', 'red');
						
					}
*/
				}
			});
			
			
		}
		else
		{
			$('#house_text').hide();
			$('#house_check_div').hide();
			$('#family_text').hide();
			$('#family_input_div').hide();
			$('#phone_input_div').hide();
			$('#order_text').hide();
			$('#lets-go-order').hide();
			$('#send_order_div').hide();
			$('#house_check_field').val('');
			$('#family_input_field').val('');
			$('#phone_input_field').val('');
			$('#street_text').show();
			$('#check-and-go-order').show();
			
				
	
		}
	});
	
	$('#street_check_field').kladr({select: function(){
		var Value = $('#street_check_field').val();
		if(Value)
		{
    
			$('#street_text').hide();
			$('#house_check_div').show("slow");
			$('#house_text').show();
			$('#check-and-go-order').show();
     
		}
	}});
	
	

	$('#house_check_field').keyup(function(){
		var Value = $('#house_check_field').val();
		if(Value)
		{
			$( '#house_check_field' ).kladr({
				type: $.kladr.type.building,
				check:  function( obj ){
					if(!obj){
						$( '#house_check_field' ).css('color', 'yellow');
						
						
						
						$('#family_text').hide();
						$('#family_input_div').hide();
						$('#phone_input_div').hide();
						$('#order_text').hide();
						$('#lets-go-order').hide();
						$('#send_order_div').hide();
						$('#house_check_field').val('');
						$('#family_input_field').val('');
						$('#phone_input_field').val('');
						$('#house_text').show();
						$('#check-and-go-order').show();						
					} 
				else {
						$( '#house_check_field' ).css('color', 'red');
						
					}

				}
			});
			
			
		}
		else
		{
			$('#family_text').hide();
			$('#family_input_div').hide();
			$('#phone_input_div').hide();
			$('#order_text').hide();
			$('#lets-go-order').hide();
			$('#send_order_div').hide();
			$('#family_input_field').val('');
			$('#phone_input_field').val('');
			$('#house_text').show();
			$('#check-and-go-order').show();
				
	
		}
	});

	$('#house_check_field').kladr({select:function(){
		var Value = $('#house_check_field').val();
		if(Value)
		{
    
			$('#house_text').hide(); 
			$('#family_text').show();
			$('#family_input_div').show("slow");
    
		}
		else {
			$('#family_text').hide();
			$('#family_input_div').hide();
			$('#phone_input_div').hide();
			$('#lets-go-order').hide();
			$('#order_text').hide();
			$('#send_order_div').hide();
			$('#family_input_field').val('');
			$('#phone_input_field').val('');
			$('#house_text').show();
			$('#check-and-go-order').show();
		}
	}});



	$('#family_input_field').keyup(function(){
		var Value = $('#family_input_field').val();
		if(Value)
			{
			$('#phone_input_div').show("slow"); 
			}
		else {
    
			$('#order_text').hide();
			$('#lets-go-order').hide();
			$('#send_order_div').hide();
			$('#phone_input_div').hide();
			$('#phone_input_field').val('');
			$('#family_text').show();
			$('#check-and-go-order').show();
		}
	});

	
	$('#phone_input_field').keyup(function(){
		var Value = $('#phone_input_field').val();
		if(Value)
		{
    
			$('#family_text').hide();
			$('#check-and-go-order').hide();
			$('#order_text').show();
			$('#send_order_div').show("slow");
			$('#lets-go-order').show();
		
    
		}
		else
		{
    
			$('#order_text').hide();
			$('#send_order_div').hide();
			$('#lets-go-order').hide();
			$('#family_text').show();
			$('#check-and-go-order').show();
		}
	});
 
 
 
 
 $("#order_send_form").submit(function() { //устанавливаем событие отправки для формы с id=form
    /*    event.preventDefault(); */
        var street = $("#street_check_field").val();
        var building = $("#house_check_field").val();
		var family = $("#family_input_field").val();
		var phone = $("#phone_input_field").val();
        $.ajax({
            url: "/wp-admin/admin-ajax.php",
            method: 'post',
            data: {
                action: 'ajax_order',
                street: street,
                building: building,
				family: family,
				phone: phone
				

            },
            success: function (response) {
                console.info('success')
				$('#order-div-form').hide();
				$('#order-div-main').css({'height':'500px'});
                $('#order-div-main').html('<div><h2>' + response + '</h2></div>');
				$('#order-div-main div').css({'margin-top':'auto',
											 'margin-bottom':'auto'});
				$('#order-div-main div').addClass('wow fadeInUp');
				
            }
        });
		
		return false; // вырубaeм стaндaртную oтпрaвку фoрмы
		
    });
 
 });