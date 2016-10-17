<table class="table table-striped">
    <tr>
        <th>id</th>
        <th>Tenant name</th>
        <th>Tenant image</th>
    </tr>
    
    @foreach($tenants as $tenant)
        <tr>
            <td>
                {{ $tenant->id }}
            </td>
            <td>
                {{ $tenant->name }}
            </td>
            <td>
                <img with="100" height="100" src="{{ url($tenant->getImagePath()) }}" alt=""/>
            </td>
        </tr>
    @endforeach
</table>
