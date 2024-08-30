
<div id="top">&nbsp;</div>

<div class="row logo-menu-container">
    <div class="hidden-xs hidden-sm col-md-12 col-lg-12 header-block">
        <div class="header-menu-left"><span onclick="gotoPage
        ('home');">Ayndrilla Counselling</span></div>
        <div class="header-menu-right top-menu"><span class="menu-option" onclick="gotoPage('about');"
                                                                           onmouseover="$(this).addClass('white-link-hover');"
                                                                           onmouseout="$(this).removeClass('white-link-hover')">About me</span><span class="menu-option" onclick="gotoPage('humanistic');" onmouseover="$(this).addClass('white-link-hover')" onmouseout="$(this).removeClass('white-link-hover')">A Humanistic Approach</span><span class="menu-option" onclick="gotoPage('sessions');" onmouseover="$(this).addClass('white-link-hover')" onmouseout="$(this).removeClass('white-link-hover')">Sessions and Fees</span><span class="" onclick="gotoPage('contact');" onmouseover="$(this).addClass('white-link-hover')" onmouseout="$(this).removeClass('white-link-hover')">Contact</span></div>
    </div>
    <div class="hidden-xs col-sm-12 hidden-md hidden-lg header-block">
        <span class="menu-option" onclick="gotoPage('about');" onmouseover="$(this).addClass('white-link-hover');"
              onmouseout="$(this).removeClass('white-link-hover')">About me</span>
        <span class="menu-option" onclick="gotoPage('humanistic');" onmouseover="$(this).addClass('white-link-hover')"
              onmouseout="$(this).removeClass('white-link-hover')">A Humanistic Approach</span>
        <span class="menu-option" onclick="gotoPage('sessions');" onmouseover="$(this).addClass('white-link-hover')"
              onmouseout="$(this).removeClass('white-link-hover')">Sessions and Fees</span>
        <span class="menu-option" onclick="gotoPage('news');" onmouseover="$(this).addClass('white-link-hover')"
              onmouseout="$(this).removeClass('white-link-hover')">News</span>
        <span class="menu-option" onclick="gotoPage('contact');" onmouseover="$(this).addClass('white-link-hover')"
              onmouseout="$(this).removeClass('white-link-hover')">Contact</span>
    </div>
    <div class="col-xs-12 hidden-sm hidden-md hidden-lg header-block">
        <table class="logo-menu-table">
            <tbody>
            <tr>
                <td class="logo-menu-table-right">
                    <span class="white-link" onclick="gotoPage('about');" onmouseover="$(this).addClass('white-link-hover')"
                          onmouseout="$(this).removeClass('white-link-hover')
                                                    ">About me</span>
                </td>
                <td class="square-vertical logo-menu-table-center">&nbsp;</td>
                <td class="logo-menu-table-left">
                    &nbsp;
                </td>
            </tr>
            <tr>
                <td class="logo-menu-table-right">
                    <span class="white-link" onclick="gotoPage('humanistic');" onmouseover="$(this).addClass('white-link-hover')"
                          onmouseout="$(this).removeClass('white-link-hover')
                                                    ">A Humanistic Approach</span>
                </td>
                <td class="square-vertical logo-menu-table-center">&nbsp;</td>
                <td class="logo-menu-table-left">
                    &nbsp;
                </td>
            </tr>
            <tr>
                <td class="logo-menu-table-right">
                    <span class="white-link" onclick="gotoPage('sessions');" onmouseover="$(this).addClass
                    ('white-link-hover')"
                          onmouseout="$(this).removeClass('white-link-hover')">Sessions and Fees</span>
                </td>
                <td class="square-vertical logo-menu-table-center">&nbsp;</td>
                <td class="logo-menu-table-left">
                    &nbsp;
                </td>
            </tr>
            <tr>
                <td class="logo-menu-table-right">
                    <span class="white-link" onclick="gotoPage('news');" onmouseover="$(this).addClass
                    ('white-link-hover')"
                          onmouseout="$(this).removeClass('white-link-hover')">News</span>
                </td>
                <td class="square-vertical logo-menu-table-center">&nbsp;</td>
                <td class="logo-menu-table-left">
                    &nbsp;
                </td>
            </tr>
            <tr>
                <td class="logo-menu-table-right">
                    <span class="white-link" onclick="gotoPage('contact');" onmouseover="$(this).addClass('white-link-hover')"
                          onmouseout="$(this).removeClass('white-link-hover')
                                                    ">Contact</span>
                </td>
                <td class="square-vertical logo-menu-table-center">&nbsp;</td>
                <td class="logo-menu-table-left">
                    &nbsp;
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

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
