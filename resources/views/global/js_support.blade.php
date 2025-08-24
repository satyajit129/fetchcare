<script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('js/chart.js') }}"></script>

<script>
    $(function() {
        $(document).on('click', '.side-menu__item', function(e) {
            const href = $(this).attr('href');
            if (href && href !== '#' && this.target !== '_blank' && !e.ctrlKey && !e.metaKey) {
                $('#preloader').addClass('is-visible');
            }
        });
        $(window).on('beforeunload', function() {
            $('#preloader').addClass('is-visible');
        });
        $(window).on('load', function() {
            $('#preloader').removeClass('is-visible');
        });
    });
</script>

<script>
    $('#toggleSidebar').on('click', function() {
        $('#sidebar').toggleClass('collapsed');
    });
</script>
