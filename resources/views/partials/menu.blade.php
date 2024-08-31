
<div class="top-menu"><a class="menu-option" href="javascript: gotoPage('about');">About me</a><a class="menu-option" href="javascript: gotoPage('humanistic');">A Humanistic Approach</a><a class="menu-option" href="javascript: gotoPage('sessions');">Sessions and Fees</a><a class="" href="gotoPage('contact');">Contact</a></div>

@section('global-scripts')
    <script type="text/javascript">
        function gotoPage(aid)
        {
            @if (Request::is('/') || Request::is('home'))
                scrollToAnchor(aid);
            @else
            if (aid == "home") {
                document.location = ("{{config('app.base_url')}}");
            } else {
                document.location = ("{{config('app.base_url')}}" + "home#" + aid);
            }
            @endif
        }

        function scrollToAnchor(aid)
        {
            var aTag = $("div[id='"+ aid +"']");
            $('html,body').animate({scrollTop: aTag.offset().top},'slow');
        }

        $(document).ready( function()
        {
            // On page load and on resize we check some aspects of the page to ensure responsiveness is correct
            addEvent(window, "resize", handleResizeEvent);
            // Calculate the apsect ratio now, so that it is correct on page load
            calcAspectRatio();
            // Also ensure that the About text panel is at least as high as the image panel
            calcAboutTextPanelHeight();

        });

    </script>
@endsection
