<div class="flex flex-nowrap items-center py-2 px-5 cursor-pointer dark:hover:bg-slate-700">
    <div class="basis-1/5">{{ $customer->name }} {{ $customer->firstname }}</div>
    <div class="basis-1/5">{{ $customer->address }}<br>{{ $customer->postcode }} {{ $customer->city }}</div>
    <div class="basis-1/5"></div>
    <div class="basis-1/5">{{ $customer->phone }}</div>
</div>