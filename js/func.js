var animate_fade = false;
var animate_scroll = false;

function fade_height(height_container, s, n, time, time_before, height_plus) {    
  if (!$(s).eq(n).hasClass('active')) {    
      if (height_plus == null)
        height_plus = 0;
    setTimeout(function() {                          
        k = $(s).eq(n).height();      
        
        $(height_container).animate({height: k + height_plus}, time);    
      }, time_before);    
  }
}

function fade9(s, n, time1,  time2) {       
  if (!$(s).eq(n).hasClass('active')) {    
      $(s).animate({opacity: '0'}, time1, function() {        
        $(s).removeClass('active').eq(n).stop().animate({opacity: '0.999'}, time2).addClass('active');
      })      
  }
};

function fade(s, n, time1, time2, after, space, space_s, height_s, height_plus) {       
  if (!$(s).eq(n).hasClass('active')) {
    if (after == false) {
      $(s).fadeOut(time1).removeClass('active').eq(n).stop().fadeIn(time2).addClass('active');    
      if (space == true) {               
          $(space_s).css('height', $(height_s).eq(n).height() + height_plus);      
      }        
    } else {
      animate_fade = true;
      $(s).fadeOut(time1).removeClass('active');
      setTimeout(function() {
        $('.auto-min-height').css('min-height', '0px');
        $(s).eq(n).stop().fadeIn(time2, function() { animate_fade = false; }).addClass('active');    
        if (space == true) {           
            $(space_s).css('height', $(height_s).eq(n).height() + height_plus);
        }            
      }, time1+10);
    }
  }
}

function fade_(s, n, time) {    
    if (!$(s).eq(n).hasClass('active')) {
      $(s).stop().removeClass('active');
      $(s).eq(n).css('display','none').css('z-index', '4').addClass('active').fadeIn(time, function () {        
          $(s).css('z-index', 2);
          $(this).css('z-index', 3);
      });          
    }  
}

$(function() {
  /*
    $('.wpcf7-text, textarea').bind('keypress', function(e) {
      $(this).removeClass('change').addClass('change');
  });  

  $('.stop-propagation').bind('click', function() {        
      e.stopPropagation();  e.preventDefault();       
  });  
    $('.bg-src').each(function() {
      $(this).css("background-image", "url('"+$(this).data('src')+"')");

    });
    var InputClass = 'wpcf7-text, .wpcf7-textarea';
    var ClickedClass = 'clicked';
    $('.'+InputClass).focus(function(){              
        $(this).attr('placeholder', '');
        if ($(this).attr('defvalue') == undefined)
            $(this).attr('defvalue',$(this).val());
        if (($(this).attr('blurvalue') == undefined)||($(this).attr('blurvalue') == $(this).attr('defvalue'))) {          
          $(this).val('').addClass(ClickedClass);
        }
            
    }).blur(function(){
            var blurvalue = $(this).val();
            if (blurvalue == '')
                $(this)
                    .removeAttr('blurvalue')
                    .val($(this).attr('defvalue'))
                    .removeClass('change')
                    .removeClass(ClickedClass);
            else
                $(this).attr('blurvalue',blurvalue);
            $(this).attr('placeholder', $(this).attr('defvalue'));  
        });
    $('.wpcf7-text, .wpcf7-textarea').each(function(){        
      if ($(this).attr('defvalue') == undefined) {
        $(this).attr('defvalue',$(this).val());        
        $(this).attr('placeholder',$(this).val());        
      }          
    });
    $('.wpcf7-submit').bind('click', function(e) {
        reset_input();
    });

    $(document).ajaxSuccess(function(data) {    
        reset_input();
    });      
    function reset_input() {
       $('.wpcf7-text, .wpcf7-textarea').each(function(){
            $(this).attr('placeholder', $(this).attr('defvalue'));
            if ($(this).val() == $(this).attr('defvalue') && !$(this).hasClass('hidden_info'))
                $(this).val('').removeClass('change');
        });
    }
    */
    toabsolute();
    nice_inputs();
});

var timer = []; var timer_speed = [];
function timer_slider(n, time,l) {           
      timer_speed[n] = time;
      timer[n] = setInterval(function() {            
        a = 0;        

        $(n+' .dots li').each(function(){        
          a++;          
          if ($(this).hasClass('active')) { return false;} });    
          a++; if (a > $(n+' .dots li').length) { a = 1; }                                                  
          $(n+' .dots li').eq(a-1).click();      
     }, time);
}


