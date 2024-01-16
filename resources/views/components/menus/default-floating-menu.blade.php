@props([
    'statePath' => null,
    'tools' => [],
    'blocks' => [],
    'shouldSupportBlocks' => false,
    'editor' => null,
])

<div x-ref="defaultFloatingMenu" class="flex gap-1 items-center" x-cloak>
    @if (in_array('media', $tools)) <x-filament-tiptap-editor::tools.media :state-path="$statePath" :editor="$editor"/> @endif
    @if (in_array('grid', $tools)) <x-filament-tiptap-editor::tools.grid :state-path="$statePath" :editor="$editor"/> @endif
    @if (in_array('grid-builder', $tools)) <x-filament-tiptap-editor::tools.grid-builder :state-path="$statePath" :editor="$editor"/> @endif
    @if (in_array('details', $tools)) <x-filament-tiptap-editor::tools.details :state-path="$statePath" :editor="$editor"/> @endif
    @if (in_array('table', $tools)) <x-filament-tiptap-editor::tools.table :state-path="$statePath" :editor="$editor"/> @endif
    @if (in_array('oembed', $tools)) <x-filament-tiptap-editor::tools.oembed :state-path="$statePath" :editor="$editor"/> @endif
    @if (in_array('code-block', $tools)) <x-filament-tiptap-editor::tools.code-block :state-path="$statePath" :editor="$editor"/> @endif
    @if ($blocks && $shouldSupportBlocks) <x-dynamic-component component="filament-tiptap-editor::tools.blocks" :blocks="$blocks" :state-path="$statePath" /> @endif
</div>
