<!-- resources/views/search/results.blade.php -->

<h1>Search Results for "{{ $query }}"</h1>

@foreach($posts as $blogg)
    <article>
        <h1><a href="#"> <?= $blogg->title; ?></a></h1>
            <div>
                    <br>
                    <?= $blogg->excerpt; ?> <br>
                    <?= $blogg->body; ?> <br>
                    <?= $blogg->url; ?> <br>
                    <?= $blogg->user; ?> <br>
                    <?= $blogg->icon; ?> <br>
                    <?= $blogg->icon_name; ?> <br>
                    <?= $blogg->icon_tekt; ?> <br>
                    <?= $blogg->updated_at; ?> 
        </div>
    </article>
@endforeach
