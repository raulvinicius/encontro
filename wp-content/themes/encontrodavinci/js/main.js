$(document).ready(function() {

	// msgShow('sucesso', 'Show!', 'Agora sua mensagem irá inspirar outras pessoas.')

	$( window ).scroll(function() 
	{
		setTimeout(showInAnimation,400);
		doElParallax();
		realcaMenu();
	});
	$( window ).trigger('scroll');


	$( window ).resize(function(e) 
	{
		//do something
	});
	$( window ).trigger('resize');


	//-----------------TIMER-----------------//

	var data1 = new Date( $.now() );

	var StringDate = "2017-8-1-14-00-10"
	var date = StringDate.split("-"); 
	var data2 = new Date(date[0],date[1]-1,date[2],date[3],date[4],date[5]);//Date object

	if(data1 < data2)
	{
		var intTempo = setInterval(function()
		{
			data1 = new Date( $.now() );

			console.log(data1 > data2)

			if(data1 > data2)
			{
				location.reload();
			}
		}, 1000)
	}



	//-----------------TIMER-----------------//
	
	
	
	//-----------------MASONRY-----------------//
/*
	var grid = $('.grid').masonry({
	  // options
	  itemSelector: '.grid-item',
	  columnWidth: '.grid-item'
	});

	function callMasonry ()
	{
		grid.masonry();
	}
	
	setInterval( callMasonry, 2000 );
*/
	//-----------------MASONRY-----------------//




	//-----------------TWEET LIKE-----------------//

	$('body').on('click', '.twitter #like', function() {
		if($(this).hasClass('on'))
		{
			$(this).removeClass('on')
		}
		else
		{
			$(this).addClass('on')
		}
	});

	//-----------------TWEET LIKE-----------------//




	//-----------------FORM MATRICULA-----------------//

	$( '#inscricao form #mtcpf' ).mask('0#');


	$('#inscricao form #mtcpf').on('change click keyup input paste', function() 
	{
		if( $(this).val() == '' )
		{
			$(this)
				.closest('form')
				.find('input[type="submit"]')
				.attr('disabled', 'disabled')
		}
		else
		{
			$(this)
				.closest('form')
				.find('input[type="submit"]')
				.removeAttr('disabled')
		}
	});

	//-----------------FORM MATRICULA-----------------//




	//-----------------FORM CONVIDADOS-----------------//


	$('#inscricao .etapa-2 form #prcvdd, #inscricao .etapa-2 form #sgcvdd').on('change click keyup input paste', function() 
	{
		confereCamposEtp2();

		if( $(this).val() == '' )
		{
			$(this)
				.closest('form')
				.find('div[data-conv="' + $(this).attr('name') + '"] .path-convidado')
				.css('fill', '#ccc');
		}
		else
		{
			$(this)
				.closest('form')
				.find('div[data-conv="' + $(this).attr('name') + '"] .path-convidado')
				.css('fill', '#1095c4');
		}
	});

	$('#inscricao .etapa-2 form #ddsok, #inscricao .etapa-2 form #cnfrm').on('change click keyup input paste', function() 
	{
		confereCamposEtp2();
	});

	//-----------------FORM CONVIDADOS-----------------//




	//-----------------FORM REENVIA-----------------//

	$('#inscricao .etapa-3 #fecha-etapa').on('click', function() {
		fechaEtapa3();
	});

	//-----------------FORM REENVIA-----------------//




	//-----------------MSG SHOW-----------------//

	$('.msg-show button').on('click', function() {
		$('.msg-show').hide();
		$('.msg-show .tit, .msg-show .msg').text('');
	});

	//-----------------MSG SHOW-----------------//


	//JS PARALLAX
	$('.parallax').parallax();



	//SCROLL FAKE PARALAXES
	$('.bg-parallax').css('background-attachment', 'fixed');
	$('.el-parallax').css('background-attachment', 'fixed');


	if( isWindows() && isChrome() )
	{

		$('.wrap-site').css({left: '0', right: '0', position: 'absolute'})
		if( $('#pagina-home').length > 0 )
		{
			$('.wrap-site').css('bottom', '0');
		}
		$(window).on('scroll', function () {
			
			$('.wrap-site').offset({top: '-' + $(window).scrollTop() + 'px'})
/*
			$('.wrap-site').stop().animate(
			{
				top:  '-' + $(window).scrollTop() + 'px'
			}, 500, 'easeOutQuint');
*/			
			realcaMenu();
		})
/*		var intTamanhoBody = setInterval(function()
		{
			tamanhoBody();	
		}, 100);
		setTimeout(function()
		{
			clearInterval(intTamanhoBody);
			var intTamanhoBody = setInterval(function()
			{
				tamanhoBody();
			}, 2000);

		}, 2000);
*/
	}



	$( 'body' ).on( 'click', 'button.dead', function(){ return false; } );
	
	if( $( '#map-canvas' ).length > 0 )
	{
		initializeMap();
	}


	$('.segredo').remove();


	$( '.telefone' ).mask('(00) 0000 0000', {placeholder: "(__) ____ ____"});
	//incluindo o nono dígito
	var maskBehavior = function (val) {
		return val.replace(/\D/g, '').length === 11 ? '00 00000 0000' : '00 0000 00009';
	}

	options = {
		onKeyPress: function(val, e, field, options) {
			field.mask(maskBehavior.apply({}, arguments), options);
		},
		placeholder: "__ ____ ____"
	};
	 
	$('.celular').mask(maskBehavior, options);
	$( '.data' ).mask('00/00/0000', {placeholder: "__/__/____"});


	$('form.js').submit(function(e){return false;e.preventDefault();});

	$('#inscricao .etapa-1 form input[type="submit"]').bind('click', 
		function()
		{
			$(this).closest('form').validate({
				submitHandler: function(form)
				{

					$(form)
						.closest('.container')
						.find('.loading .col-md-offset-1')
						.height( $(form).closest('.etapa-1').find('.col-md-offset-1').height() )
						.closest('.loading')
						.removeClass('invi')
						.addClass('on');

					$(form)
						.closest('.etapa-1')
						.addClass('invi');

					$(form).ajaxSubmit({
						type: 'post',
						success: matriculaOK
					});

				}, 
				rules: {
					mtcpf: {
						required: true,
						rangelength: [6, 12],
					},
				},
				messages: {
					mtcpf: {
						required: '<span>Campo obrigatório</span>',
						rangelength: '<span>Matrícula ou CPF inválido</span>',
					},
				}
			});
		}
	)

	$('#inscricao .etapa-2 form input[type="submit"]').bind('click', 
		function()
		{
			$(this).closest('form').validate({
				submitHandler: function(form)
				{

					$(form)
						.closest('.container')
						.find('.loading .col-md-offset-1')
						.height( $(form).closest('.etapa-2').find('.col-md-offset-1').height() )
						.closest('.loading')
						.removeClass('invi')
						.addClass('on');
						
					$(form)
						.closest('.etapa-2')
						.addClass('invi');
					$(form).ajaxSubmit({
						type: 'post',
						success: dadosOK
					});

				}, 
				rules: {
					ddsok: {
						required: true
					},
					ml: {
						required: true,
						email: true,
					},
				},
				messages: {
					ddsok: {
						required: '<span>Confirme se os dados estão OK</span>'
					},
					ml: {
						required: '<span>Informe um e-mail</span>',
						email: '<span>Informe um e-mail válido</span>'
					},
				}
			});
		}
	)

	$('#inscricao .etapa-3 form input[type="submit"]').bind('click', 
		function()
		{
			$(this).closest('form').validate({
				submitHandler: function(form)
				{

					$(form)
						.closest('.container')
						.find('.loading .col-md-offset-1')
						.height( $(form).closest('.etapa-3').find('.col-md-offset-1').height() )
						.closest('.loading')
						.removeClass('invi')
						.addClass('on');
						

					$(form)
						.closest('.etapa-3')
						.addClass('invi');
					$(form).ajaxSubmit({
						type: 'post',
						success: envioOK
					});

				}, 
			});
		}
	)

/*	$('form.js input[type="submit"]').bind('click', 
		function()
		{
			$(this).closest('form').validate({
				submitHandler: function(form)
				{

					$(form).find('#success').hide();
					$(form).find('#error').hide();
					$(form).find('.form-text').hide();
					$(form).find('fieldset').hide();
					$(form).find('.form-text').hide();
					$(form).find('input[type=submit]').hide();

					$(form).find('#process').show();

					$(form).ajaxSubmit({
						type: 'post',
						success: contatoOk
					});

				}, 
				rules: {
					nm: {
						required: true
					},
					ml: {
						email: true,
						required: true
					},
					msgm: {
						required: true
					}
				},
				messages: {
					nm: {
						required: 'Campo obrigatório'
					},
					ml: {
						email: 'E-mail inválido',
						required: 'Campo obrigatório'
					},
					msgm: {
						required: 'Deixe sua mensagem'
					}
				}
			});
		}
	)*/

	$('.alert button').bind('click', function()
	{
		$(this).closest('.alert').hide();
	})

}); //end $(document).ready