function init_radio() {

  $('.radio-list .item').bind('click', function() {
    $(this).parent().find('.item').removeClass('active');
    $(this).addClass('active');    

    if ($(this).parent().data('target') != '') {

      if ($(this).data("value") !== undefined)      
        $('#'+$(this).parent().data('target')).val($(this).data('value'));
      else 
        $('#'+$(this).parent().data('target')).val($(this).html());            
    }
  });  
  $('.radio-list').each(function() {    
    $('.item:eq(0)', this).click();    
  });
}

function timer_slider_reset(n) {
  clearInterval(timer[n]);
  timer_slider(n, timer_speed[n])
}


function init_menu() {

    $('.menu li').bind('click', function(e) {        
      ind = $('.menu li').index(this);
      $('.menu li').removeClass('active').eq(ind).addClass('active');    
      animate_scroll = true;
      $('html, body').animate({scrollTop: $('.top').eq(ind).offset().top - 0}, 600, function() { animate_scroll = false; });
  });    
  $( window ).scroll(function() {  
    scroll();
  });
  scroll();
  function scroll() {
     if ($(document).scrollTop() > 82) {              
        $('.menu').css('position', 'fixed').stop(true).animate({top: '0px'}, 0);     
      } else {
        $('.menu').css('position', 'absolute').stop(true).animate({top: '82px'}, 0);     
      }
      k = $(document).scrollTop() + $(window).height() / 2 - 100;
      if (animate_scroll == false) {
        a = -1;        
        $('.top').each(function() {
          a++;          
          if (k >= $(this).offset().top) {
            $('.menu li').removeClass('active').eq(a).addClass('active');
          }
        });
      }
  }  
}

/* space in number */
function parseStr(str) {
  str = str+'';
  var arr = str.split('');
  var str_temp = '';
  for(var i = arr.length - 1, j=1; i >= 0; i--, j++) {

 str_temp = arr[i] + str_temp;
 if(j%3 == 0) {
  str_temp = ' ' + str_temp;
 }
  }
  return str_temp;
}



jQuery.fn.ForceNumericOnly =
function()
{
    return this.each(function()
    {
        $(this).keydown(function(e)
        {            

            var key = e.charCode || e.keyCode || 0; 
            // Р Р°Р·С_РчС_Р°РчР_ backspace, tab, delete, С_С'С_РчР>РєРё, Р_Р+С<С╪Р_С<Рч С┼РёС"С_С< Рё С┼РёС"С_С< Р_Р° Р_Р_РїР_Р>Р_РёС'РчР>С_Р_Р_Р№ РєР>Р°Р_РёР°С'С_С_Рч
            return (
                key == 8 || 
                key == 9 ||
                key == 46 ||
                key == 188 ||
                key == 190 ||
                (key >= 37 && key <= 40) ||
                (key >= 48 && key <= 57) ||
                (key >= 96 && key <= 105));
        });
    });
};

function isnum( n ) {
    return res = ( n / n ) ? true : false;
}

function click_submit(n) {
    $(n+' .f').fadeOut(300, function() {            
      $(n+' .ok').fadeIn(400);
      setTimeout(function() {
        $(n+' .ok').fadeOut(300, function() {
          $(n+' .f').fadeIn(300);
        });
      }, 3000);
    })    
}

function toabsolute() {  
  if (!spider_detect(navigator.userAgent)) {
  a = 0;    
  $('.absolute').each(function() {            
    a++;
    width_ = $(this).width();
    height_ = $(this).height();
    $(this).after('<div class="space-'+a+'"></div>');
    $('.space-'+a).copyCSS($(this)).css('width', width_).css('height', height_).addClass('no-visible');
    $(this).css('width', $(this).width()).css('height', $(this).height()).css('position', 'absolute')
  });  
  }
}

