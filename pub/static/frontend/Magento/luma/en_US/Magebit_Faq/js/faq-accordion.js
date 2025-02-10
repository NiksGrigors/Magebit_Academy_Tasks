define([
    'jquery',
    'mage/accordion'
], function ($) {
    $("#faq-container").accordion({
        active: false,
        collapsible: true,
        header: ".faq-title",
        heightStyle: "content"
    });
});
