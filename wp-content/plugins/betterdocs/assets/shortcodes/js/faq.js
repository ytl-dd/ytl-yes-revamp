jQuery(document).ready((function(e){jQuery(document).on("click",".betterdocs-faq-post",(function(e){var t=jQuery(this),r=jQuery(".betterdocs-faq-group.active");t.parent().hasClass("active")||(t.parent().addClass("active"),t.children("svg").toggle(),t.next().slideDown());for(let e of r)jQuery(e).hasClass("active")&&(jQuery(e).removeClass("active"),jQuery(e).children(".betterdocs-faq-post").children("svg").toggle(),jQuery(e).children(".betterdocs-faq-main-content").slideUp())}))}));