$.fn.copyCSS = function(source){
    var dom = $(source).get(0);
    var style;
    var dest = {};
    if(window.getComputedStyle){
        var camelize = function(a,b){
            return b.toUpperCase();
        };
        style = window.getComputedStyle(dom, null);
        for(var i = 0, l = style.length; i < l; i++){
            var prop = style[i];
            var camel = prop.replace(/\-([a-z])/g, camelize);
            var val = style.getPropertyValue(prop);
            dest[camel] = val;
        };
        return this.css(dest);
    };
    if(style = dom.currentStyle){
        for(var prop in style){
            dest[prop] = style[prop];
        };
        return this.css(dest);
   };
   if(style = dom.style){
      for(var prop in style){
        if(typeof style[prop] != 'function'){
          dest[prop] = style[prop];
        };
      };
    };
    return this.css(dest);
};

 var spider_detect = function(user_agent) {
  var agent_dump = [
  ['Aport', 'Aport robot'],
  ['Google', 'Google'],
  ['msnbot', 'MSN'],
  ['Rambler', 'Rambler'],
  ['Yahoo', 'Yahoo'],
  ['AbachoBOT', 'AbachoBOT'],
  ['accoona', 'Accoona'],
  ['AcoiRobot', 'AcoiRobot'],
  ['ASPSeek', 'ASPSeek'],
  ['CrocCrawler', 'CrocCrawler'],
  ['Dumbot', 'Dumbot'],
  ['FAST-WebCrawler', 'FAST-WebCrawler'],
  ['GeonaBot', 'GeonaBot'],
  ['Gigabot', 'Gigabot'],
  ['Lycos', 'Lycos spider'],
  ['MSRBOT', 'MSRBOT'],
  ['Scooter', 'Altavista robot'],
  ['AltaVista', 'Altavista robot'],
  ['WebAlta', 'WebAlta'],
  ['IDBot', 'ID-Search Bot'],
  ['eStyle', 'eStyle Bot'],
  ['Mail.Ru', 'Mail.Ru Bot'],
  ['Scrubby', 'Scrubby robot'],
  ['Yandex', 'Yandex'],
  ['Mediapartners-Google', 'Mediapartners-Google (Adsense)'],
  ['Slurp', 'Hot Bot search'],
  ['WebCrawler', 'WebCrawler search'],
  ['ZyBorg', 'Wisenut search'],
  ['ia_archiver', 'Alexa search engine'],
  ['FAST', 'AllTheWeb'],
  ['YaDirectBot', 'Yandex Direct']
  ];
  
  for(var j=0;j<agent_dump.length;j++) {
    if(user_agent.toLowerCase().indexOf(agent_dump[j][0].toLowerCase())!=-1) {
      return agent_dump[j][1];
    }
  }

  return false;
}

function pngloader() {
  $(".ajax-loader").replaceWith("<div class='ajax-loader'></div>");
  var cSpeed=8;
  var cWidth=20;
  var cHeight=20;
  var cTotalFrames=12;
  var cFrameWidth=20;
  var cImageSrc='images/sprites.png';
  
  var cImageTimeout=false;
  var cIndex=0;
  var cXpos=0;
  var cPreloaderTimeout=false;
  var SECONDS_BETWEEN_FRAMES=0;
  
  function startAnimation(){
    
    document.getElementById('loaderImage').style.backgroundImage='url('+cImageSrc+')';
    document.getElementById('loaderImage').style.width=cWidth+'px';
    document.getElementById('loaderImage').style.height=cHeight+'px';
    
    //FPS = Math.round(100/(maxSpeed+2-speed));
    FPS = Math.round(100/cSpeed);
    SECONDS_BETWEEN_FRAMES = 1 / FPS;
    
    cPreloaderTimeout=setTimeout('continueAnimation()', SECONDS_BETWEEN_FRAMES/1000);
    
  }
  
  function continueAnimation(){
    
    cXpos += cFrameWidth;
    //increase the index so we know which frame of our animation we are currently on
    cIndex += 1;
     
    //if our cIndex is higher than our total number of frames, we're at the end and should restart
    if (cIndex >= cTotalFrames) {
      cXpos =0;
      cIndex=0;
    }
    
    if(document.getElementById('loaderImage'))
      document.getElementById('loaderImage').style.backgroundPosition=(-cXpos)+'px 0';
    
    cPreloaderTimeout=setTimeout('continueAnimation()', SECONDS_BETWEEN_FRAMES*1000);
  }
  
  function stopAnimation(){//stops animation
    clearTimeout(cPreloaderTimeout);
    cPreloaderTimeout=false;
  }
  
  function imageLoader(s, fun)//Pre-loads the sprites image
  {
    clearTimeout(cImageTimeout);
    cImageTimeout=0;
    genImage = new Image();
    genImage.onload=function (){cImageTimeout=setTimeout(fun, 0)};
    genImage.onerror=new Function('alert(\'Could not load the image\')');
    genImage.src=s;
  }
  
  //The following code starts the animation
  new imageLoader(cImageSrc, 'startAnimation()');  
}

function nice_inputs() {
    $('.nice-input form .field').addClass('css');
    $('.css label').bind('click', function() {
      $(this).next('input').focus();
    });
    $('input, textarea').each(function() {
    $(this).on('focus', function() {            
      $(this).parent().parent('.css').addClass('active');
    });
    $(this).on('blur', function() {      
      if ($(this).val().length == 0 || $(this).val()=='+7 ___ ___-__-__') {        
        $(this).val('').parent().parent('.css').removeClass('active');
      }
    });
    if ($(this).val() != '') $(this).parent().parent('.css').addClass('active');
  });
}