@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://res.cloudinary.com/drv2e9fcw/image/upload/v1720966703/acon-logo-black-bg.png" class="logo" alt="Acon Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
