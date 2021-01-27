@foreach ($comments as $comment)
    <div id="content" class="container bootstrap snippets bootdey">
        <div class="row" style="margin-top:3rem; margin-right: -30px;
    margin-left: -28px;!important">
            <div class="col-md-12" data-aos="fade" data-aos-delay="200">
                <div class="blog-comment">

                    <ul class="comments">
                        <li class="clearfix">
                            @foreach ($users as $user)
                                @if ($comment->email_user === $user->email)
                                    @if ($user->avatar === 'users/default.png')
                                        <img src="https://eu.ui-avatars.com/api/?name={{ $user->name }}&background=a73737&color=050202&font-size=0.33&size=50"
                                            class="avatar" alt="avatar">
                                    @else
                                        <img src="{{ asset($user->avatar) }}"
                                            class="avatar img-fluid rounded-circle mr-1" width="40" alt="avatar">
                                    @endif
                                @endif
                            @endforeach
                            @auth
                                <div class="post-comments bg-dark">
                                    <p class="meta">{{ $comment->created_at }} <a class="textincomment">
                                            {{ $comment->name_user }} : {{ $comment->email_user }}</a> <i
                                            class="pull-right"></a></i></p>

                                    <p class="text-white">
                                        {{ $comment->message }}
                                    </p>
                                    @if ($comment->email_user === Auth::user()->email)
                                        <a class="textcomment" href="{{ route('edit_comments', [$post_id, $comment->id]) }}"
                                            role="button">Редактировать комментарий</a>
                                </div>
                                <div class="container">
                                    <button type="button" value="{{ $post_id }}" data-comment="{{ $comment->id }}"
                                        class="btn btn-edit-comments del_comment btn-primary">Удалить комментарий</button>
                                </div>
    @endif
@endauth
</li>
</ul>
</div>
</div>
</div>
</div>
@endforeach
{{-- <div id="content" class="row align-items-stretch program">
    <div class="col-12 border-top border-bottom py-5" data-aos="fade" data-aos-delay="200">
        <div class="row align-items-stretch">
            <div class="col-md-3 text-white mb-3 mb-md-0"><span class="h4">{{ $comment->name_user }}</span>
                <hr>
                @foreach ($users as $user)
                    @if ($comment->email_user === $user->email)
                        @if ($user->avatar === 'users/default.png')
                            <img src="https://eu.ui-avatars.com/api/?name={{ $user->name }}&background=a73737&color=050202&font-size=0.33&size=50"
                                class="avatar img-fluid rounded-circle mr-1" alt="avatar">
                            @else
                            <img src="{{ asset($user->avatar) }}" class="avatar img-fluid rounded-circle mr-1"
                                width="40" alt="avatar">
                        @endif
                    @endif
                @endforeach

                @if (strlen($comment->email_user) < 23)
                    <span class="h6">{{ $comment->email_user }}</span>
                    @else
                    <span style="font-size: 12px">{{ $comment->email_user }}</span>
                @endif
            </div>
            <div class="col-md-9">
                <p id="comment-message" class="text-white">{{ $comment->message }}</p><br>
                <span>{{ $comment->created_at }}</span>
            </div>

            <div id="repl_{{ $post_id }}">
            </div>
            @auth
            <div class="col-md-10" style="margin-left:17rem;">
                <button type="button" class="btn btn-primary btn-sm repl" value="{{ $comment->id }}"><i
                        class="fa fa-comments"></i>Ответить</button>
            </div>
            <div id="replField_{{ $comment->id }}" class="panel panel-default"
                style="padding:10px; margin-top:-20px; display:none;">
                <form id="replForm_{{ $comment->id }}">
                    <input type="hidden" value="{{ $comment->id }}" name="comment_id">
                    <div class="row form-group">
                        <div class="col-md-10">
                            <label class="" for="repltext">Ответить на комментарий</label>
                            <input type="text" name="relptext" id="repltext" data-comment="{{ $comment->id }}"
                                class="form-control repltext" placeholder="Write a Comment...">
                        </div>
                        <div class="col-md-2" style="margin-left:-25px;">
                            <button type="button" class="btn btn-primary submitRepl" value="{{ $comment->id }}"><i
                                    class="fa fa-comment"></i>Опубликовать</button>
                        </div>
                    </div>

                </form>
            </div>

            @if ($comment->email_user === Auth::user()->email)
                <a class="btn btn-edit-comments btn-lg btn-primary"
                    href="{{ route('edit_comments', [$post_id, $comment->id]) }}" role="button">Редактировать</a>
                <button type="button" value="{{ $post_id }}" data-comment="{{ $comment->id }}"
                    class="btn btn-edit-comments del_comment btn-lg btn-primary">Удалить</button>
            @endif
            @endauth
        </div>
    </div>
</div> --}}
