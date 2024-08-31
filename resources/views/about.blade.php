@extends("layouts.main")

@section("title", "About")

@section("container")
      <div class="container">
        <h1>About me</h1>
        <img src="img/ben.jpg" alt="{{ $nama }}" width="200px">
        <h3>{{ $nama }}</h3>
        <b>{{ $prodi }}</b>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore, dolores nobis mollitia veritatis nesciunt eum ab nostrum voluptatem! Vitae iure commodi ex temporibus rem doloribus repellat modi beatae, blanditiis earum!</p>
      </div>
@endsection

