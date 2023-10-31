@include('partials.__header')

@include('partials.__sidebar')

{{-- right side header --}}
<div class="flex flex-row items-center px-4 py-2 mx-4 my-2 gap-2 flex justify-end ">
    <a href="{{ route('qr_scanner2') }}">
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
    {{-- <script type="text/javascript" src="{{ asset('js/instascan.min.js') }}"></script> --}}
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    
    {{-- main content --}}
    <div class="p-4 bg-red-300 m-4 shadow-lg bg-white border-gray-200 rounded-lg dark:border-gray-700"
        style="min-height: 90vh">

        <div class="w-full  border">
            <video class="w-full max-h-96" id="preview"></video>
        </div>
        <div>
            <input type="text" name="text" readonly id="text" placeholder="qr value">
        </div>
        
    </div>

    <script type="text/javascript">
        let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
    
        Instascan.Camera.getCameras()
            .then(function (cameras) {
                if (cameras.length > 0) {
                    scanner.start(cameras[0]);
                } else {
                    alert('No cameras found');
                }
            })
            .catch(function (e) {
                console.error(e);
            });
    
        scanner.addListener('scan', function (c) {
            document.getElementById('text').value = c;
        });
    </script>
    

</div>



@include('partials.__footer')
