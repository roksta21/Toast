@if(Session::has('toast'))
    <?php $toast = Session::pull('toast'); ?>
    <script type="text/javascript">
        toastr.{{ $toast['type'] }}(
            "{{ $toast['message']}}",
            "{{ $toast['title']}}",
            {
                @if (isset($toast['options']))
                    @foreach($toast['options'] as $option => $value)
                        @if (is_string($value))
                            {{ $option }} : '{!! $value !!}',
                        @else 
                            {{ $option }} : {!! $value !!},
                        @endif
                    @endforeach
                @endif

                closeButton: true
            }
        );
    </script>
@endif

