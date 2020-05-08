
window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');
    window.$ = window.jQuery = require('jquery');
    window.toastr = require('toastr');
    window.noUiSlider - require('nouislider/distribute/nouislider');
    window.select2 = require('select2');
    // require('owl.caurosel');

    require('admin-lte');
    require('revslider');
    require('bootstrap');
    require('@fancyapps/fancybox');
    require( 'datatables.net-bs4');
    require('bootstrap');
    require('loadingio-bar');
} catch (e) {}
