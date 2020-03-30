{{-- Display success messages --}}
@if(session()->has('success'))
    @section('js')
        @parent
        <script>
            $(document).ready(function () {
                toastr.options.timeOut = {{ session()->get('toast.timeout', 10000) }};
                toastr.options.extendedTimeOut = 0;
                toastr.options.closeButton = true;
                toastr.success('@component('components.alerts.toastr', [
                    'message' => session()->get('success'),
                    'action' => [
                        'url' => session()->get('toast.action.url'),
                        'name' => session()->get('toast.action.name')
                    ]
                ]) @endcomponent', '')
            })
        </script>
    @endsection
@endif

{{-- Display error messages --}}
@if(session()->has('error'))
    @section('js')
        @parent
        <script>
            $(document).ready(function () {
                toastr.options.timeOut = {{ session('toast.timeout', 10000) }};
                toastr.options.extendedTimeOut = 0;
                toastr.options.closeButton = true;
                toastr.error('@component('components.alerts.toastr', [
                    'message' => session('error'),
                    'action' => [
                        'url' => session('toast.action.url'),
                        'name' => session('toast.action.name')
                    ]
                ]) @endcomponent', '')
            })
        </script>
    @endsection
@endif


{{-- Display info messages --}}
@if(session()->has('info'))
    @section('js')
        @parent
        <script>
            $(document).ready(function () {
                toastr.options.timeOut = {{ session('toast.timeout', 10000) }};
                toastr.options.extendedTimeOut = 0;
                toastr.options.closeButton = true;
                toastr.info('@component('components.alerts.toastr', [
                        'message' => session('info'),
                        'action' => [
                            'url' => session('toast.action.url'),
                            'name' => session('toast.action.name')
                        ]
                    ]) @endcomponent', '')
            })
        </script>
    @endsection
@endif


{{-- Display verification link resend message --}}
@if (session('resent'))
    @section('js')
        @parent
        <script>
            $(document).ready(function () {
                toastr.options.timeOut = {{ session('toast.timeout', 10000) }};
                toastr.options.extendedTimeOut = 0;
                toastr.options.closeButton = true;
                toastr.success('@component('components.alerts.toastr', [
                    'message' => 'A fresh verification link has been sent to your email address.',
                    'action' => [
                        'url' => session('toast.action.url'),
                        'name' => session('toast.action.name')
                    ]
                ]) @endcomponent', 'Success')
            })
        </script>
    @endsection
@endif

{{-- Display verification link resend message --}}
@if (session('verified'))
    @section('js')
        @parent
        <script>
            $(document).ready(function () {
                toastr.options.timeOut = {{ session('toast.timeout', 10000) }};
                toastr.options.extendedTimeOut = 0;
                toastr.options.closeButton = true;
                toastr.success('@component('components.alerts.toastr', [
                    'message' => 'You have successfully verified your email address.',
                    'action' => [
                        'url' => session('toast.action.url'),
                        'name' => session('toast.action.name')
                    ]
                ]) @endcomponent', '')
            })
        </script>
    @endsection
@endif
