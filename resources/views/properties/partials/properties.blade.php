<table class="table table-striped">
    <tr>
        <th>id</th>
        <th>Property name</th>
    </tr>
    
    @foreach($properties as $property)
        <tr>
            <td>
                {{ $property->id }}
            </td>
            <td>
                {{ $property->name }}
            </td>
        </tr>
    @endforeach
</table>
