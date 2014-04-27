$(document).ready(function() {
  $(document).foundation();

  var pull        = $('.toggleMenu');
  var menu        = $('.menu > ul:first-of-type');
  var bottom      = $('header .bottom');
  var search      = $('header .bottom .search-toggle');

  $(pull).on('click', function(e) {
      e.preventDefault();
      menu.slideToggle();
      $(this).toggleClass("active");
    });

  $(".menu > ul:first-of-type li a").each(function() {
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
      if(w < 757) {
          if (!$(".toggleMenu").hasClass("active")) {
              menu.hide();
          } else {
              menu.show();
          }
          $(".menu > ul:first-of-type li").unbind('mouseenter mouseleave');
          $(".menu > ul:first-of-type li a.parent").unbind("click").bind("click", function(e){
              e.preventDefault();
              $(this).parent("li").toggleClass('hover');
          });
          if (!search.hasClass("mobile")) {
            search.addClass("mobile");
            bottom.css("backgroundColor", "#7ABB00");
            search.css("display", "block");
          }
      } else {
          if (search.hasClass("mobile")) {
            search.removeClass("mobile");
            bottom.css("backgroundColor", "#333333");
            search.css("display", "none");
            menu.show();
          }
          $(".menu > ul:first-of-type li").removeClass("hover");
          $(".menu > ul:first-of-type li a").unbind("click");
          $(".menu > ul:first-of-type li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
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
  $(".search-toggle-button").mouseover(function(){
    if ($(".search-toggle").css("display") == "none")
      $(".search-toggle-button/* , .bottom */").stop().animate({backgroundColor: '#333333'}, 75);
  });
  $(".search-toggle-button").mouseout(function(){
    if ($(".search-toggle").css("display") == "none")
      $(".search-toggle-button/* , .bottom */").stop().animate({backgroundColor: '#9BCC3F'}, 75);
  });
  $(".search-toggle-button").click(function(){
    if ($(".search-toggle").css("display") == "none") {
      $(".search-toggle").stop().slideToggle(200);
        $(".search-toggle-button").animate({backgroundColor: '#333333'}, 200);
    } else {
      $(".search-toggle").stop().slideToggle(200);
        $(".search-toggle-button").animate({backgroundColor: '#9BCC3F'}, 200);
    }
  });

  $("#comments ol.comment-list").find("ul.children").each(function() {
    var parentUser = $(this).prev().find("> article > footer.comment-meta div.comment-author span.author-name").html();
    $(this).css('background-color', $(this).prev().css('background-color'));
/*
    $(this).css('border-bottom-left-radius', '5px');
    $(this).css('border-bottom-right-radius', '5px');
*/
    var child = $(this).find("> li.comment > article > footer.comment-meta div.comment-author span.author-name");
    child.parent().after("<div class=\"comment-reply\"><div class=\"arrow-right\"></div> "+parentUser+"</div>");
  });
});