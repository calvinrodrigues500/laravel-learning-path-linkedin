<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Note') }}
        </h2>
    </x-slot>

    <div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-6">
		<form action="{{route('notes.update', $note)}}" method="POST">
			@method('put')
			@csrf
			<x-text-input type="text" name="title" id="title" placeholder="Title" class="w-full" field="title" :value="@old('title', $note->title)"></x-text-input>
			<x-textarea-input name="text" id="text" cols="30" rows="10" placeholder="Start typing here" class="w-full mt-6" field="text" :value="@old('text', $note->text)"></x-textarea-input>
			<x-primary-button>Save</x-primary-button>
		</form>
        </div>
    </div>
</x-app-layout>
