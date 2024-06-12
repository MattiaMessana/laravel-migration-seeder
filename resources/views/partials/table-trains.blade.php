{{-- 
    Azienda
    Stazione di partenza
    Stazione di arrivo
    Orario di partenza
    Orario di arrivo
    Codice Treno
    Numero Carrozze
    In orario
    Cancellato 
--}}

<table class="table table-dark table-hover">
    <thead>
        <tr>
            <th scope="col">N.</th>
            <th scope="col">Compagnia</th>
            <th scope="col">Stazione di partenza</th>
            <th scope="col">Stazione di arrivo</th>
            <th scope="col">Orario di partenza</th>
            <th scope="col">Orario di arrivo</th>
            <th scope="col">Binario</th>
            <th scope="col">Codice Treno</th>
            <th scope="col">Numero Carrozze</th>
            <th scope="col">In orario</th>
            <th scope="col">Cancellato</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($trains as $train)
            <tr>
                <th scope="row">{{ $train->id }}</th>
                <td>{{ $train->company }}</td>
                <td>{{ $train->departure_station }}</td>
                <td>{{ $train->arrival_station }}</td>
                <td>{{ $train->departure_time }}</td>
                <td>{{ $train->arrival_time }}</td>
                <td>{{$train->platform}}</td>
                <td>{{ $train->train_code }}</td>
                <td>{{ $train->train_cars }}</td>
                <td>
                    @if ($train->is_on_time)
                        {{ $train->is_on_time = 'SI' }}
                    @else
                        {{ $train->is_on_time = 'NO' }}
                    @endif
                </td>
                <td>
                    @if ($train->is_deleted)
                        {{ $train->is_deleted = 'SI' }}
                    @else
                        {{ $train->is_deleted = 'NO' }}
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
