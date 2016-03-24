<!-- jQuery -->
<script src="{{ asset('/vendor/packagename/js/jquery.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('/vendor/packagename/js/bootstrap.min.js') }}"></script>

<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
<!--Custom js-->
<script src="{{ asset('/vendor/guiurpm/js/packagename-scripts.js') }}"></script>