function matriculaOK (data)
{

	var matricula = $('#inscricao .etapa-1 #mtcpf').val();
	var nome = $('#inscricao .etapa-1 #nmln').val();

	if( data == 'sucesso')
	{
		$('#inscricao .loading')
			.removeClass('on')
			.addClass('invi');

		$('#inscricao .etapa-2')
			.removeClass('invi')
			.find('#mtcpf').val( matricula )
			.closest('.etapa-2')
			.find('#tgt-matricula').text(matricula)
			.closest('.etapa-2')
			.find('#nmln').val(nome)
			.closest('.etapa-2')
			.find('#tgt-nome').text(nome);
	}
	else
	{
		msgShow('erro', 'Ih!', 'Houve um erro ao verificar sua matrícula, por favor, tente novamente.')

		$('#inscricao .loading')
			.removeClass('on')
			.addClass('invi');

		$('#inscricao .etapa-1')
			.removeClass('invi');
	}

}

function dadosOK (data)
{
	// console.log($(this));
	// console.log(data);

	var nome = $('#inscricao .etapa-2 #nmln').val();
	var email = $('#inscricao .etapa-2 #ml').val();
	email = email.split("@");
	email[0] = email[0].slice(0, 3) + '*****' + email[0].slice(-3)
	email = email.join('@');
	var matricula = $('#inscricao .etapa-2 #mtcpf').val();
	var presenca = $('#inscricao .etapa-2 #cnfrm').val();
	var convidado1 = $('#inscricao .etapa-2 #prcvdd').val();
	var convidado2 = $('#inscricao .etapa-2 #sgcvdd').val();

	if( data != 'sucesso')
	{
		$('#inscricao .loading')
			.removeClass('on')
			.addClass('invi');

		$('#inscricao .etapa-3')
			.removeClass('invi')
			.find('#tgt-email').text(email)
			.closest('.etapa-3')
			.find('#ml').val(email)
			.closest('.etapa-3')
			.find('#nmln').val(nome)
			.closest('.etapa-3')
			.find('#mtcpf').val(matricula)
			.closest('.etapa-3')
			.find('#cnfrm').val(presenca)
			.closest('.etapa-3')
			.find('#prcvdd').val(convidado1)
			.closest('.etapa-3')
			.find('#sgcvdd').val(convidado2)

	}
	else
	{
		msgShow('erro', 'Ih!', 'Houve um erro ao enviar seu ingresso, por favor, tente novamente.')

		$('#inscricao .loading')
			.removeClass('on')
			.addClass('invi');

		$('#inscricao .etapa-2')
			.removeClass('invi');
	}

}

