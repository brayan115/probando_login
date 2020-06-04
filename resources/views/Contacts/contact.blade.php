@extends("layouts.app")

@section("content")
    <div class="container">  
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
        <form id="contact"  method="post" action="{{ route('Contacts.store') }}">
          @csrf
          <h3>Quick Contact</h3>
          <h4>Contact us today, and get reply with in 24 hours!</h4>
          <fieldset>
            <input placeholder="Your name" name="name" type="text" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <input placeholder="Your Email Address" name="email" type="email" tabindex="2" required>
          </fieldset>
          <fieldset>
            <input placeholder="Your Phone Number" name=" phone" type="tel" tabindex="3" required>
          </fieldset>
          <fieldset>
            <input placeholder="Your Web Site starts with http://" name="web" type="url" tabindex="4" required>
          </fieldset>
          <fieldset>
            <textarea placeholder="Type your Message Here...." name="menssage" tabindex="5" required></textarea>
          </fieldset>
          <fieldset>
            <button  type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
          </fieldset>
        </form>
      </div>
      <script src="{{ asset('js/app.js') }}" type="text/js"></script>
@endsection