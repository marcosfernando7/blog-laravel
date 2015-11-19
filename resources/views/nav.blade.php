<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('admin.index') }}">CMS</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

      {{-- posts --}}
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-folder"></i> Categorias <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('admin.categorias.create') }}">Adicionar</a></li>
            <li><a href="{{ route('admin.categorias') }}">Todas</a></li>
          </ul>
        </li>

        {{-- posts --}}
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-pushpin"></span> Posts <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('admin.posts.create') }}">Adicionar</a></li>
            <li><a href="{{ route('admin.posts') }}">Todos</a></li>
          </ul>
        </li>


        {{-- comentarios --}}
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-comment"></span> Comentários <span class="caret"></span></a>  
          <ul class="dropdown-menu">
            <li><a href="{{ route('admin.comentarios.create') }}">Adicionar</a></li>
            <li><a href="{{ route('admin.comentarios') }}">Todos</a></li>
          </ul>
        </li>
      </ul>
    
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-remove"></span> Sair</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>