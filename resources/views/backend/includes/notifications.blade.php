<script>
    @if(Session::has('success'))
    $.toast({
        text: '<i class="jq-toast-icon zmdi zmdi-check-circle"></i><p>{{ Session::get('success') }}</p>',
        position: 'top-right',
        loaderBg:'#00acf0',
        class: 'jq-has-icon jq-toast-success',
        hideAfter: 3500,
        stack: 6,
        showHideTransition: 'fade'
    });
    @endif

    @if(Session::has('info'))
    $.toast({
        text: '<i class="jq-toast-icon ti-twitter-alt"></i><p>{{ Session::get('info') }}</p>',
        position: 'top-right',
        loaderBg:'#00acf0',
        class: 'jq-has-icon jq-toast-info',
        hideAfter: 3500,
        stack: 6,
        showHideTransition: 'fade'
    });
    @endif

    @if ($errors->any())
    @foreach ($errors->all() as $error)
    $.toast({
        heading: 'Error!',
        text: '<p>{{ $error }}</p>',
        position: 'top-left',
        loaderBg:'#00acf0',
        class: 'jq-toast-danger',
        hideAfter: 3500,
        stack: 6,
        showHideTransition: 'fade'
    });
    @endforeach
    @endif
</script>
