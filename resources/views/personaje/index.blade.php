<div class="row">

    <div class="col-md-4">
        <div class="card card-blog">
            <div class="card-image">
                <img class="img rounded" style="width: 5rem;" src="{{asset('./assets/img/personajes/1.jpg')}}">
            </div>
            <div class="card-body">
                <h3 class="card-title">HOLA</h3>
            </div>
            <form action="" method="POST">
                {{ csrf_field() }}
                <a href="">
                    <button type="button" rel="tooltip" class="btn btn-success btn-fab btn-round" data-toggle="tooltip" data-placement="top" title="Editar"><i class="now-ui-icons ui-2_settings-90"></i></button>
                </a>
                <a href="">
                    <button type="button" rel="tooltip" class="btn btn-danger btn-fab btn-round" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="now-ui-icons ui-1_simple-remove"></i></button>
                </a>
            </form>
        </div>
    </div>

</div>
