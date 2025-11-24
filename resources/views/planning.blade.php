@extends("template")

@section("title", "Planning des Tâches")

@section("content")

<div class="container pt-4">
    <div class="card">
        <div class="card-body">
    <!-- He who is contented is rich. - Laozi -->
     <ul class="list-group">
                @forelse ($todos as $todo)
                    <li class="list-group-item">
                        <!-- Affichage du texte -->
                        <span>{{ $todo->texte }}</span>
                    </br>
                        <span>a faire avant le :{{ $todo->date_fin }}</span>
                        
                    </li>
                @empty
                    <li class="list-group-item text-center">C'est vide !</li>
                @endforelse
            </ul>
            </div>
    </div>
</div>
@endsection
