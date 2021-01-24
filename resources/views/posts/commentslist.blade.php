@foreach($comments as $comment)

    <div id="content" class="row align-items-stretch program">
        <div class="col-12 border-top border-bottom py-5" data-aos="fade"
             data-aos-delay="200">
            <div class="row align-items-stretch">
                <div class="col-md-3 text-white mb-3 mb-md-0"><span
                        class="h4">{{$comment->name_user}}</span>
                    <hr>
                    @foreach($users as $user)
                        @if ($comment->email_user === $user->email)
                            @if($user->avatar === 'users/default.png')
                                <img
                                    src="https://eu.ui-avatars.com/api/?name={{ $user->name }}&background=a73737&color=050202&font-size=0.33&size=50"
                                    class="avatar img-fluid rounded-circle mr-1" alt="avatar">
                            @else
                                <img src="{{asset($user->avatar) }}"
                                     class="avatar img-fluid rounded-circle mr-1" width="40"
                                     alt="avatar">
                            @endif
                        @endif
                    @endforeach

                    @if(strlen($comment->email_user) < 23)
                        <span class="h6">{{$comment->email_user}}</span>
                    @else
                        <span style="font-size: 12px">{{$comment->email_user}}</span>
                    @endif
                </div>
                <div class="col-md-9">
                    <p id="comment-message" class="text-white">{{$comment->message}}</p><br>
                    <span>{{$comment->created_at}}</span>
                </div>
                @auth
                    @if ($comment->email_user === Auth::user()->email)
                        <a class="btn btn-edit-comments btn-lg btn-primary"
                           href="{{route('edit_comments',[$post_id,$comment->id])}}" role="button">Редактировать</a>
                        <button type="button" value="{{$post_id}}" data-post="{{$comment->id}}" class="btn btn-edit-comments del_comment btn-lg btn-primary">Удалить</button>
                    @endif
                @endauth
            </div>
        </div>
    </div>
@endforeach

