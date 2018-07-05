<?php
    include(__DIR__.DS.'header-variables.php');
?>
// <script>
(function( $ ) {
  $(function() {
      
<?php /**********************************************************************TOP MENU SHOW AND HIDE*************************/?>     
        
      <?php if ($O_HDR_HEADER_ALTERNATIVES == 1 || (
        $O_HDR_HEADER_ALTERNATIVES == 2 &&
        is_front_page()
        )) : ?>
                    
        
            var wh = 1 ;
            $(window).bind('scroll', function () {
                    if ($(window).scrollTop() < wh) {
                        $('#wtst-navbar-2').show();
                        $('#wtst-navbar-1').stop().fadeOut();
                    } else {
                        $('#wtst-navbar-2').hide();
                        $('#wtst-navbar-1').stop().fadeIn();
                    }
            });
            if ($(window).scrollTop() < wh) {
                $('#wtst-navbar-2').fadeIn(1000);
                $('#wtst-navbar-1').hide();
            } else {
                $('#wtst-navbar-2').hide();
                $('#wtst-navbar-1').fadeIn(1000);
            }
          
          
    <?php else: ?>
                    
                    
        <?php if($O_HDR_POSITION_TYPES != 0): ?>
          $(window).bind('scroll load', function () {
                if($('#wtst-topbar').position()) {
                    var wh = $('#wtst-topbar').outerHeight() + $('#wtst-topbar').position().top ;
                    if ($(window).scrollTop() < wh) {
                        $('#wtst-navbar').css('top', (wh-$(window).scrollTop())+'px').removeClass('wtst-navbar-pos-1').addClass('wtst-navbar-pos-0');
                    } else {
                        $('#wtst-navbar').css('top', 0).removeClass('wtst-navbar-pos-0').addClass('wtst-navbar-pos-1');
                    }
                }
              <?php if($O_HDR_POSITION_TYPES == 1): ?>
                  $('#wtst-topbar').css('margin-bottom',($('#wtst-navbar').outerHeight()) + 'px');
              <?php endif; ?>
          });
          <?php endif; ?>
        
    <?php endif; ?>
        
        
<?php /**********************************************************************ONEPAGE EASING*************************/?>        
        
    
    <?php if(get_option(wtst_options::O_HDR_ONEPAGE_EASE)): ?>
        $('a[href^="#"]').click(function (e) {
            if ($(this).hasClass('no-scroll')) {
                return;
            }
            e.preventDefault(); 
            var handicup = $('#wtst-navbar-1').height();
            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top - handicup
            }, 500);
            return false;
        });
    <?php endif; ?>
        
        
<?php /**********************************************************************Preloader*************************/?>      
    
    <?php if (get_option(wtst_options::O_HDR_PRELOADER)): ?>
            $(document).ready(function ($) {
                var Body = $('body');
                Body.addClass('preloader-site');
            });
            $(window).on('load', function () {
                setTimeout(function(){
                    $('.preloader-wrapper').fadeOut();
                    $('body').removeClass('preloader-site');
                }, 3000);
                $('.preloader-wrapper').fadeOut();
                $('body').removeClass('preloader-site');
            });
    <?php endif; ?>
    });
})(jQuery);