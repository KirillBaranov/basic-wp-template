!function(t){var e={};function n(o){if(e[o])return e[o].exports;var a=e[o]={i:o,l:!1,exports:{}};return t[o].call(a.exports,a,a.exports,n),a.l=!0,a.exports}n.m=t,n.c=e,n.d=function(t,e,o){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:o})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var a in t)n.d(o,a,function(e){return t[e]}.bind(null,a));return o},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="",n(n.s=0)}([function(t,e,n){t.exports=n(1)},function(t,e,n){"use strict";n.r(e);n(2),n(8)},function(t,e,n){"use strict";n(3),n(4),n(5),n(6),n(7),$(document).ready((function(){var t=$('input[type="tel"]');t.focus((function(){$(this).mask("+7-999-999-99-99")})),t.blur((function(){$(this).val().length<16&&$(this).val("")})),$(".show-more-questions").click((function(){var t=$(".questions__container").find(".block-question");$(".show-more-questions").fadeOut(),t.addClass("visible-question")}))}))},function(t,e,n){"use strict";$(document).ready((function(){$("input, textarea").focus((function(t){var e=$(this);e.data("placeholder-tmp",e.attr("placeholder")),e.attr("placeholder","")})),$("input, textarea").blur((function(t){var e=$(this);e.attr("placeholder",e.data("placeholder-tmp"))}))}))},function(t,e,n){"use strict";$(document).ready((function(){$(".lazy-scroll").click((function(){var t=$(this).attr("href");return $("html, body").animate({scrollTop:$(t).offset().top-300+"px"},1e3),!1})),$("nav").find("a").click((function(){var t=$(this).attr("href");return window.isOpen&&window.hideOrOpenMenu(),$("html, body").animate({scrollTop:$(t).offset().top+-100+"px"},2e3),!1}));var t=$(".parallax").offset().top-$(window).height()/2;$(window).scroll((function(){var e,a;!function(e){arguments.length>1&&void 0!==arguments[1]&&arguments[1];var n=$(window).scrollTop();$(e).each((function(){var e=$(this),o=e.attr("data-direction")||o;if(n>=t){var a=.3*(n-t);a>1e3&&(a=1e3),setTimeout((function(){"top"===o?e.css({transition:".1s linear",transform:"translateY(-"+a+"px)"}):e.css({transition:".1s linear",transform:"translateY("+a+"px)"})}),200)}}))}($(".parallax")),e=$(window).scrollTop(),a=$("#logo"),e>=o[0].from&&e<=o[0].to||e>=o[1].from&&e<=o[1].to?(n.addClass("header-lighten"),a.attr("src","/wp-content/themes/theme/dist/img/logo-white.png")):(n.removeClass("header-lighten"),a.attr("src","/wp-content/themes/theme/dist/img/logo.png"))}));var e=$(".darken-screen"),n=$("header"),o=[{from:$(e[0]).offset().top,to:$(e[0]).offset().top+$(e[0]).height()+n.height()},{from:$(e[1]).offset().top,to:$(e[1]).offset().top+$(e[1]).height()+n.height()}]}))},function(t,e,n){"use strict";$(document).ready((function(){var t=$(".cake");window.isOpen=!1,t.click((function(){window.hideOrOpenMenu()}))})),window.hideOrOpenMenu=function(){var t=$(".cake__line"),e=$(".background-menu"),n=$(".mobile-menu"),o=$("#logo");window.isOpen?(t.removeClass("active-menu"),n.removeClass("active-mobile-menu"),e.removeClass("active-menu-bg"),o.attr("src","/wp-content/themes/theme/dist/img/logo.png")):(t.addClass("active-menu"),n.addClass("active-mobile-menu"),e.addClass("active-menu-bg"),o.attr("src","/wp-content/themes/theme/dist/img/logo-white.png")),window.isOpen=!window.isOpen}},function(t,e,n){"use strict";$(document).ready((function(){var t=$(".animate"),e=$(".animate-instanse");function n(){var e=$(window).scrollTop()+$(window).height()-200,n=$(".pen-animate"),o=n.offset().top;e>=o&&n.addClass("pen-animated"),$.each(t,(function(){var t=$(this),n=t.offset().top;if(e>=n){var o=t.attr("data-delay")||0,a=t.attr("data-duration")||"1s";setTimeout((function(){t.css({transition:"all "+a+" ease-in-out",transform:"scale(1) translate(0) skew(0) rotate(0)",opacity:1})}),o)}}))}$.each(e,(function(){var t=$(this),e=t.attr("data-delay")||"1s",n=t.attr("data-duration")||"1s";setTimeout((function(){t.css({transition:"all "+n+" ease-in-out",transform:"scale(1) translate(0) skew(0) rotate(0)",opacity:1})}),e)})),n(),$(window).scroll((function(){n()}))}))},function(t,e,n){"use strict";$(document).ready((function(){$(".form__button, #do-validate, .questions__button").click((function(){var t,e,n=$(this).parent().parent().find("input"),o=$(this).parent().parent().find("textarea");if(o.length>0&&n.push(o),t=n,e=!0,$.each(t,(function(){var t,n=$(this).val(),o=$(this);""==n?(o.addClass("is-not-valide"),o.addClass("bounce"),e=!1,setTimeout((function(){return o.removeClass("bounce")}),200)):"tel"==o.attr("type")&&o.val().length<16?(o.addClass("is-not-valide"),o.addClass("bounce"),e=!1,setTimeout((function(){return o.removeClass("bounce")}),200)):"email"!=o.attr("type")||(t=n).length>=6&&t.includes("@")&&t.includes(".")?o.removeClass("is-not-valide"):(o.addClass("is-not-valide"),o.addClass("bounce"),e=!1,setTimeout((function(){return o.removeClass("bounce")}),200))})),e){var a=[];$.each(n,(function(){a.push({name:$(this).attr("name"),val:$(this).val()||$(this).text()})})),$.ajax({url:"/wp-content/themes/theme/handlers/sending-mail.php",method:"post",data:{subject:"Заявка с norma-a3.ru",body:a},success:function(){return function(){var t=$("input"),e=$("textarea");t.push(e),$.each(t,(function(){$(this).val("")}))}()},error:function(t){return console.error(JSON.parse(t))}})}}))}))},function(t,e,n){}]);
//# sourceMappingURL=bundle.js.map