function envioOK (data)
{
	console.log($(this));
	console.log(data);

	if( data != 'sucesso')
	{

		$('#inscricao .loading')
			.removeClass('on')
			.addClass('invi');

		$('#inscricao .etapa-3')
			.removeClass('invi');

	}
	else
	{
		msgShow('erro', 'Ih!', 'Houve um erro ao enviar seu ingresso, por favor, tente novamente.')

		$('#inscricao .loading')
			.removeClass('on')
			.addClass('invi');

		$('#inscricao .etapa-3')
			.removeClass('invi');
	}

}

function contatoOk (data)
{
	// console.log($(this));
	// console.log(data);

	$('#contato #process').hide();
	$('#contato form fieldset').show();
	$('#contato form .form-text').show();
	$('#contato form input[type=submit]').show();


	if( data == 'sucesso')
	{
		$('#contato form #success').show();
		$('#contato form')[0].reset();
	}
	else
	{
		$('#contato form #error').show();
	}

}

function URLize (s) 
{
    var r=s.toLowerCase();
    r = r.replace(new RegExp(/\s/g),"");
    r = r.replace(new RegExp(/[àáâãäå]/g),"a");
    r = r.replace(new RegExp(/æ/g),"ae");
    r = r.replace(new RegExp(/ç/g),"c");
    r = r.replace(new RegExp(/[èéêë]/g),"e");
    r = r.replace(new RegExp(/[ìíîï]/g),"i");
    r = r.replace(new RegExp(/ñ/g),"n");                
    r = r.replace(new RegExp(/[òóôõö]/g),"o");
    r = r.replace(new RegExp(/œ/g),"oe");
    r = r.replace(new RegExp(/[ùúûü]/g),"u");
    r = r.replace(new RegExp(/[ýÿ]/g),"y");
    r = r.replace(new RegExp(/\W/g),"");
    return r;
};

