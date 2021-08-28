<x-layout>
    <x-blocks.header :data="\App\Models\Block::getByKey('first_screen')" />
    <x-blocks.conditions />
    <x-blocks.responsibilities />
    <x-blocks.feedback />
    <x-blocks.about />
    <x-blocks.projects />
    <x-blocks.footer />
    <x-modals.modals />
</x-layout>
