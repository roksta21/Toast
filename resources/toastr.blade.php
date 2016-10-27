@if(Session::has('toast'))
    <?php $toast = Session::pull('toast'); ?>
    <script type="text/javascript">
        toastr.{{ $toast['type'] }}(
            "{{ $toast['message']}}",
            "{{ $toast['title']}}",
            {
                @foreach($toast['options'] as $option => $value)
                    @if (is_string($value))
                        {{ $option }} : '{!! $value !!}',
                    @else 
                        {{ $option }} : {!! $value !!},
                    @endif
                @endforeach

                closeButton: true
            }
        );
    </script>
@endif