function pluralize (s, p, n)
{
	if( n != 1)
	{
		return p;
	}
	else
	{
		return s;
	}
}

function initializeMap()
{

	var myLatLgn = new google.maps.LatLng( -16.675207,-49.260501 );

	var mapCanvas = document.getElementById( 'map-canvas' );
	var mapOptions = {
		center: myLatLgn,
		zoom: 16,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		backgroundColor: '7030a0',
		scrollwheel: false
	}
	var map = new google.maps.Map( mapCanvas, mapOptions );

	var marker = new google.maps.Marker({
	    position: myLatLgn,
	    map: map,
	    title:"Hello World!"
	});

}

function showInAnimation () 
{

	$('.hided').each(function()
	{
		if( $( window ).scrollTop() + ( $( window ).height() * 0.8 ) > $(this).offset().top - 300 )
		{
			$(this).addClass('appeared').removeClass('hided');
		}
	})
}

function tamanhoBody () 
{

	if( isWindows() && isChrome() )
	{
		// $('body').height($('.wrap-site').height());
	}
}

function isWindows () 
{
	return (navigator.platform.indexOf('Win') >= 0)
}

function isChrome () 
{
	return (window.chrome)
}

function doElParallax ()
{
	// console.log($(window).scrollTop());

	//fake parallax bg
	$('.bg-parallax').each(function()
	{
		var $obj = $(this);

		var yPos = -($(window).scrollTop() * ( $obj.data('bg-dist') ));
	
		var bgpos = yPos + 'px';
/*
		$obj.stop().animate(
		{
			'background-position-y':  '-' + $(window).scrollTop() + 'px'
		}, 500, 'easeOutQuint');
*/		
		$obj.css('background-position-y', bgpos);

	})

	$('.el-parallax').each(function()
	{
		var $objP = $(this);

		var tPos = ( $(window).scrollTop() * ( $objP.data('el-dist') ) ); 
/*
		$objP.stop().animate({
			top: tPos
		}, 500, 'easeOutQuint');
*/

		$objP.offset({top: tPos});

	})
}

function realcaMenu ()
{
	/*
	console.log("home: " + $('#home').offset().top + " | " + $(window).scrollTop() + " | " + ($('#home').offset().top > $(window).scrollTop()) )
	console.log("voce: " + $('#voce-e-show').offset().top + " | " + $(window).scrollTop() + " | " + ($('#voce-e-show').offset().top > $(window).scrollTop()) )
	console.log("atracoes: " + $('#atracoes').offset().top + " | " + $(window).scrollTop() + " | " + ($('#atracoes').offset().top > $(window).scrollTop()) )
	console.log("inscricoes: " + $('#inscricao').offset().top + " | " + $(window).scrollTop() + " | " + ($('#inscricao').offset().top > $(window).scrollTop()) )
	*/

	$('.menu-principal li').removeClass('atual');
	$('.menu-principal li').each(function() 
	{
		if( $($(this).find('a').attr('href')).offset().top - 200 > $(window).scrollTop()- 1080 )
		{
			$(this).addClass('atual');
			return false;
		}
	});

}

function msgShow(tema, tit, txt)
{
	$('.msg-show').show();
	$('.msg-show .tit').text(tit);
	$('.msg-show .msg').text(txt);
	$('.msg-show .wrap').css('margin-top', '-' + ($('.msg-show .wrap').height() / 2) + 'px' )
}

function confereCamposEtp2 ()
{
	if( !$('#inscricao .etapa-2 form #ddsok').is(':checked') && !$('#inscricao .etapa-2 form #cnfrm').is(':checked') && $('#inscricao .etapa-2 form #prcvdd').val() == '' && $('#inscricao .etapa-2 form #sgcvdd').val() == '' )
	{
		$('#inscricao .etapa-2 form input[type="submit"]')
			.attr('disabled', 'disabled')
	}
	else
	{
		$('#inscricao .etapa-2 form input[type="submit"]')
			.removeAttr('disabled')
	}

}

function fechaEtapa3 ()
{
	$('#inscricao .etapa-3')
		.addClass('invi');

	$('#inscricao .etapa-1')
		.removeClass('invi')
}
