(()=>{var e={2104:e=>{"use strict";e.exports=ClipboardJS}},t={};function o(s){var r=t[s];if(void 0!==r)return r.exports;var c=t[s]={exports:{}};return e[s](c,c.exports,o),c.exports}(()=>{class e{constructor(e){this.config=e,this.initialize(),this.init()}init(){this.categoryListAccordion(),this.feedbackForm(),this.printToc(),this.stickyTocContainer(),this.tocClose(),this.cloneTocContentToAfter(),this.copyToClipboard(),this.subCategoryExpand(),this.tocSmallCollapisble()}tocSmallCollapisble(){$=jQuery,$(".betterdocs-toc.collapsible-sm .toc-title").each((function(){$(this).click((function(e){e.preventDefault(),$(this).children(".angle-icon").toggle(),$(this).next(".toc-list").slideToggle()}))}))}initialize(){var e=jQuery;this.body=e("body"),this.catTitleList=e(".betterdocs-sidebar-content .betterdocs-category-grid-wrapper .betterdocs-single-category-wrapper .betterdocs-category-header"),this.currentActiveCat=e(".betterdocs-sidebar-content .betterdocs-category-grid-wrapper .betterdocs-single-category-wrapper.active"),this.listSidebarCatTitles=e(".betterdocs-sidebar-content .betterdocs-sidebar-list-wrapper .betterdocs-sidebar-list .betterdocs-category-header"),this.listSidebarCurrentCat=e(".betterdocs-sidebar-content .betterdocs-sidebar-list-wrapper .betterdocs-sidebar-list.active"),this.formLink=e("a[name=betterdocs-form-modal]"),this.feedbackFormWrap=e("#betterdocs-feedback-form"),this.feedbackFormFields=e("#betterdocs-feedback-form input, #betterdocs-feedback-form textarea")}categoryListAccordion(){this.listSidebarCurrentCat.find(".betterdocs-body").css("display","block"),this.listSidebarCurrentCat.siblings().find(".betterdocs-body").css("display","none"),this.listSidebarCatTitles.on("click",(function(e){e.preventDefault();let t=jQuery(e.target).closest(".betterdocs-sidebar-list");t.find(".betterdocs-body").slideToggle(),t.toggleClass("active").siblings().removeClass("active").find(".betterdocs-body").slideUp()}))}onScroll(){var e=jQuery,t=e(document).scrollTop();e(".sticky-toc-container .betterdocs-toc .toc-list a,.betterdocs-full-sidebar-right .betterdocs-toc .toc-list a").each((function(){var o=e(this),s=e(o.attr("href"));s.position()?.top<=t&&s.position()?.top+s.height()>t&&(e(".betterdocs-toc .toc-list a").removeClass("active"),o.addClass("active"))}))}stickyTocContainer(){var e=jQuery;let t=this;var o=e("#betterdocs-sidebar");if(e(".betterdocs-toc").length>0&&o.length){var s=e(".betterdocs-toc").clone();e(".sticky-toc-container").append(s)}e(window).on("scroll",(function(){var t=document.querySelector(".betterdocs-sidebar-content");if(null!==t){var s=e(".sticky-toc-container"),r=e(".betterdocs-sidebar-content").outerHeight(),c=t.getBoundingClientRect(),i=Math.abs(c?.top);c?.top<0&&r<=i?s.addClass("toc-sticky"):s.removeClass("toc-sticky"),o.closest(".elementor-widget-wrap")?.length>0?e(window).scrollTop()>=o.closest(".elementor-widget-wrap").offset()?.top+o.closest(".elementor-widget-wrap").outerHeight()-window.innerHeight&&!o.hasClass("betterdocs-el-single-sidebar")&&(console.log("remove"),s?.removeClass("toc-sticky")):o.closest(".wp-block-column")?.length>0?e(window).scrollTop()>=o.closest(".wp-block-column").offset()?.top+o.closest(".wp-block-column").outerHeight()-window.innerHeight&&!o.hasClass("betterdocs-el-single-sidebar")&&(console.log("remove"),s?.removeClass("toc-sticky")):e(window).scrollTop()>=o.offset()?.top+o.outerHeight()-window.innerHeight&&!o.hasClass("betterdocs-el-single-sidebar")&&s?.removeClass("toc-sticky")}})),e(document).on("scroll",t?.onScroll);var r=e(".betterdocs-toc .toc-list a");r.on("click",(function(o){o.preventDefault(),e(document).off("scroll"),r.each((function(){e(this).removeClass("active")})),e(this).addClass("active");var s=this.hash,c=e(s),i=c.offset()?.top;e("html, body").stop().animate({scrollTop:i-betterdocsConfig?.sticky_toc_offset},"slow",(function(){e(document).on("scroll",t?.onScroll)}))}))}tocClose(){var e=jQuery;e(".close-toc").on("click",(function(t){t.preventDefault(),e(".sticky-toc-container").remove(".sticky-toc-container")}))}delay(e,t){setTimeout(e,t)}printToc(){var e=jQuery;e("body").on("click",".betterdocs-print-btn",(function(t){let o="";e("#betterdocs-entry-title").length&&(o=document.getElementById("betterdocs-entry-title").innerHTML);var s=document.getElementById("betterdocs-single-content").innerHTML,r=document.createElement("div");r.innerHTML="<h1>"+o+"</h1> "+s,r.id="new-doc-print";var c=document.getElementById("betterdocs-single-content").offsetWidth,i=e(window).height(),a=window.open("","","left=50%,top=10%,width="+c+",height="+i+",toolbar=0,scrollbars=0,status=0");a.document.write(r.outerHTML),a.document.close(),a.focus(),a.print(),a.close()}))}cloneTocContentToAfter(){let e=jQuery,t=e(".betterdocs-single-layout-3 #betterdocs-sidebar-right .betterdocs-toc .toc-list a");e.each(t,(function(t,o){e(this).addClass(`toc-item-link-${t+1}`),e(`<style>.toc-item-link-${t+1}:after {height: ${o.offsetHeight+10}px}</style>`).appendTo("head")}))}copyToClipboard(){let e=jQuery;e(".batterdocs-anchor").length&&(e(".batterdocs-anchor").hover((function(){var t=e(this).attr("data-title");e("<div/>",{text:t,class:"tooltip-box"}).appendTo(this)}),(function(){})).on("click",(function(t){t.preventDefault(),new ClipboardJS(".batterdocs-anchor").on("success",(function(t){e(document).find("div.tooltip-box").text(betterdocsConfig.copy_text),t.clearSelection(),e(t.trigger).addClass("copied"),setTimeout((function(){e(t.trigger).removeClass("copied")}),2e3)}))})),function(){if("undefined"!=typeof self&&self.Prism&&self.document)if(Prism.plugins.toolbar){var e=window.ClipboardJS||void 0;e||(e=o(2104));var t=[];if(!e){var s=document.createElement("script"),r=document.querySelector("head");s.onload=function(){if(e=window.ClipboardJS)for(;t.length;)t.pop()()},s.src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js",r.appendChild(s)}Prism.plugins.toolbar.registerButton("copy-to-clipboard",(function(o){var s=document.createElement("button");return s.textContent="Copy",e?r():t.push(r),s;function r(){var t=new e(s,{text:function(){return o.code}});t.on("success",(function(){s.textContent="Copied!",c()})),t.on("error",(function(){s.textContent="Press Ctrl+C to copy",c()}))}function c(){setTimeout((function(){s.textContent="Copy"}),5e3)}}))}else console.warn("Copy to Clipboard plugin loaded before Toolbar plugin.")}())}feedbackForm(){var e=jQuery,t=this;let o=e("#betterdocs-form-modal"),s=e("#betterdocs-form-modal .modal-content");this.formLink.click((function(e){e.preventDefault(),o.fadeIn(500)})),e(document).mouseup((function(e){s.is(e.target)||0!==s.has(e.target).length||o.fadeOut()})),e(".betterdocs-modalwindow .close").click((function(e){e.preventDefault(),o.fadeOut(500)})),this.feedbackFormFields.on("keyup",(function(){e(this).removeClass("val-error"),e(this).siblings(".error-message").remove()})),this.feedbackFormWrap.on("submit",(function(o){o.preventDefault();var s=e(this),r=e("#message_name"),c=e("#message_email"),i=e("#message_subject"),a=e("#message_text");t.betterdocsFeedbackFormSubmit(s,r,c,i,a)})),this.betterdocsFeedbackFormSubmit=function(o,s,r,c,i){let a;a&&a.abort(),a=e.ajax({url:betterdocsSubmitFormConfig.ajax_url,type:"post",data:{action:"betterdocs_feedback_form_submit",form:o.serializeArray(),postID:betterdocsSubmitFormConfig.post_id,message_name:s.val(),message_email:r.val(),message_subject:c.val(),message_text:i.val(),security:betterdocsSubmitFormConfig.nonce},beforeSend:function(){},success:function(c){c.success?1==c.success?(e(".response").html('<span class="success-message">'+c.data.message+"</span>"),o[0].reset(),t.delay((function(){e(".betterdocs-modalwindow").fadeOut(500),e(".response .success-message").remove()}),3e3)):e(".response").html('<span class="error-message">'+c.sentMessage+"</span>"):0==c.success&&(c.data.message.name&&0==s.hasClass("val-error")&&(s.addClass("val-error"),e(".form-name").append('<span class="error-message">'+c.data.message.name+"</span>")),c.data.message.email&&0==r.hasClass("val-error")&&(r.addClass("val-error"),e(".form-email").append('<span class="error-message">'+c.data.message.email+"</span>")),c.data.message.message&&0==i.hasClass("val-error")&&(i.addClass("val-error"),e(".form-message").append('<span class="error-message">'+c.data.message.message+"</span>")))}})}}subCategoryExpand(){var e=jQuery;let t=e(".betterdocs-nested-category-list.betterdocs-current-category.active");t.length>0&&t.each((function(t){e(this).prev().children(".toggle-arrow").toggle()}))}}!function(t){"use strict";new e(window?.betterdocsConfig)}(jQuery)})()})();