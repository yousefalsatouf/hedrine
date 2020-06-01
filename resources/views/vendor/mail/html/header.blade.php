<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Hedrine')
<img src= {{ asset('images/logo_ulb_hedrine.png') }} alt="Logo Hedrine">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
