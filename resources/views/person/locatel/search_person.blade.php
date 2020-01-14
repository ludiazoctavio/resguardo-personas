@if (count($people) > 0)
@foreach ($people as $item)
    @if ($item->type_register_id == 1)
    <tr>
        <th scope="row"><a href="{{ route('dashboard.person.edit', $item)}}" target="_blank">{{$item->folio}}</a></th>
        <td class="text-center">@if(!is_null($item->age)) {{$item->age->name}} @elseif($item->age_range) {{$item->age_range->name}} @endif</td>
        <td class="text-center">{{$item->getFullName()}}</td>
        <td class="text-center">{{$item->gender->name}}</td>
        <td class="text-center">Locatel</td>
    </tr>
    @elseif ($item->type_register_id == 2)
    <tr>
        <th scope="row"><a href="{{ route('dependence.person_dependence.edit', $item)}}" target="_blank">{{$item->folio}}</a></th>
        <td class="text-center">@if(!is_null($item->age)) {{$item->age->name}} @elseif($item->age_range) {{$item->age_range->name}} @endif</td>
        <td class="text-center">@if(strlen($item->getFullName()) >= 3) {{$item->getFullName()}} @else PERSONA NO IDENTIFICADA @endif</td>
        <td class="text-center">{{$item->gender->name}}</td>
        <td class="text-center">{{$item->dependence->name}}</td>
    </tr>
    @endif
@endforeach
@else
<tr>
    <td colspan="5" class="text-center">¡Sin resultados!</td>
</tr>
@endif