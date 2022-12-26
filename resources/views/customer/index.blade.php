<x-layout title="Clients">
    @foreach ($customers as $customer)
        <x-customer.inline :customer="$customer" />
    @endforeach
</x-layout>