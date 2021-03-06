<section class="typology">
  <h2>{{ $title }}</h2>
  <div class="cards">
      @foreach ($pastaArray as $pasta) 
          <div class="card">
              <img src="{{ $pasta["src"] }}" alt="{{ $pasta["titolo"] }}">
              <div class="card-text">
                  <a href="{{ route('prodotto', [ 'id' => $pasta['id'] ]) }}">{{ $pasta["titolo"] }}</a>
              </div>
          </div>
      @endforeach
  </div>
</section>