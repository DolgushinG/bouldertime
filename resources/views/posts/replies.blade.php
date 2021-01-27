@foreach ($replies as $repl)
    <ul id="content" class="comments" data-aos="fade" data-aos-delay="200">
        <li class="clearfix">
            @foreach ($users as $user)
                        @if ($repl->email_user === $user->email)
                            @if ($user->avatar === 'users/default.png')
                                <img src="https://eu.ui-avatars.com/api/?name={{ $user->name }}&background=a73737&color=050202&font-size=0.33&size=50"
                                    class="avatar img-fluid rounded-circle mr-1" alt="avatar">
                            @else
                                <img src="{{ asset($user->avatar) }}" class="avatar img-fluid rounded-circle mr-1"
                                    width="40" alt="avatar">
                            @endif
                        @endif
                    @endforeach
            {{-- <img src="https://bootdey.com/img/Content/user_3.jpg" class="avatar" alt=""> --}}
            <div class="post-comments bg-dark">
                <p class="meta">{{ $repl->created_at }}<a href="#">{{ $repl->name_user }} : {{ $repl->email_user }}</a> комментарий : <i class="pull-right"><a
                            href="#"><small>ответить</small></a></i></p>
                <p class="text-white">
                    {{ $repl->repl }}
                </p>
            </div>
        </li>
    </ul>
    {{-- <div id="content" class="row align-items-stretch program" style="margin-top: 4rem;">
        <div class="col-12 border-top border-bottom py-5" data-aos="fade" data-aos-delay="200">
            <div class="row align-items-stretch">
                <div class="col-md-3 text-white mb-3 mb-md-0"><span class="h4">{{ $repl->name_user }}</span>
                    <hr>
                    @foreach ($users as $user)
                        @if ($repl->email_user === $user->email)
                            @if ($user->avatar === 'users/default.png')
                                <img src="https://eu.ui-avatars.com/api/?name={{ $user->name }}&background=a73737&color=050202&font-size=0.33&size=50"
                                    class="avatar img-fluid rounded-circle mr-1" alt="avatar">
                            @else
                                <img src="{{ asset($user->avatar) }}" class="avatar img-fluid rounded-circle mr-1"
                                    width="40" alt="avatar">
                            @endif
                        @endif
                    @endforeach

                    @if (strlen($repl->email_user) < 23)
                        <span class="h6">{{ $repl->email_user }}</span>
                    @else
                        <span style="font-size: 12px">{{ $repl->email_user }}</span>
                    @endif
                </div>
                <div class="col-md-9">
                    <p id="comment-message" class="text-white">{{ $repl->repl }}</p><br>
                    <span>{{ $repl->created_at }}</span>
                </div>
                @auth
                    @if ($repl->email_user === Auth::user()->email)
                        {{-- <a class="btn btn-edit-comments btn-lg btn-primary"
                            --}} {{--
                            href="{{ route('edit_comments', [$repl->id, $comment->id]) }}"
                            role="button">Редактировать</a>--}}
                        {{-- <button type="button" value="{{ $repl->id }}"
                            data-post="{{ $comment->id }}"
                            class="btn btn-edit-comments del_comment btn-lg btn-primary">Удалить</button>--}}
                    {{-- @endif
                @endauth
            </div>
        </div>
    </div> --}}
@endforeach
