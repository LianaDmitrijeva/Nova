<!-- Carousel - unisex -->
@if(\App\Models\Product::where('sex', 'Unisex')->count() > 0)
  <h2 class="caregoryheader">Unisex</h2>

  <!-- Carousel for max-width: 999px -->
  <div id="carousel111" class="carousel slide">
    <div class="carousel-inner">
      @foreach($unisex_products as $index => $product)
        @if($index % 4 == 0)
          <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
            <div class="row">
        @endif
              <div class="col-lg-3">
                <div class="item-box">
                  <div class="previewcard">
                    <img class="preview" src="{{ asset('img/' . $product->picture) }}" alt="{{ $product->name }}">
                    <h5>{{ $product->name }}</h5>
                    <strong>{{ $product->price }}</strong>
                  </div>
                </div>
              </div>
              @if($index % 4 == 3 || $index == count($unisex_products) - 1)
            </div>
          </div>
              @endif
      @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel111" data-bs-slide="prev">
      <img src="{{ asset('svg/left_arrow.svg') }}" alt="Description of the icon">
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel111" data-bs-slide="next">
      <img src="{{ asset('svg/right_arrow.svg') }}" alt="Description of the icon">
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  
  <!-- Carousel for max-width: 745px -->
  <div id="carousel222" class="carousel slide">
    <div class="carousel-inner">
      @foreach($unisex_products as $index => $product)
        @if($index % 3 == 0)
          <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
            <div class="row">
        @endif
              <div class="col-sm-4">
                <div class="item-box">
                  <div class="previewcard">
                    <img class="preview" src="{{ asset('img/' . $product->picture) }}" alt="{{ $product->name }}">
                    <h5>{{ $product->name }}</h5>
                    <strong>{{ $product->price }}</strong>
                  </div>
                </div>
              </div>
              @if($index % 3 == 2 || $index == count($unisex_products) - 1)
            </div>
          </div>
              @endif
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel222" data-bs-slide="prev">
      <img src="{{ asset('svg/left_arrow.svg') }}" alt="Description of the icon">
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel222" data-bs-slide="next">
      <img src="{{ asset('svg/right_arrow.svg') }}" alt="Description of the icon">
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Carousel for max-width: 495px -->
  <div id="carousel333" class="carousel slide">
    <div class="carousel-inner">
      @foreach($unisex_products as $index => $product)
        @if($index % 2 == 0)
          <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
            <div class="row">
        @endif
              <div class="col-6">
                <div class="item-box">
                  <div class="previewcard">
                    <img class="preview" src="{{ asset('img/' . $product->picture) }}" alt="{{ $product->name }}">
                    <h5>{{ $product->name }}</h5>
                    <strong>{{ $product->price }}</strong>
                  </div>
                </div>
              </div>
              @if($index % 2 == 1 || $index == count($unisex_products) - 1)
            </div>
          </div>
              @endif
      @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel333" data-bs-slide="prev">
      <img src="{{ asset('svg/left_arrow.svg') }}" alt="Description of the icon">
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel333" data-bs-slide="next">
      <img src="{{ asset('svg/right_arrow.svg') }}" alt="Description of the icon">
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Carousel for width < 495px -->
  <div id="carousel444" class="carousel slide">
    <div class="carousel-inner">
      @foreach($unisex_products as $index => $product)
        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
          <div class="row">
            <div class="col-12">
              <div class="item-box">
                <div class="previewcard">
                  <img class="preview" src="{{ asset('img/' . $product->picture) }}" alt="{{ $product->name }}">
                  <h5>{{ $product->name }}</h5>
                  <strong>{{ $product->price }}</strong>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel444" data-bs-slide="prev">
      <img src="{{ asset('svg/left_arrow.svg') }}" alt="Description of the icon">
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel444" data-bs-slide="next">
      <img src="{{ asset('svg/right_arrow.svg') }}" alt="Description of the icon">
      <span class="visually-hidden">Next</span>
    </button>
  </div>
@endif