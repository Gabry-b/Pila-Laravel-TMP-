
    <div class="container col-md-8 col-md-offset-2">
        <div class="panel panel-default">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($perfils as $perfil)
                                <tr>
                                    <td>{!! $perfil->biografia !!}</td>
                                    <td>{!! $perfil->direccioN !!}</td>
                                    <td>{!! $perfil->telefono !!}</td>
                                    <td>{!! $perfil->interesadoen !!}</td>
                                    <td>{!! $perfil->fecha_nacimiento !!}</td>
                                    <td>{!! $perfil->imagen_fondo !!}</td>
                                    <td>{!! $perfil->imagen_perfil !!}</td>
                                </tr>
                        @endforeach    
                    </tbody>
                </table>
        </div>
    </div>
