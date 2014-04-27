$(document).ready(function() {
  var sortBy = "date";
  var cuisineValues = new Array();
  var locationValues = new Array();
  var ratingValues = new Array();
  var dateValues = ['desc'];
  var nameValues = ['asc'];
  var priceValues = new Array();
  var atmosphereValues = new Array();
  var active = dateValues;
  $("#loader").show();
  $("#main").hide();
  $("#sort-by-values #sort-by-date").show();
  $("#sort-by-categories #sorting-categories #date-key").addClass('active');

  getAtmosphereValues();
  getCuisineValues();
  getLocationValues();
  getNameValues();
  getPriceValues();
  getDateValues();
  getRatingValues();
  bindAnchors();
/*   sortReviews(); */

  function bindAnchors() {
    $("#sort-submit").on("click", function(e) {
      e.preventDefault();
      sortReviews();
    });

    $("#clear-values").on("click", function(e) {
        e.preventDefault();
        if (sortBy != "date" && sortBy != "name") {
          active = new Array();
         $("#sort-by-values #sort-by-"+sortBy).find("li a").removeClass('active');
       }
    })

    $("#sort-by-values .sort-by-x li a").on("click", function(e) {
      e.preventDefault();
      var name = $(this).attr('value');
      if ($(this).hasClass("name")) {
        if (!$(this).hasClass("active")) {
          $(this).addClass("active");
          if (name == "asc")
            $("#sort-by-values .sort-by-x li a.name.desc").removeClass("active");
          else
            $("#sort-by-values .sort-by-x li a.name.asc").removeClass("active");
          active.pop();
          active.push(name);
        }
      } else if ($(this).hasClass("date")) {
        if (!$(this).hasClass("active")) {
          $(this).addClass("active");
          if (name == "asc")
            $("#sort-by-values .sort-by-x li a.date.desc").removeClass("active");
          else
            $("#sort-by-values .sort-by-x li a.date.asc").removeClass("active");
          active.pop();
          active.push(name);
        }
      } else {
      if ($(this).hasClass("active")) {
        $(this).removeClass("active");
        var remove;
        $.each(active, function (key, value) {
          if (value == name)
            remove = key;
        });
        active.splice(remove, 1);
      } else {
        $(this).addClass("active");
        active.push(name);
      }
      }
    });

    $("#sort-by-categories #sorting-categories li a").on("click", function(e) {
      e.preventDefault();
      if (!$(this).hasClass("active")) {
        var temp = $(this).attr('value');
        if (temp == "cuisine")
          active = cuisineValues;
        else if (temp == "name")
          active = nameValues;
        else if (temp == "rating")
          active = ratingValues;
        else if (temp == "location")
          active = locationValues;
        else if (temp == "atmosphere")
          active = atmosphereValues;
        else if (temp == "price")
          active = priceValues;
        else if (temp == "date")
          active = dateValues;
        else
          alert('Something went wrong!');
        $("#sort-by-categories #sorting-categories #"+sortBy+"-key").removeClass("active");
        sortBy = temp;
        $(this).addClass("active");
        $("#sort-by-values > ul").hide();
        $("#sort-by-values #sort-by-"+sortBy).show();
      }
    });
    $("#loader").fadeOut( 400, function() {
      $("#main").fadeIn(400);
      $(window).resize();
    });
  }

  function getCuisineValues() {
    $.ajax ({
      url: MyAjax.ajaxurl,
      data: {
        action: 'getCuisineValues',
      },
      async: false,
      type: "POST",
      dataType: "html"
    }).success( function( html) {
        $("#sort-by-values #sort-by-cuisine").html( html );
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
    $("#sort-by-values #sort-by-name").html('<li><a class="name active asc" href="#" value="asc">Ascending</a></li><li><a href="#" value="desc" class="name desc">Descending</a></li>');
  }

  function getDateValues() {
    $("#sort-by-values #sort-by-date").html('<li><a class="date asc" href="#" value="asc">Ascending</a></li><li><a href="#" value="desc" class="date active desc">Descending</a></li>');
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

  function getAtmosphereValues() {
    $.ajax ({
      url: MyAjax.ajaxurl,
      data: {
        action: 'getAtmosphereValues',
      },
      async: false,
      type: "POST",
      dataType: "html"
    }).success( function( html) {
        $("#sort-by-values #sort-by-atmosphere").html( html );
    });
  }

  function getPriceValues() {
    $.ajax ({
      url: MyAjax.ajaxurl,
      data: {
        action: 'getPriceValues',
      },
      async: false,
      type: "POST",
      dataType: "html"
    }).success( function( html) {
        $("#sort-by-values #sort-by-price").html( html );
    });
  }

  function sortReviews() {
      $.ajax ({
        url: MyAjax.ajaxurl,
        data: {
          action: 'sortReviews',
          submit: $("#sort-button-holder #sort-submit").attr('value'),
          sortBy: sortBy,
          values: active
        },
        async: true,
        type: "POST",
        dataType: "html",
        beforeSend: function( html ) {
          $("#loader2").show();
        }
      }).success( function( html ) {
          $("#loader2").hide();
          $("#sorted-reviews").html( html );
      });
    }

  function sortReviews2() {
      $.ajax ({
        url: MyAjax.ajaxurl,
        data: {
          action: 'sortReviews2',
          submit: $("#sort-button-holder #sort-submit").attr('value'),
          sortBy: sortBy,
          values: active
        },
        async: true,
        type: "POST",
        dataType: "html"
      }).success( function( html ) {
        if (html == "false")
          alert("Please enter data to filter selection!");
        else
          $("#sort-form").append(html).submit();
      });
    }

});
