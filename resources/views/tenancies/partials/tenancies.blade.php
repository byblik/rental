<table class="table table-striped">
    <tr>
        <th>id</th>
        <th>start date</th>
        <th>end date</th>
        <th>monthly rent</th>
    </tr>
    
    @foreach($tenancies as $tenancy)
        <tr>
            <td>
                {{ $tenancy->id }}
            </td>
            <td>
                {{ $tenancy->start_date }}
            </td>
            <td>
                {{ $tenancy->end_date }}
            </td>
            <td>
                {{ $tenancy->monthly_rent }}
            </td>
        </tr>
    @endforeach
</table>
