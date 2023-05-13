
<section class="content-header">
    <h1>
      @yield('title')
    </h1>
    <ol class="breadcrumb">
        @section('badge')
                    <li class="breadcrumb-item"><a href="/dashboard"><i class="fa fa-dashboard"></i> Home</a></a></li>
        @show
      
      <li class="active">@yield('title')</li>


    </ol>
  </section>
