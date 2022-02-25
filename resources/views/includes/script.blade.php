<script src="{{ url('https://code.jquery.com/jquery-3.6.0.min.js')}}"></script>

<!-- javascript -->
<script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/assets/js/smooth-scroll.polyfills.min.js') }}"></script>
<script src="{{ asset('/assets/js/gumshoe.polyfills.min.js') }}"></script>
<!-- unicons icon -->
<script src="{{ asset('/assets/js/unicons.js') }}"></script>
<!-- Contact Form  -->
<script src="{{ asset('/assets/js/app.js') }}"></script>


<script>
    $(document).ready(function () {
        $('#getResume').on('click', function() {
            window.open('/storage/resume.pdf', '_blank')
        })
    })
</script>

