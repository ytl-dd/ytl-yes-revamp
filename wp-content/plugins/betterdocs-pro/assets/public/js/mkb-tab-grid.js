jQuery(document).ready((function(t){t(".betterdocs-tabs-nav-wrapper a").first().addClass("active"),t(".betterdocs-tabgrid-content-wrapper").first().addClass("active"),t(".tab-content-1").addClass("active"),t(".betterdocs-tabs-nav-wrapper a").click((function(a){a.preventDefault(),t(this).siblings("a").removeClass("active").end().addClass("active");let e=this.getAttribute("data-toggle-target");t('.betterdocs-tabgrid-content-wrapper[data-tab_target="'+e+'"]').addClass("active").siblings().removeClass("active")}))}));