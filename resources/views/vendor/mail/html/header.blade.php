<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
        <img
            src="https://jtlrho.stripocdn.email/content/guids/CABINET_e13c165f1ba6912ff0bea1f5880abaf8/images/treble_clef_white.jpeg"
            alt="Logo"
            style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;font-size:12px"
            width="280" title="Logo">
    @else

{{ $slot }}
@endif
</a>
</td>
</tr>


