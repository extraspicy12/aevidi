$(document).ready(function() {
  var sortBy = "name";
  var categoryValues = {arr: new Array()};
  var locationValues = {arr: new Array()};
  var ratingValues = {arr: new Array()};
  var nameValues = {arr: new Array()};
  var active = nameValues;
  $("#loader").show();
  $("#main").hide();
  $("#sort-by-values #sort-by-name").show();
  $("#sort-by-categories #sorting-categories #name-key").addClass('active');
  $("#sort-button-holder #sort-submit").html("Search by "+sortBy);

  getCategoryValues();
  getLocationValues();
  getNameValues();
  getRatingValues();
  bindAnchors();
  sortReviews();

  function bindAnchors() {
    $("#sort-submit").on("click", function(e) {
        e.preventDefault();
        sortReviews();
    });

    $("#clear-values").on("click", function(e) {
        e.preventDefault();
        active.arr = new Array();
       $("#sort-by-values #sort-by-"+sortBy).find("li a").removeClass('active');
    })

    $("#sort-by-values .sort-by-x li a").on("click", function(e) {
      e.preventDefault();
      var name = $(this).attr('value');
      if ($(this).hasClass("active")) {
        $(this).removeClass("active");
        var remove;
        $.each(active.arr, function (key, value) {
          if (value == name)
            remove = key;
        });
        active.arr.splice(remove, 1);
      } else {
        $(this).addClass("active");
        active.arr.push(name);
      }
    });

    $("#sort-by-categories #sorting-categories li a").on("click", function(e) {
      e.preventDefault();
      if (!$(this).hasClass("active")) {
        var temp = $(this).attr('value');
        if (sortBy == "category")
          active = categoryValues;
        else if (sortBy == "name")
          active = nameValues;
        else if (sortBy == "rating")
          active = ratingValues
        else if (sortBy = "location")
          active = locationValues;
        else
          alert('Something went wrong!');
        $("#sort-by-categories #sorting-categories #"+sortBy+"-key").removeClass("active");
        sortBy = temp;
        $(this).addClass("active");
        $("#sort-by-values > ul").hide();
        $("#sort-by-values #sort-by-"+sortBy).show();
        $("#sort-button-holder #sort-submit").html("Search by "+sortBy);
      }
    });
    $("#loader").fadeOut( 400, function() {
      $("#main").fadeIn(400);
      $(window).resize();
    });
  }

  function getCategoryValues() {
    $.ajax ({
      url: MyAjax.ajaxurl,
      data: {
        action: 'getCategoryValues',
      },
      async: false,
      type: "POST",
      dataType: "html"
    }).success( function( html) {
        $("#sort-by-values #sort-by-category").html( html );
    });
  }

  function getLocationValues() {
    $.ajax ({
      url: MyAjax.ajaxurl,
      data: {
        action: 'getLocationValues',
      },
      async: false,
      type: "POST",
      dataType: "html"
    }).success( function( html) {
        $("#sort-by-values #sort-by-location").html( html );
    });
  }

  function getNameValues() {
    $.ajax ({
      url: MyAjax.ajaxurl,
      data: {
        action: 'getNameValues',
      },
      async: false,
      type: "POST",
      dataType: "html"
    }).success( function( html) {
        $("#sort-by-values #sort-by-name").html( html );
    });
  }

  function getRatingValues() {
    $.ajax ({
      url: MyAjax.ajaxurl,
      data: {
        action: 'getRatingValues',
      },
      async: false,
      type: "POST",
      dataType: "html"
    }).success( function( html) {
        $("#sort-by-values #sort-by-rating").html( html );
    });
  }

  function sortReviews() {
      $.ajax ({
        url: MyAjax.ajaxurl,
        data: {
          action: 'sortReviews',
          submit: $("#sort-button-holder #sort-submit").attr('value'),
          sortBy: sortBy,
          values: active.arr
        },
        async: true,
        type: "POST",
        dataType: "html"
      }).success( function( html) {
          $("#sorted-reviews").html( html );
      });
    }

});
