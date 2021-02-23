<div class="jumbotron">
    <h1 class="display-4">{{$show->company}}</h1>
        <div class="w-100">
            <img class="w-100" src="{{$show->src}}" alt="">
        </div>
    <p class="lead">{{$show->address}}</p>
    <p class="lead">{{$show->phone}}</p>
    <p class="lead">{{$show->email}}</p>
    <p class="lead">Contact person: {{$show->name}} {{$show->surname}}</p>
    <hr class="my-4">
    <a class="btn btn-danger btn-lg" href="/deleteCompany/{{$show->id}}" role="button">Delete</a>
    <a class="btn btn-secondary" href="/">Back</a>
</div>