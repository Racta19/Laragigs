@if(session() -> has('message'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show='show' class="fixed left-1/2 top-0 trasnform -translate-x-1/2 bg-green-400 text-white px-48 py-3">
        <p>{{session('message')}}</p>
    </div>
@endif

