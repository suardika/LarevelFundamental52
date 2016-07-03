{{--@if(Session::has('flash_message'))--}}
{{--<div class="alert alert-success">--}}
{{--<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>--}}
{{--{{ Session::get('flash_message') }}--}}
{{--</div>--}}
{{--@endif--}}

{{--@if(Session::has('flash_message'))--}}

{{--<div class="alert alert-success {{ Session::has('flash_message_important' ? 'alert-important' : '') }}">--}}
{{--@if(Session::has('flash_message_important'))--}}
{{--<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>--}}
{{--@endif--}}

{{--{{ Session('flash_message') }}--}}

{{--</div>--}}

{{--@endif--}}

@if(Session::has('flash_message'))
    <div class="alert alert-success {{ Session::has('flash_message_important') ? 'alert-important' : ' ' }}">
        @if(Session::get('flash_message_important'))
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        @endif
        {{ Session('flash_message') }}
    </div>
@endif