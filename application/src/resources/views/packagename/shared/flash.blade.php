{{-- Package session flash messages --}}
@if(Session::has('packagename_session_flash'))
<div id="session_flash" class="alert alert-{{ Session::get('packagename_session_flash_class') }}" role="alert">
    {{ Session::get('packagename_session_flash') }}
</div>
@endif