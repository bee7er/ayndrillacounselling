<?php use App\Http\Helpers\TemplateHelper; ?>

@extends('layouts.app')
@section('title') home @parent @endsection

@section('content')

    <div id="home">&nbsp;</div>

    <div class="murmuration-container">
        <div class="row">
            <img class="" src="/img/murmuration_02.jpg" width="100%" alt="">
        </div>
    </div>

    <div id="top">&nbsp;</div>

    <div class="ayndrilla-container">
        <div class="row-container">
            <div class="row">
                <table class="ayndrilla-text" border="0">
                    <tbody><tr style="vertical-align: top;">
                        {{--<td class="ayndrilla-side-title"><span onclick="gotoPage('home');">Ayndrilla Counselling</span></td>--}}
                        <td class="ayndrilla-menu">

                            @include('partials.menu')

                        </td>
                    </tr>
                    </tbody></table>
            </div>
        </div>

        <div class="row-container">
            <div class="row">
                <table class="ayndrilla-text" border="0">
                    <tbody><tr style="vertical-align: top;">
                        <td class="ayndrilla-side-title"><img class="ayndrilla-image" src="/img/ayndrilla-singharay.png" alt=""></td>
                        <td class="ayndrilla-spacer">&nbsp;</td>
                        <td class="ayndrilla-content">I’m Ayndrilla (An-drill-ah, she/her), a humanistic counsellor and a member of the BACP offering sessions in central Brighton.  I can offer you the time and space to explore whatever is happening for you right now.</td>
                    </tr>
                    </tbody></table>
            </div>
        </div>

        @if(isset($aboutText))
            <div id="about">&nbsp;</div>

        <div class="row-container">
            <div class="row">
                <table class="ayndrilla-text" border="0">
                    <tbody><tr style="vertical-align: top;">
                        <td class="ayndrilla-side-title">About me</td>
                        <td class="ayndrilla-spacer">&nbsp;</td>
                        <td class="ayndrilla-content">
                            {!! $aboutText !!}
                        </td>
                    </tr>
                    </tbody></table>
            </div>
        </div>
        @endif

        @if(isset($humanistText))
            <div id="humanistic">&nbsp;</div>

        <div class="row-container">
            <div class="row">
                <table class="ayndrilla-text" border="0">
                    <tbody><tr style="vertical-align: top;">
                        <td class="ayndrilla-side-title">A Humanist Approach</td>
                        <td class="ayndrilla-spacer">&nbsp;</td>
                        <td class="ayndrilla-content">
                            {!! $humanistText !!}
                        </td>
                    </tr>
                    </tbody></table>
            </div>
        </div>
        @endif

        @if(isset($sessionsText))
            <div id="sessions">&nbsp;</div>

        <div class="row-container">
            <div class="row">
                <table class="ayndrilla-text" border="0">
                    <tbody><tr style="vertical-align: top;">
                        <td class="ayndrilla-side-title">Sessions and Fees</td>
                        <td class="ayndrilla-spacer">&nbsp;</td>
                        <td class="ayndrilla-content">
                            {!! $sessionsText !!}
                        </td>
                    </tr>
                    </tbody></table>
            </div>
        </div>
        @endif

        @if(count($news)>0)
            <div id="news">&nbsp;</div>

            <div class="row-container">
                <div class="row">
                    <table class="ayndrilla-text" border="0">
                        <tbody>

                        @foreach($news as $newsItem)
                            <tr style="vertical-align: top;">
                                <td class="ayndrilla-side-title">{!! $newsSectionText !!}</td>
                                <td class="ayndrilla-spacer">&nbsp;</td>
                                <td class="ayndrilla-content">
                                    @if($newsItem->url)
                                        <a href="{!! url($newsItem->url) !!}" class="">{!! $newsItem->notice !!}</a>
                                    @else
                                        {!! $newsItem->notice !!}
                                    @endif
                                </td>
                            </tr>

                            <?php $newsSectionText = '&nbsp;'; ?>

                        @endforeach

                        </tbody></table>
                </div>
            </div>
        @endif

        @if(isset($contactText))
            <div id="contact">&nbsp;</div>

            <div class="row-container">
                <div class="row">
                    <table class="ayndrilla-text" border="0">
                        <tbody><tr style="vertical-align: top;">
                            <td class="ayndrilla-side-title">Contact</td>
                            <td class="ayndrilla-spacer">&nbsp;</td>
                            <td class="ayndrilla-content">
                                {!! $contactText !!}
                            </td>
                        </tr>
                        </tbody></table>
                </div>
            </div>
        @endif

    </div>

    <a class="back-to-top-button" href="#" style="display: inline;" onmouseover="$(this).removeClass('btt-out').addClass('btt-over');"
       onmouseout="$(this).removeClass('btt-over').addClass('btt-out')"><i class="fa fa-arrow-circle-up"></i></a>

@endsection

@section('page-scripts')
    <script type="text/javascript">
        $(document).ready( function()
        {

        });
    </script>
@endsection
