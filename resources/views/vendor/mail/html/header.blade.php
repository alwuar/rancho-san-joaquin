@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://ranchosanjoaquin.com.mx/img/logo-rancho.svg" class="logo" alt="Rancho San Joaquín Logo">
@else
{!! $slot !!}
@endif
</a>
</td>
</tr>
