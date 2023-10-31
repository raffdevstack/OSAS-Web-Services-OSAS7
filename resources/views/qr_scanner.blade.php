@include('partials.__header')

@include('partials.__sidebar')

{{-- right side header --}}
<div class="flex flex-row items-center px-4 py-2 mx-4 my-2 gap-2 flex justify-end ">
    <a href="{{ route('qr_scanner') }}">
        <button type="button"
            class="text-gray-900 flex items-center bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm p-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
            <span class="material-symbols-outlined">
                qr_code_scanner
            </span>
        </button>
    </a>
    @include('partials.__admin_profile')
</div>

{{-- right side section --}}
<div class="md:ml-60">

    {{-- script file for the scanner --}}
    <script src="{{ asset('js/scanner.js') }}"></script>

    {{-- main content --}}
    <div class="p-4 m-4 shadow-lg bg-white border-gray-200 rounded-lg dark:border-gray-700"
        style="min-height: 90vh">

        <div class="bg-blue-500 border p-6 max-h-96">
            <div id="reader" class="max-h-96">

            </div>
        </div>
        <div id="result">Result here</div>
    </div>

    {{-- processing script --}}
    <script type="text/javascript">
        // after success to play camera Webcam Ajax paly to send data to Controller
        function onScanSuccess(data) {
            $.ajax({
                type: "POST",
                cache: false,
                url: "{{ route('qr_value') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    data: data
                },
                success: function(data) {
                    // after success to get Answer from controller if User Registered login user by scanner
                    // and page change to Home blade
                    return confirm('There is no user with this qr code');
                    dd(data);
                }
            })
        }
        var html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", {
                fps: 10,
                qrbox: 250,
        
            });
        html5QrcodeScanner.render(onScanSuccess);
        // html5QrcodeScanner.clear(onScanSuccess);
    </script>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</div>



@include('partials.__footer')
