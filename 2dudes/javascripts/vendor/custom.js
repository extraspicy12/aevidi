$(document).ready(function() {
  $(document).foundation();

  var pull        = $('.toggleMenu');
  var menu        = $('.nav');
  var bottom      = $('header .bottom');
  var search      = $('header .bottom .search-toggle');

  $(pull).on('click', function(e) {
      e.preventDefault();
      menu.slideToggle();
      $(this).toggleClass("active");
    });

  $(".nav li a").each(function() {
      if ($(this).next().length > 0) {
          $(this).addClass("parent");
      };
  })

  adjustMenu();

  $(window).resize(function(){
    adjustMenu();
  });

  function adjustMenu() {
      var w = $(window).width();
      if(w < 768) {
          if (!$(".toggleMenu").hasClass("active")) {
              $(menu).hide();
          } else {
              $(menu).show();
          }
          $(".nav li").unbind('mouseenter mouseleave');
          $(".nav li a.parent").unbind("click").bind("click", function(e){
              e.preventDefault();
              $(this).parent("li").toggleClass('hover');
          });
          if (search.css("display") == "none") {
            bottom.css("backgroundColor", "#2e8445");
            search.css("display", "block");
            menu.hide();
          }
      } else {
          if (search.css("display") != "none") {
            bottom.css("backgroundColor", "#47a761");
            search.css("display", "none");
          }
          menu.show();
          $(".nav li").removeClass("hover");
          $(".nav li a").unbind("click");
          $(".nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
              $(this).toggleClass('hover');
          });
      }
  };

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