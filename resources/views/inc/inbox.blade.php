@foreach ($messages as $message)
    <li>
      <a href="/messages/{{ $message->msgId }}/edit">

        <div class="row message-container justify-content-center">
          <h4>{{ ucwords($message->username) }}</h4>
          <span class="d-time">{{ $message->email }} | {{ date('F d, Y | h:i:s a', strtotime($message->created_at))  }}</span>
          <span class="m-time">{{ $message->email }} <br>{{ date('F d, Y | h:i:s a', strtotime($message->created_at)) }}</span>
          <div class="col-sm-10 col-md-10 col-lg-10 div_msg">
            <p class="p_msg">
              {{ $message->description }}
            </p>
          </div>
        </div>
      </a>
    </li>
@endforeach
@foreach ($read as $reads)
      <li>
        <a href="/messages/{{ $reads->msgId }}/edit">
          <div class="row r-message-container justify-content-center">
            <h4>{{ ucwords($reads->username) }}</h4>
            <span class="d-time">{{ $reads->email }} | {{ date('F d, Y | h:i:s a', strtotime($message->created_at)) }}</span>
            <span class="m-time">{{ $reads->email }} <br>{{ date('F d, Y | h:i:s a', strtotime($message->created_at)) }}</span>
            <div class="col-sm-10 col-md-10 col-lg-10 div_msg">
              <p class="r-p_msg">
                {{ $reads->description }}
              </p>
            </div>
          </div>
        </a>
      </li>
@endforeach
