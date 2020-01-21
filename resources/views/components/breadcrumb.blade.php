  <!-- ====================================
  ———	BREADCRUMB
  ===================================== -->
  <section class="breadcrumb-bg" style="background-image: url('{{ asset('assets/img/background/page-title-bg-img.jpg') }}'); ">
    <div class="container">
      <div class="breadcrumb-holder">
        <div>
          <h1 class="breadcrumb-title">{{ $title }}</h1>
          <ul class="breadcrumb breadcrumb-transparent">
            <?php $segments = ''; ?>
            @foreach(Request::segments() as $segment)
                <?php $segments .= '/'.$segment; ?>
                <li class="breadcrumb-item">
                    <a class="text-white" href="{{ $segments }}">{{$segment}}</a>
                </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </section>