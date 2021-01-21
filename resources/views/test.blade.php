{{--@extends('layout')--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.3/js.cookie.min.js"></script>
<style>
    p {
        text-align: center;
    }
</style>
<button id="showHideContent" class="night">Toggle</button>
<div id="content">
    <p>Green = no cookie</p>
    <p>Red = dark mode is active</p>
    <p>Blue = light mode is active</p>
</div>
<script>

    if(Cookies.get("_hidemode") === "Enabled"){
        $("#content").hide("slow");
        $("#content").addClass('hide_comments');
        console.log("Cookie hide_comments is set on load");
    } else if(Cookies.get("_showmode") === "Enabled"){
        $("#content").show("slow");
        $("#content").addClass('show_comments');
        console.log("Cookie show_comments is set on load");
    } else {
        Cookies.set('_showmode', 'Enabled');
        $("#content").addClass('show_comments');
    }

    $(document).ready(function(){
        $("#showHideContent").click(function () {
            if ($("#content").hasClass("show_comments")) {
                $("#content").hide("slow");
                $('#content').removeClass('show_comments').addClass('hide_comments');
                console.log('before remove')
                Cookies.remove('_showmode');
                Cookies.set('_hidemode', 'Enabled');
            } else if ($("#content").hasClass("hide_comments")) {
                $("#content").show("slow");
                $('#content').removeClass('hide_comments').addClass('show_comments');
                Cookies.remove('_hidemode');
                Cookies.set('_showmode', 'Enabled');
            } else {

            }
            return false;
        });
    });
    // On initial page load, there is not yet a cookie
    // When the user clicks the button for the fist time, do this:


    // On initial page load, there is not yet a cookie
    // When the user clicks the button for the fist time, do this:

</script>

{{--<div class="container bootdey">--}}
{{--    <div class="col-md-12 bootstrap snippets">--}}
{{--        <div class="panel">--}}
{{--            <div class="panel-body">--}}
{{--                <textarea class="form-control" rows="2" placeholder="What are you thinking?"></textarea>--}}
{{--                <div class="mar-top clearfix">--}}
{{--                    <button class="btn btn-sm btn-primary pull-right" type="submit"><i class="fa fa-pencil fa-fw"></i> Share</button>--}}
{{--                    <a class="btn btn-trans btn-icon fa fa-video-camera add-tooltip" href="#"></a>--}}
{{--                    <a class="btn btn-trans btn-icon fa fa-camera add-tooltip" href="#"></a>--}}
{{--                    <a class="btn btn-trans btn-icon fa fa-file add-tooltip" href="#"></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="panel">--}}
{{--            <div class="panel-body">--}}
{{--                <!-- Newsfeed Content -->--}}
{{--                <!--===================================================-->--}}
{{--                <div class="media-block">--}}
{{--                    <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="#"></a>--}}
{{--                    <div class="media-body">--}}
{{--                        <div class="mar-btm">--}}
{{--                            <a href="#" class="btn-link text-semibold media-heading box-inline">Lisa D.</a>--}}
{{--                            <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile - 11 min ago</p>--}}
{{--                        </div>--}}
{{--                        <p>consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>--}}
{{--                        <div class="pad-ver">--}}
{{--                            <div class="btn-group">--}}
{{--                                <a class="btn btn-sm btn-default btn-hover-success" href="#"><i class="fa fa-thumbs-up"></i></a>--}}
{{--                                <a class="btn btn-sm btn-default btn-hover-danger" href="#"><i class="fa fa-thumbs-down"></i></a>--}}
{{--                            </div>--}}
{{--                            <a class="btn btn-sm btn-default btn-hover-primary" href="#">Comment</a>--}}
{{--                        </div>--}}
{{--                        <hr>--}}

{{--                        <!-- Comments -->--}}
{{--                        <div>--}}
{{--                            <div class="media-block">--}}
{{--                                <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="#"></a>--}}
{{--                                <div class="media-body">--}}
{{--                                    <div class="mar-btm">--}}
{{--                                        <a href="#" class="btn-link text-semibold media-heading box-inline">Bobby Marz</a>--}}
{{--                                        <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile - 7 min ago</p>--}}
{{--                                    </div>--}}
{{--                                    <p>Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>--}}
{{--                                    <div class="pad-ver">--}}
{{--                                        <div class="btn-group">--}}
{{--                                            <a class="btn btn-sm btn-default btn-hover-success active" href="#"><i class="fa fa-thumbs-up"></i> You Like it</a>--}}
{{--                                            <a class="btn btn-sm btn-default btn-hover-danger" href="#"><i class="fa fa-thumbs-down"></i></a>--}}
{{--                                        </div>--}}
{{--                                        <a class="btn btn-sm btn-default btn-hover-primary" href="#">Comment</a>--}}
{{--                                    </div>--}}
{{--                                    <hr>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--===================================================-->--}}
{{--                <!-- End Newsfeed Content -->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
