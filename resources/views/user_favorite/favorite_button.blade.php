@if (Auth::id() != $user->id)
    @if (Auth::user()->is_favoriting($microposts->id))
        {{-- 非追加ボタンのフォーム --}}
        {!! Form::open(['route' => ['microposts.unfavorite', $microposts->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {{-- お気に入り追加ボタンのフォーム --}}
        {!! Form::open(['route' => ['microposts.favorite', $microposts->id]]) !!}
            {!! Form::submit('Follow', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
@endif