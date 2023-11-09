// Template Name: Al-Buraq
// Template URL: https://techpedia.co.uk/template/al-buraq/
// Description: Mosque HTML5 Template
// Author: TPD-Themes
// Version: 1.0.0
(function (window, document, $, undefined) {
  "use strict";
  var alburaqInit = {
    i: function (e) {
      alburaqInit.s();
      alburaqInit.methods();
    },
    s: function (e) {
      (this._window = $(window)),
        (this._document = $(document)),
        (this._body = $("body")),
        (this._html = $("html"));
    },
    methods: function (e) {
      alburaqInit.w();
      alburaqInit.contactForm();
      alburaqInit.BackToTop();
      alburaqInit.intializeSlick();
      alburaqInit.modalVideo();
      alburaqInit.salActivation();
      alburaqInit.donationBar();
      alburaqInit.radialProgress();
      alburaqInit.hidepreloader();
      alburaqInit.videplay();
      alburaqInit.countdownInit(".countdown", "2023/11/01");
    },
    w: function (e) {
      this._window.on("load", alburaqInit.l).on("scroll", alburaqInit.res);
    },
    hidepreloader: function () {
      $("#preloader").hide();
    },
    radialProgress: function () {
      $("svg.radial-progress").each(function (index, value) {
        $(this).find($("circle.complete")).removeAttr("style");
      });
      $(window)
        .scroll(function () {
          $("svg.radial-progress").each(function (index, value) {
            var percent = $(value).data("percentage");
            var radius = $(this).find($("circle.complete")).attr("r");
            var circumference = 2 * Math.PI * radius;
            var strokeDashOffset =
              circumference - (percent * circumference) / 100;
            $(this)
              .find($("circle.complete"))
              .animate({ "stroke-dashoffset": strokeDashOffset }, 1250);
          });
        })
        .trigger("scroll");
    },
    donationBar: function () {
      const progress = $(".progress-done");
      if (progress.length) {
        progress.css("width", progress.attr("data-done") + "%");
        progress.css("opacity", 1);
      }
    },
    contactForm: function () {
      $(".al-buraq-contact-form").on("submit", function (e) {
        e.preventDefault();
        var _self = $(this);
        var _selector = _self.closest("input,textarea");
        _self.closest("div").find("input,textarea").removeAttr("style");
        _self.find(".error-msg").remove();
        _self
          .closest("div")
          .find('button[type="submit"]')
          .attr("disabled", "disabled");
        var data = $(this).serialize();
        $.ajax({
          url: "./assets/mail/contact.php",
          type: "post",
          dataType: "json",
          data: data,
          success: function (data) {
            _self.find('button[type="submit"]').removeAttr("disabled");
            if (data.success) {
              _self.find(".message").html("Email Sent Successfully");
            } else {
              _self.find(".message").html("There is an error");
            }
            _self.trigger("reset");
            _self.find(".message").slideDown("slow");
            setTimeout(function () {
              _self.find(".message").slideUp("hide");
            }, 3000);
          },
        });
      });
    },

    BackToTop: function () {
      var btn = $("#backto-top");
      $(window).on("scroll", function () {
        if ($(window).scrollTop() > 300) {
          btn.addClass("show");
        } else {
          btn.removeClass("show");
        }
      });
      btn.on("click", function (e) {
        e.preventDefault();
        $("html, body").animate(
          {
            scrollTop: 0,
          },
          "300"
        );
      });
    },

    salActivation: function () {
      sal({
        threshold: 0.1,
        once: true,
      });
    },
    intializeSlick: function (e) {
      if ($(".donors-slider").length) {
        $(".donors-slider").slick({
          infinite: true,
          slidesToShow: 1,
          padding: "50px",
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          responsive: [
            {
              breakpoint: 1200,
              settings: {
                arrows: true,
                slidesToShow: 1,
              },
            },
            {
              breakpoint: 991,
              settings: {
                arrows: false,
                slidesToShow: 1,
              },
            },
            {
              breakpoint: 768,
              settings: {
                arrows: false,
                slidesToShow: 1,
              },
            },
            {
              breakpoint: 480,
              settings: {
                arrows: false,
                slidesToShow: 1,
              },
            },
          ],
        });
      }
      if ($(".scholars-slider").length) {
        $(".scholars-slider").slick({
          infinite: true,
          slidesToShow: 3,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          responsive: [
            {
              breakpoint: 1200,
              settings: {
                arrows: true,
                slidesToShow: 2,
              },
            },
            {
              breakpoint: 991,
              settings: {
                arrows: true,
                slidesToShow: 1,
              },
            },
            {
              breakpoint: 768,
              settings: {
                arrows: false,
                slidesToShow: 1,
              },
            },
            {
              breakpoint: 480,
              settings: {
                arrows: false,
                slidesToShow: 1,
                autoplaySpeed: 1500,
              },
            },
          ],
        });
      }
    },
    modalVideo: function () {
      $("#videoModal").on("hidden.bs.modal", function () {
        $("#videoModal iframe").attr(
          "src",
          $("#videoModal iframe").attr("src")
        );
      });
    },
    videplay: function () {
      $(".detail-sermon-card .play-btn").on("click", function () {
        $(".detail-sermon-card .img-box").hide("slow");
        $(".detail-sermon-card .video-box").show("slow");
      });
    },
    countdownInit: function (countdownSelector, countdownTime) {
      var eventCounter = $(countdownSelector);
      if (eventCounter.length) {
        eventCounter.countdown(countdownTime, function (e) {
          $(this).html(
            e.strftime(
              '<li><span class="number">%D</span><span class="number-text">Days</span></li>\
                <li><span class="number">%H</span><span class="number-text">Hours</span></li>\
                <li><span class="number">%M</span><span class="number-text">Minutes</span></li>\
                <li><span class="number">%S</span><span class="number-text">Seconds</span></li>'
            )
          );
        });
      }
    },
  };
  alburaqInit.i();
})(window, document, jQuery);
