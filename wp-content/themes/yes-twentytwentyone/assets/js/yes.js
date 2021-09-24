/* 
    JavaScript Name : Yes TwentyTwentyOne 
    Created on      : September 09, 2021, 03:04:23 PM
    Last edited on  : September 24, 2021, 03:52:31 PM
    Author          : [YTL Digital Design] - AL
*/
const yesLocalStorageName = 'yesSession';
const yesLocalStorage   = JSON.parse(localStorage.getItem(yesLocalStorageName));

const expiryTopPageBanner = 1; // in minute
const expiryPageModal = 30; // in minute

const pageLoadTimestamp = Date.now();

$(document).ready(function() {
    checkTopPageBannerExpiry();
    checkPageModalExpiry();

    eventListenPageModalClose();
});


/**
 * Function closeTopPageBanner()
 * Function to close the top page banner
 * 
 * @since    1.0.0
 */
function closeTopPageBanner() {
    $('.top-pink-bar').slideUp('fast');

    var expiryLength = expiryTopPageBanner * 60000;
    var topPageBannerExpiry = Date.now() + expiryLength;
    var getYesLocalStorage = yesLocalStorage;

    if (getYesLocalStorage === null) {
        getYesLocalStorage = { 'topPageBannerClose': topPageBannerExpiry };
    } else {
        getYesLocalStorage.topPageBannerClose = topPageBannerExpiry;
    }
    localStorage.setItem(yesLocalStorageName, JSON.stringify(getYesLocalStorage));
}


/**
 * Function checkTopPageBannerExpiry()
 * Function to check the expiry of closed top page banner and show if expired
 * 
 * @since    1.0.0
 */
function checkTopPageBannerExpiry() {
    var topPageBanner = $('.top-pink-bar');
    if ($(topPageBanner).length) {
        if (yesLocalStorage !== null && typeof yesLocalStorage.topPageBannerClose !== 'undefined') {
            if (pageLoadTimestamp > yesLocalStorage.topPageBannerClose) {
                $(topPageBanner).show();
            }
        } else {
            $(topPageBanner).show();
        }
    }
}


/**
 * Function eventListenPageModalClose()
 * Function add event listener to page modal on close
 * 
 * @since    1.0.0
 */
function eventListenPageModalClose() {
    var pageModal = $('#page-modal');
    if ($(pageModal).length) {
        $(pageModal).on('hide.bs.modal', function() {
            var expiryLength = expiryPageModal * 60000;
            var pageModalExpiry = Date.now() + expiryLength;
            var getYesLocalStorage = yesLocalStorage;

            if (getYesLocalStorage === null) {
                getYesLocalStorage = { 'pageModalClose': pageModalExpiry };
            } else {
                getYesLocalStorage.pageModalClose = pageModalExpiry;
            }
            localStorage.setItem(yesLocalStorageName, JSON.stringify(getYesLocalStorage));
        });
    }
}


/**
 * Function checkPageModalExpiry()
 * Function to check the expiry of closed page modal and show if expired
 * 
 * @since    1.0.0
 */
function checkPageModalExpiry() {
    var pageModal = $('#page-modal');

    if ($(pageModal).length) {
        if (yesLocalStorage !== null && typeof yesLocalStorage.pageModalClose !== 'undefined') {
            if (pageLoadTimestamp > yesLocalStorage.pageModalClose) {
                $(pageModal).modal('show');
            }
        } else {
            $(pageModal).modal('show');
        }
    }
}