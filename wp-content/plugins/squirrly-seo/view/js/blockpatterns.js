(function ($) {
    $.fn.sq_blocksettings = function () {
        var $this = this;

        if (!$.sq_getHash()) {
            $.sq_setHash('patterns');
        }

        $this.find('#sq_post_types').on('change', function () {
            $this.find('.show_hide').hide();
            $this.find('.show_hide.sq' + $(this).val()).show();
        });
        $this.find('.show_hide.sqhome').show();

        $this.find('#sq_auto_pattern.deactivated').on('click', function () {
            $this.find('#sq_auto_pattern').removeClass('deactivated');
            $this.find('input#sq_auto_pattern_on').attr('checked', true);
        });

    };

    if ($('#sq_settings').length > 0) {
        $('#sq_settings').sq_blocksettings();
    } else {
        $(document).ready(function () {
            $('#sq_settings').sq_blocksettings();
        });
    }
})(jQuery);