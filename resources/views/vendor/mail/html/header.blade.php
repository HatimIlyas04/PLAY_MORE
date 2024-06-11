@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ asset('assets/images/logo/4.png') }}" class="logo" alt="PlayMore">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
