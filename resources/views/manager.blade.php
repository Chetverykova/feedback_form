@extends('layouts.app')

@section('content')
    <ul class="list-group">
        @foreach($messages as $k => $message)
            <li class="list-group-item">
                <span class="tag tag-default tag-pill pull-xs-right">
                    <form method="post">
                        <div class="form-check">
                            <input class="form-check-input" @php if($message->answer_status == 1) { echo 'checked'; } @endphp name="answer" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                            Answered
                            </label>
                            <input type hidden name="id" value="{{ $message->id }}">
                            <input type="submit" value="submit">
                        </div>
                        @csrf
                    </form>
                </span>
            </li>

            <li class="list-group-item">
                {{ $message->id }}
            </li>
            <li class="list-group-item">
                {{ $message->name }}
            </li>
            <li class="list-group-item">
                {{ $message->subject }}
            </li>
            <li class="list-group-item">
                {{ $message->message }}
            </li>
            <li class="list-group-item">
                {{ $message->email }}
            </li>
            <li class="list-group-item">
                {{ $message->file }}
            </li>
            <li class="list-group-item">
                {{ $message->created_at }}
            </li>
            <br />
        @endforeach
    </ul>
@endsection