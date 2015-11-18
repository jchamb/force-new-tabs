(function($){
    $(function(){

        var siteUrlBase = FNT.siteurl.replace(/^https?:\/\/((w){3})?/,'')

        $('a[href*="//"]:not([href*="'+siteUrlBase+'"])')
            .not('.ignore-external') // ignore class for excluding
            .addClass('external')
            .attr('target', '_blank');

    });
})(jQuery);
