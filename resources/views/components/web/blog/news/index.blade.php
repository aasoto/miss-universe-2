<div>
    <div class="card">
        <div class="card-header-primary">
            <h5>Noticias acerca del certamen</h5>
        </div>
        <div class="card-body">
            <table class="table-striped">
                <thead>
                    <tr>
                        <td>Título</td>
                        <td>Descripción</td>
                        <td>Acción</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $n)
                        <tr>
                            <td>{{$n->title}}</td>
                            <td>{{$n->subtitle}}</td>
                            <td><a href="{{route('web.blog.news.show', $n)}}"><button class="btn btn-primary">Ir</button></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$news->links()}}
        </div>
    </div>
</div>
