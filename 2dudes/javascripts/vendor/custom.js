$(document).ready(function() {
  $(document).foundation();

  var ww = document.body.clientWidth;
  $(".toggleMenu").click(function(e) {
      e.preventDefault();
      $(this).toggleClass("active");
      $(".nav").toggle();
  });
  $(".nav li a").each(function() {
      if ($(this).next().length > 0) {
          $(this).addClass("parent");
      };
  })
  adjustMenu();

  $(window).bind('resize orientationchange', function() {
      ww = document.body.clientWidth;
      adjustMenu();
  });

  function adjustMenu() {
    if (ww < 768) {
        $(".toggleMenu").css("display", "block");
        $(".search-ul").css("display", "none");
        $(".search-toggle").show();
        $(".bottom").css("backgroundColor", "#92b999");
        if (!$(".toggleMenu").hasClass("active")) {
            $(".nav").hide();
        } else {
            $(".nav").show();
        }
        $(".nav li").unbind('mouseenter mouseleave');
        $(".nav li a.parent").unbind("click").bind("click", function(e){
            e.preventDefault();
            $(this).parent("li").toggleClass('hover');
        });
    } else {
        $(".toggleMenu").css("display", "none");
        $(".search-ul").css("display", "block");
        $(".search-toggle").hide();
        $(".bottom").css("backgroundColor", "#47a761");
        $(".nav").show();
                $(".nav li").removeClass("hover");
        $(".nav li a").unbind("click");
        $(".nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
            $(this).toggleClass('hover');
        });
    }
  }

  $(".section-container section p a").unbind().click(function() {
  var currentSection, newSection;
  if ($(this).attr('id') == 'login') {
    currentSection = $(this).parent().parent();
    newSection = currentSection.parent().children(":nth-child(2)");
   } else {
    currentSection = $(this).parent().parent();
    newSection = currentSection.parent().children(":nth-child(1)");
   }
   currentSection.find('.content').stop().slideToggle();
   newSection.find('.content').stop().slideToggle();
   return false;
  });
  $(".search").mouseover(function(){
    if ($(".search-toggle").css("display") == "none")
      $(".search, .bottom").stop().animate({backgroundColor: '#92b999'}, 200);
  });
  $(".search").mouseout(function(){
    if ($(".search-toggle").css("display") == "none")
      $(".search, .bottom").stop().animate({backgroundColor: '#47a761'}, 200);
  });
  $(".search").click(function(){
    if ($(".search-toggle").css("display") == "none") {
      $(".search-toggle").stop().slideToggle(200);
        $(".search, .bottom").animate({backgroundColor: '#92b999'}, 200);
    } else {
      $(".search-toggle").stop().slideToggle(200);
        $(".search, .bottom").animate({backgroundColor: '#47a761'}, 200);
    }
  });
});