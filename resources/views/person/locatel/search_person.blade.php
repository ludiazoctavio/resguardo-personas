@if (count($people) > 0)
@foreach ($people as $item)
<tr>
    <th scope="row"><a href="#">{{$item->folio}}</a></th>
    <td class="text-center">@if(!is_null($item->age)) {{$item->age->name}} @elseif($item->age_range) {{$item->age_range->name}} @endif</td>
    <td class="text-center">{{$item->getFullName()}}</td>
    <td class="text-center">{{$item->gender->name}}</td>
    <td class="text-center"><a href="#">{{--<i class="fa fa-pencil"></i>--}}</a></td>
</tr>
@endforeach
@else
<tr>
    <td colspan="5" class="text-center">¡Sin resultados!</td>
</tr>
@endif