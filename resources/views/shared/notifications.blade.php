@php
  $notifTypes = ['success', 'warning', 'error', 'info'];
@endphp

@foreach ($notifTypes as $notifType)
  @if (session($notifType))
    <script>
      iziToast.{{ $notifType }}({
        title: '{{ ucfirst($notifType) }}',
        message: '{{ session($notifType) }}',
      });
    </script>
  @endif
@endforeach
